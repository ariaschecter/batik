<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;

class Batik extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function sub_category() {
        return $this->belongsTo(SubCategory::class, 'sub_id', 'id');
    }

    public static function uploadImage($image) {
        $width = Image::make($image)->width();
        $height = Image::make($image)->height();
        $upload = 'image/batik/' . time() . uniqid() . '.' . $image->getClientOriginalExtension();

        if ($width > $height) {
            Image::make($image)->resize(null, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($upload);
        } else {
            Image::make($image)->resize(450, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($upload);
        }

        return $upload;
    }
}
