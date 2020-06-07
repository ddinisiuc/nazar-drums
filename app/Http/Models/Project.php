<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [''];

    public function benefits(){
        return $this->hasMany(Benefit::class);
    }

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    public function scopeBySlug($query, $slug){
        return $query->where('slug', $slug);
    }
}
