<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->hasMany(Category::class, 'city_id', 'id')->orderBy('category_no', 'ASC');
    }
}
