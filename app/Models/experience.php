<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $guarded = [];
    // public function getStartDateAttribute()
    // {
    //     return $this->attributes['start_date'] ? $this->start_date->format('F-Y') : null;
    // }
    protected $casts = [
        'start_date' => 'date', // This automatically turns the string into a Carbon object
        'end_date' => 'date',
    ];
}
