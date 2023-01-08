<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class HomeCategoryController extends Controller
{
    public function index() {
        $cities = City::with('category')->get();
        return view('admin.home.category.index', compact('cities'));
    }

    public function create() {
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('admin.home.category.create', compact('cities'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'city_id' => 'required|integer',
            'category_no' => 'required|integer',
            'category_name' => 'required|unique:categories,category_name',
        ],[
            'city_id.integer' => 'The City field is required.'
        ]);

        $validated['category_slug'] = Str::slug($request->category_name);

        Category::create($validated);

        $notification = [
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.category.index')->with($notification);
    }

    public function edit(Category $category) {
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('admin.home.category.edit', compact('category', 'cities'));
    }

    public function update(Request $request, Category $category) {
        $validated = $request->validate([
            'city_id' => 'required|integer',
            'category_no' => 'required|integer',
            'category_name' => ['required', Rule::unique('categories')->ignore($category->id, 'id')],
        ]);

        $validated['category_slug'] = Str::slug($request->category_name);

        $category->update($validated);

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.category.index')->with($notification);
    }

    public function destroy(Category $category) {
        $category->delete();

        $notification = [
            'message' => $category->category_name . ' Category Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
