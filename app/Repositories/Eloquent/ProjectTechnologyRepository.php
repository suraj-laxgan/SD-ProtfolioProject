<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ProjectTechnologyRepositoryInterface;
use App\Models\projectTechnology;

class ProjectTechnologyRepository implements ProjectTechnologyRepositoryInterface
{
    protected $projectTechnology;
    public function __construct(projectTechnology $projectTechnology)
    {
        $this->projectTechnology = $projectTechnology;
    }
    public function create(array $data)
    {
        return $this->projectTechnology->create($data);
    }

    public function findById(int $id)
    {
        $this->projectTechnology = $this->projectTechnology->where('id', $id)->first();
        return $this->projectTechnology;
    }

    public function FindList()
    {
        $projectTechnology = $this->projectTechnology->orderBy('id','DESC')->paginate(10);
        return $projectTechnology ;
    }

    public function update(int $id, array $data)
    {
        $this->projectTechnology = $this->projectTechnology->findOrFail($id);
        $this->projectTechnology->update($data);
        return $this->projectTechnology;
    }
}
