<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected $guarded = [];

    public function skillCategory(){
        //  return $this->belongsTo(SkillCategory::class, 'foreign_key', 'owner_key');

        // One skill belongs to one category   
        return $this->belongsTo(SkillCategory::class, 'category_id', 'id')->select('id','name');

        // One category is assigned to one skill
        // return $this->hasOne(Skill::class);
    }
}
