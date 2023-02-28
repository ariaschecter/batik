<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\Category;
use App\Models\City;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(City $city) {
        $categories = Category::with('city')->where('city_id', $city->id)->get();
        return view('admin.category.index', compact('city', 'categories'));
    }

    public function create(City $city) {
        return view('admin.category.create', compact('city'));
    }

    public function store(Request $request, City $city) {
        $validated = $request->validate([
            'category_no' => 'required|integer',
            'category_name' => 'required',
        ]);

        $category_same = Category::where('city_id', $city->id)->where('category_no', $request->category_no)->first();

        if($category_same) {
            $request->validate([
                'category_no' => 'required|integer|unique:categories,category_no',
            ], [
                'category_no.unique' => 'The Category No has already been taken.'
            ]);
        }

        $validated['city_id'] = $city->id;
        $validated['category_slug'] = Str::slug($request->category_name);

        Category::create($validated);

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
            'category_name' => 'required',
        ]);

        if ($category->category_no == $request->category_no) {

        } else {
            $category_same = Category::where('city_id', $category->city_id)->where('category_no', $request->category_no)->first();

            if($category_same) {
                $request->validate([
                    'category_no' => 'required|integer|unique:categories,category_no',
                ], [
                    'category_no.unique' => 'The Category No has already been taken.'
                ]);
            }
        }

        $validated['category_slug'] = Str::slug($request->category_name);

        $category->update($validated);

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('category.index', $city->city_slug)->with($notification);
    }

    public function destroy(City $city, Category $category) {
        SubCategory::where('category_id', $category->id)->delete();
        $batiks = Batik::where('category_id', $category->id)->get();
        foreach ($batiks as $batik) {
            unlink($batik->batik_picture);
        }
        Batik::where('category_id', $category->id)->delete();
        $category->delete();

        $notification = [
            'message' => 'Category ' . $category->category_name . ' Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('category.index', $city->city_slug)->with($notification);
    }
}
