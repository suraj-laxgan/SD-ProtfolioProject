<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ProjectRepositoryInterface;
use App\Models\project;

class ProjectRepository implements ProjectRepositoryInterface
{
    protected $project;
    public function __construct(project $project)
    {
        $this->project = $project;
    }
    public function create(array $data)
    {
        return $this->project->create($data);
    }

    public function findById(int $id)
    {
        $this->project = $this->project->where('id', $id)->first();
        return $this->project;
    }

    public function FindList()
    {
        $project = $this->project->orderBy('id','DESC')->paginate(10);
        return $project ;
    }

    public function update(int $id, array $data)
    {
        $this->project = $this->project->findOrFail($id);
        $this->project->update($data);
        return $this->project;
    }
}
