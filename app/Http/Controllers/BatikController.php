<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Image;

class BatikController extends Controller
{
    public function create(Category $category) {
        $categories = Category::with('sub_category')->orderBy('category_no', 'ASC')->get();
        return view('admin.batik.create', compact('categories', 'category'));
    }

    public function fetch_category(Request $request) {
        $data['categories'] = Category::where('city_id', $request->city_id)->orderBy('category_name', 'ASC')
                                ->get(['category_name', 'id']);

        return response()->json($data);
    }

    public function fetch_sub_category(Request $request) {
        $data['sub_categories'] = SubCategory::where('category_id', $request->category_id)->orderBy('sub_name', 'ASC')
                                ->get(['sub_name', 'id']);

        return response()->json($data);
    }

    public function store(Request $request, Category $category) {
        $request->validate([
            'category_id' => 'required|integer',
            'batik_name' => 'required',
            'batik_picture' => 'required|file|image',
            'batik_description' => 'required',
        ]);

        $image = $request->file('batik_picture');
        $upload = 'image/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(770, 450)->save($upload);

        $validated = $request->except(['_token', 'batik_picture']);
        $validated['batik_picture'] = $upload;
        $validated['batik_slug'] = Str::slug($request->batik_name);

        Batik::create($validated);

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
        $request->validate([
            'category_id' => 'required',
            'batik_name' => ['required'],
            'batik_picture' => 'file|image',
            'batik_description' => 'required',
        ]);

        $batik_picture = '';
        $validated = $request->except(['_token', 'batik_picture']);

        if ($request->batik_picture) {
            if(file_exists(public_path($batik->batik_picture))) unlink($batik->batik_picture);
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
        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }

    public function destroy(Category $category, Batik $batik) {
        if(file_exists(public_path($batik->batik_picture))) unlink($batik->batik_picture);
        $batik->delete();

        $notification = [
            'message' => 'Batik ' . $batik->batik_name . ' Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('sub.category.index', $category->category_slug)->with($notification);
    }
}
