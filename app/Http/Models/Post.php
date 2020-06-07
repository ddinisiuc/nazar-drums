<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [''];

    public function scopeActive($query){
        return $query->where('status', 'published');
    }

    public function scopeBySlug($query, $slug){
        return $query->where('slug', $slug);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
