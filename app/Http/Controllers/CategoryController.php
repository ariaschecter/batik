<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(City $city) {
        $categories = Category::where('city_id', $city->id)->orderBy('category_no', 'ASC')->get();
        return view('admin.category.index', compact('city', 'categories'));
    }
}
