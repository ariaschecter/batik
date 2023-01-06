<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(City $city) {
        $categories = $city->category;
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
        // dd($validated);

        Category::insert($validated);

        $notification = [
            'message' => 'Category ' . $city->city_name .' Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('category.index', $city->city_slug)->with($notification);
    }
}
