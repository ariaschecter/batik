<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SubCategoryController extends Controller
{
    public function index(Category $category) {
        $subcategories = SubCategory::with('category')->get();
        return view('admin.subcategory.index', compact('category', 'subcategories'));
    }

    public function create(Category $category) {
        return view('admin.subcategory.create', compact('category'));
    }

    public function store(Request $request, Category $category) {
        $validated = $request->validate([
            'sub_name' => 'required|unique:sub_categories,sub_name',
        ]);

        $validated['category_id'] = $category->id;
        $validated['sub_slug'] = Str::slug($request->sub_name);

        SubCategory::insert($validated);

        $notification = [
            'message' => 'Sub Category ' . $category->category_name .' Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }

    public function edit(Category $category, SubCategory $subcategory) {
        return view('admin.subcategory.edit', compact('category', 'subcategory'));
    }

    public function update(Request $request, Category $category, SubCategory $subcategory) {
        $validated = $request->validate([
            'sub_name' => ['required', Rule::unique('sub_categories')->ignore($subcategory->id, 'id')],
        ]);

        $validated['sub_slug'] = Str::slug($request->sub_name);

        $subcategory->update($validated);

        $notification = [
            'message' => 'Sub Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }

    public function destroy(Category $category, SubCategory $subcategory) {
        $subcategory->delete();

        $notification = [
            'message' => 'Sub Category ' . $subcategory->sub_name . ' Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }
}
