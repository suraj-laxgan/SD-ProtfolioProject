<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projectTechnology extends Model
{
       protected $table = 'project_technologies';
       protected $guarded = [];

       public function projects()
       {
              return $this->belongsToMany(project::class, 'project_to_technologies', 'technology_id', 'project_id');
       }
}
