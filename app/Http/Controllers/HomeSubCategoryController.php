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

class HomeSubCategoryController extends Controller
{
    public function index() {
        $categories = Category::with('sub_category')->orderBy('category_name', 'ASC')->get();
        return view('admin.home.subcategory.index', compact('categories'));
    }

    public function create() {
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('admin.home.subcategory.create', compact('cities'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'sub_name' => 'required|unique:sub_categories,sub_name',
        ],[
            'category_id.integer' => 'The Category field is required.'
        ]);

        $validated['sub_slug'] = Str::slug($request->sub_name);

        SubCategory::create($validated);

        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.subcategory.index')->with($notification);
    }

    public function edit(SubCategory $subcategory) {
        $selected_city = City::with('category')->findOrFail($subcategory->category->city_id)->first();
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('admin.home.subcategory.edit', compact('subcategory', 'cities', 'selected_city'));
    }

    public function update(Request $request, SubCategory $subcategory) {
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'sub_name' => ['required', Rule::unique('sub_categories')->ignore($subcategory->id, 'id')],
        ],[
            'category_id.integer' => 'The Category field is required.'
        ]);

        $validated['sub_slug'] = Str::slug($request->sub_name);

        $subcategory->update($validated);

        $notification = [
            'message' => 'Sub Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.subcategory.index')->with($notification);
    }

    public function destroy(SubCategory $subcategory) {
        $batiks = Batik::where('sub_id', $subcategory->id)->get();
        foreach ($batiks as $batik) {
            if(file_exists(public_path($batik->batik_picture))) unlink($batik->batik_picture);
        }
        Batik::where('sub_id', $subcategory->id)->delete();
        $subcategory->delete();

        $notification = [
            'message' => $subcategory->category_name . ' Sub Category Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
