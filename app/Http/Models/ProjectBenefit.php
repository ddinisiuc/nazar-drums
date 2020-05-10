<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectBenefit extends Model
{
    protected $guarded = [''];

    public function scopeActive($query){
        return $query->where('status', 1);
    }
}
