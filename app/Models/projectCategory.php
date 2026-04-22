<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class projectCategory extends Model
{
    protected $guarded = [];
    protected static function booted()
    {
        static::creating(function ($category) {
            $slug = Str::slug($category->name);
            $originalSlug = $slug;
            $count = 1;

            // Ensure uniqueness
            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }

            $category->slug = $slug;
        });
    }
}
