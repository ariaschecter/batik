<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class SettingController extends Controller
{
    public function index() {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function store(Request $request, Setting $setting) {
        $request->validate([
            'setting_title' => 'required',
            'setting_address' => 'required',
            'setting_description_footer' => 'required',
            'setting_no_phone' => 'required',
            'setting_email' => 'required',
            'setting_banner' => 'file|image|max:5120',
        ]);

        if ($request->setting_banner) {
            Storage::delete($setting->setting_banner);
            $image = $request->file('setting_banner');
            $setting_banner = 'upload/setting/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1042)->save('storage/' . $setting_banner);
        } else {
            $setting_banner = $setting->setting_banner;
        }
        $validated = $request->except(['_token', 'setting_banner']);
        $validated['setting_banner'] = $setting_banner;

        $setting->update($validated);

        $notification = [
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
