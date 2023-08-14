<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Category;
use App\Models\Batik;
use App\Models\Brand;
use App\Models\SubCategory;
use App\Models\Team;

class HomeController extends Controller
{
    public function index() {
        $city = City::orderBy('city_viewed', 'DESC')->firstOrFail();
        $categories = Category::with('batik')->where('city_id', $city->id)->orderBy('category_no', 'ASC')->get();
        $brands = Brand::all();
        $teams = Team::all();
        $title = 'Beranda';
        return view('frontend.index', compact('categories', 'city', 'title', 'brands', 'teams'));
    }

    public function city_index() {
        $cities = City::orderBy('city_name', 'ASC')->get();
        $title = 'Semua Kota';
        return view('frontend.city.index', compact('cities', 'title'));
    }

    public function city_show_timeline(City $city) {
        $title = 'Kota';
        $categories = Category::with('batik')->where('city_id', $city->id)->orderBy('category_no', 'ASC')->get();
        return view('frontend.city.details_timeline', compact('categories', 'city', 'title'));
    }

    public function category_index(Category $category) {
        $title = 'Kategori';
        $category = Category::with('batik', 'sub_category')->findOrFail($category->id);
        $categories = $category->city->category;
        return view('frontend.category.index', compact('category', 'title', 'categories'));
    }

    public function subcategory_index(SubCategory $subcategory) {
        $title = $subcategory->sub_name;
        $subcategory = SubCategory::with('batik')->findOrFail($subcategory->id);
        return view('frontend.subcategory.index', compact('subcategory', 'title'));
    }

    public function city_category_index(City $city, Category $category) {
        $city = City::with('category')->findOrFail($city->id);
        $title = 'Kota';
        return view('frontend.city.details_grid', compact('city', 'title'));
    }

    public Function batik_index(Request $request) {
        if ($request->search) {
            $title = 'Pencarian Batik';
            $batiks = Batik::with('category.city')->where('batik_name', 'LIKE', '%' . $request->search . '%')->orderBy('created_at', 'DESC')->get();
        } else {
            $title = 'Semua Batik';
            $batiks = Batik::with('category.city')->orderBy('created_at', 'DESC')->get();
        }
        $cities = City::orderBy('city_name', 'ASC')->get();
        return view('frontend.batik.index', compact('batiks', 'cities', 'title'));
    }

    public Function batik_show(Batik $batik) {
        $title = 'Detail Batik';
        $batik->increment('viewed');
        $batik->category->city->increment('city_viewed');
        $batiks = Batik::latest()->limit(5)->get();
        $categories = $batik->category->city->category;
        return view('frontend.batik.detail', compact('batik', 'batiks', 'title', 'categories'));
    }
}
