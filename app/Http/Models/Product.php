<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [''];
    protected $attribute = [
        'is_popular' => 0,
        'old_price' => 0,
    ];

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    public function scopePopular($query){
        return $query->where('is_popular', 1);
    }

    public function scopeBySlug($query, $slug){
        return $query->where('slug', $slug);
    }

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

}
