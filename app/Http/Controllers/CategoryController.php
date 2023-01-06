<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(City $city) {
        $categories = Category::with('city')->get();
        return view('admin.category.index', compact('city', 'categories'));
    }

    public function create(City $city) {
        return view('admin.category.create', compact('city'));
    }

    public function store(Request $request, City $city) {
        $validated = $request->validate([
            'category_no' => 'required|integer',
            'category_name' => 'required|unique:categories,category_name',
        ]);

        $validated['city_id'] = $city->id;
        $validated['category_slug'] = Str::slug($request->category_name);

        Category::insert($validated);

        $notification = [
            'message' => 'Category ' . $city->city_name .' Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('category.index', $city->city_slug)->with($notification);
    }

    public function edit(City $city, Category $category) {
        return view('admin.category.edit', compact('city', 'category'));
    }

    public function update(Request $request, City $city, Category $category) {
        $validated = $request->validate([
            'category_no' => 'required|integer',
            'category_name' => ['required', Rule::unique('categories')->ignore($category->id, 'id')],
        ]);

        $validated['category_slug'] = Str::slug($request->category_name);

        $category->update($validated);

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('category.index', $city->city_slug)->with($notification);
    }

    public function destroy(City $city, Category $category) {
        $category->delete();

        $notification = [
            'message' => 'Category ' . $category->category_name . ' Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('category.index', $city->city_slug)->with($notification);
    }
}
