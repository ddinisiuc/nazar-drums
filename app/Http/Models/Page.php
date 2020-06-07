<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [''];

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    public function scopeBySlug($query, $slug){
        return $query->where('slug', $slug);
    }
}
