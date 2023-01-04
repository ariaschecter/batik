<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
            'city_picture' => 'required|file|image|max:5120'
        ]);

        $upload = $request->file('city_picture')->store('upload/city');

        $validated['city_picture'] = $upload;
        $validated['city_slug'] = Str::slug($request->city_name);

        City::insert($validated);

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
            'city_picture' => 'file|image|max:5120'
        ]);

        if ($request->city_picture) {
            Storage::delete($city->city_picture);
            $city_picture = $request->file('city_picture')->store('upload/city');
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
        Storage::delete($city->city_picture);
        $city->delete();

        $notification = [
            'message' => $city->city_name . ' City Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
