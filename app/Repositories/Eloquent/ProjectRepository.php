<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ProjectRepositoryInterface;
use App\Models\project;
use App\Models\ProjectToTechnology;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ProjectRepository implements ProjectRepositoryInterface
{
    protected $project;
    public function __construct(project $project)
    {
        $this->project = $project;
    }
    public function create(array $data)
    {
        try {
            return DB::transaction(function () use ($data) {
                $projectData = Arr::except($data, ['technology_id']);
                $project = $this->project->create($projectData);

                if (!empty($data['technology_id'])) {
                    $project->technologies()->sync($data['technology_id']);
                }

                return $project;
            });
        } catch (\Exception $e) {
            // Log the error or dump it to see what's wrong
            logger()->error('Project Creation Failed: ' . $e->getMessage());
            throw $e; // Re-throw to keep the transaction behavior
        }
    }

    public function findById(int $id)
    {
        $this->project = $this->project->where('id', $id)->first();
        return $this->project;
    }

    public function FindList()
    {
        $project = $this->project->orderBy('id', 'DESC')->paginate(10);
        return $project;
    }

    public function update(int $id, array $data)
    {
        $this->project = $this->project->findOrFail($id);
        $this->project->update($data);
        return $this->project;
    }
}
