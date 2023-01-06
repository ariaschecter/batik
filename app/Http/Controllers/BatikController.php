<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BatikController extends Controller
{
    public function create(Category $category) {
        $categories = Category::with('sub_category')->orderBy('category_no', 'ASC')->get();
        return view('admin.batik.create', compact('categories', 'category'));
    }

    public function fetch_sub_category(Request $request) {
        $data['sub_categories'] = SubCategory::where('category_id', $request->category_id)
                                ->get(['sub_name', 'id']);

        return response()->json($data);
    }

    public function store(Request $request, Category $category) {
        $request->validate([
            'category_id' => 'required',
            'batik_name' => 'required|unique:sub_categories,sub_name',
            'batik_picture' => 'required|file|image|max:5120',
            'batik_description' => 'required',
        ]);

        $upload = $request->file('batik_picture')->store('upload/batik');

        $validated = $request->except(['_token', 'batik_picture']);
        $validated['batik_picture'] = $upload;
        $validated['batik_slug'] = Str::slug($request->batik_name);

        Batik::insert($validated);

        $notification = [
            'message' => 'Batik ' . $category->category_name .' Category Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }

    public function edit(Category $category, Batik $batik) {
        $selected_category = Category::with('sub_category')->findOrFail($category->id)->first();
        $categories = Category::with('sub_category')->orderBy('category_no', 'ASC')->get();
        return view('admin.batik.edit', compact('selected_category', 'batik', 'categories'));
    }

    public function update(Request $request, Category $category, Batik $batik) {
        $validated = $request->validate([
            'sub_name' => ['required', Rule::unique('sub_categories')->ignore($batik->id, 'id')],
        ]);

        $validated['sub_slug'] = Str::slug($request->sub_name);

        $batik->update($validated);

        $notification = [
            'message' => 'Sub Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }

    public function destroy(Category $category, Batik $batik) {
        $batik->delete();

        $notification = [
            'message' => 'Sub Category ' . $batik->sub_name . ' Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }
}
