<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class HomeSubCategoryController extends Controller
{
    public function index() {
        $categories = Category::with('sub_category')->orderBy('category_name', 'ASC')->get();
        return view('admin.home.subcategory.index', compact('categories'));
    }

    public function create() {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.home.subcategory.create', compact('categories'));
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
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.home.subcategory.edit', compact('subcategory', 'categories'));
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
        $subcategory->delete();

        $notification = [
            'message' => $subcategory->category_name . ' Sub Category Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
