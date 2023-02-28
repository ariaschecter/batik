<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Image;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::orderBy('brand_name', 'ASC')->get();
        return view('admin.brand.index', compact('brands'));
    }

    public function create() {
        return view('admin.brand.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'brand_name' => 'required|unique:brands,brand_name',
            'brand_picture' => 'required|file|image|max:5120'
        ]);

        $image = $request->file('brand_picture');
        $upload = 'image/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save($upload);

        $validated['brand_picture'] = $upload;

        Brand::create($validated);

        $notification = [
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.brand.index')->with($notification);
    }

    public function edit(Brand $brand) {
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand) {
        $validated = $request->validate([
            'brand_name' => 'required|unique:brands,brand_name,'.$brand->id,
            'brand_picture' => 'file|image|max:5120'
        ]);

        if ($request->brand_picture) {
            unlink($brand->brand_picture);
            $image = $request->file('brand_picture');
            $upload = 'image/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save($upload);
            $brand_picture = $upload;
        } else {
            $brand_picture = $brand->brand_picture;
        }

        $update = $request->except(['_token', 'brand_picture']);
        $update['brand_picture'] = $brand_picture;

        $brand->update($update);

        $notification = [
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('home.brand.index')->with($notification);
    }

    public function destroy(Brand $brand) {
        unlink($brand->brand_picture);
        $brand->delete();

        $notification = [
            'message' => $brand->brand_name . ' Brand Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
