<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class project extends Model
{
        protected $guarded = [];
        protected static function booted()
        {
                static::creating(function ($category) {
                        $slug = Str::slug($category->title);
                        $originalSlug = $slug;
                        $count = 1;

                        // Ensure uniqueness
                        while (static::where('slug', $slug)->exists()) {
                                $slug = $originalSlug . '-' . $count++;
                        }

                        $category->slug = $slug;
                });
        }


        public function getCategory()
        {
                //  return $this->belongsTo(SkillCategory::class, 'foreign_key', 'owner_key');
                return $this->belongsTo(projectCategory::class, 'category_id', 'id')->select('id', 'name');
        }

        public function technologies()
        {
                return $this->belongsToMany(projectTechnology::class, 'project_to_technologies','project_id','technology_id');
        }
}
