<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [''];

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
