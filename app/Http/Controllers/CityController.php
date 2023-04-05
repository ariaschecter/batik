<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\Category;
use App\Models\City;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Image;

class CityController extends Controller
{
    public function index() {
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('admin.city.index', compact('cities'));
    }

    public function create() {
        return view('admin.city.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'city_name' => 'required|unique:cities,city_name',
            'city_picture' => 'required|file|image'
        ]);

        $image = $request->file('city_picture');
        $upload = 'image/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(363, 363)->save($upload);


        $validated['city_picture'] = $upload;
        $validated['city_slug'] = Str::slug($request->city_name);

        City::create($validated);

        $notification = [
            'message' => 'City Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('city.index')->with($notification);
    }

    public function edit(City $city) {
        return view('admin.city.edit', compact('city'));
    }

    public function update(Request $request, City $city) {
        $validated = $request->validate([
            'city_name' => ['required', Rule::unique('cities')->ignore($city->id, 'id')],
            'city_picture' => 'file|image'
        ]);

        if ($request->city_picture) {
            if(file_exists(public_path($city->city_picture))) unlink($city->city_picture);
            $image = $request->file('city_picture');
            $city_picture = 'image/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(363, 363)->save($city_picture);
        } else {
            $city_picture = $city->city_picture;
        }

        $update = $request->except(['_token', 'city_picture']);
        $update['city_slug'] = Str::slug($request->city_name);
        $update['city_picture'] = $city_picture;

        $city->update($update);

        $notification = [
            'message' => 'City Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('city.index')->with($notification);
    }

    public function destroy(City $city) {
        $categories = Category::where('city_id', $city->id)->get();
        foreach ($categories as $category) {
            SubCategory::where('category_id', $category->id)->delete();
            foreach ($category->batik as $batik) {
                if(file_exists(public_path($batik->batik_picture))) unlink($batik->batik_picture);
            }
            Batik::where('category_id', $category->id)->delete();
        }
        Category::where('city_id', $city->id)->delete();
        if(file_exists(public_path($city->city_picture))) unlink($city->city_picture);
        $city->delete();

        $notification = [
            'message' => $city->city_name . ' City Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
