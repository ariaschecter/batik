<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Category;
use App\Models\Batik;
use App\Models\SubCategory;

class HomeController extends Controller
{
    public function index() {
        $city = City::orderBy('city_viewed', 'DESC')->first();
        $categories = Category::with('batik')->where('city_id', $city->id)->orderBy('category_no', 'ASC')->get();
        $last_posts = Batik::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('frontend.index', compact('categories', 'last_posts', 'city'));
    }

    public function city_index() {
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('frontend.city.index', compact('cities'));
    }

    public function city_show_timeline(City $city) {
        $categories = Category::with('batik')->where('city_id', $city->id)->orderBy('category_no', 'ASC')->get();
        return view('frontend.city.details_timeline', compact('categories', 'city'));
    }

    public function city_show(City $city) {
        $city = City::with('category')->findOrFail($city->id);
        return view('frontend.city.details_grid', compact('city'));
    }

    public function subcategory_index(SubCategory $subcategory) {
        $subcategory = SubCategory::with('batik')->findOrFail($subcategory->id);
        return view('frontend.subcategory.index', compact('subcategory'));
    }

    public function city_category_index(City $city, Category $category) {
        $city = City::with('category')->findOrFail($city->id);
        return view('frontend.city.details_grid', compact('city'));
    }
}
