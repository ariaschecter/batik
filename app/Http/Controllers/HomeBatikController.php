<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\Category;
use App\Models\City;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class HomeBatikController extends Controller
{
    public function index() {
        $batiks = Batik::with('category','sub_category')->orderBy('category_id', 'ASC')->get();
        return view('admin.home.batik.index', compact('batiks'));
    }

    public function create() {
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('admin.home.batik.create', compact('cities'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'category_id' => 'required',
            'batik_name' => 'required',
            'batik_picture' => 'required|file|image|max:5120',
            'batik_description' => 'required',
        ],[
            'category_id.integer' => 'The Category field is required.'
        ]);

        $image = $request->file('batik_picture');
        $upload = 'image/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(770, 450)->save($upload);

        $validated = $request->except(['_token', 'batik_picture']);
        $validated['batik_picture'] = $upload;
        $validated['batik_slug'] = Str::slug($request->batik_name);

        Batik::create($validated);

        $notification = [
            'message' => 'Batik Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.batik.index')->with($notification);
    }

    public function edit(Batik $batik) {
        $cities = City::orderBy('city_name', 'ASC')->get();
        $categories = Category::where('city_id', $batik->category->city_id)->orderBy('category_name', 'ASC')->get();
        $sub_categories = SubCategory::where('category_id', $batik->category_id)->orderBy('sub_name', 'ASC')->get();
        return view('admin.home.batik.edit', compact('batik', 'cities', 'categories', 'sub_categories'));
    }

    public function update(Request $request, Category $category, Batik $batik) {
        $request->validate([
            'category_id' => 'required',
            'batik_name' => ['required'],
            'batik_picture' => 'file|image|max:5120',
            'batik_description' => 'required',
        ]);

        $batik_picture = '';
        $validated = $request->except(['_token', 'batik_picture']);

        if ($request->batik_picture) {
            unlink($batik->batik_picture);
            $image = $request->file('batik_picture');
            $batik_picture = 'image/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(770, 450)->save($batik_picture);

        } else {
            $batik_picture = $batik->batik_picture;
        }

        $validated['batik_picture'] = $batik_picture;
        $validated['batik_slug'] = Str::slug($request->batik_name);

        $batik->update($validated);

        $notification = [
            'message' => 'Batik Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.batik.index')->with($notification);
    }

    public function destroy(Batik $batik) {
        unlink($batik->batik_picture);
        $batik->delete();

        $notification = [
            'message' => 'Batik ' . $batik->batik_name . ' Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
