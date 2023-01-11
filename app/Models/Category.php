<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function sub_category() {
        return $this->hasMany(SubCategory::class, 'category_id', 'id')->orderBy('sub_name', 'ASC');
    }

    public function batik() {
        return $this->hasMany(Batik::class, 'category_id', 'id')->orderBy('created_at', 'DESC');
    }

    public function batik_most() {
        return $this->hasMany(Batik::class, 'category_id', 'id')->orderBy('viewed', 'DESC')->limit(1);
    }
}
