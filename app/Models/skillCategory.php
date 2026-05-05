<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class skillCategory extends Model
{
    protected $guarded = [];

     public function categorySkill(){
        return $this->hasMany(skill::class, 'category_id', 'id');
    }
}
