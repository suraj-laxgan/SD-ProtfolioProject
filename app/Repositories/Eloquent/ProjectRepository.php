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
                // $projectData = Arr::except($data, ['technology_id']);
                // $project = $this->project->create($projectData);

                // Extract technology IDs safely
                $technologyIds = $data['technology_id'] ?? [];
                unset($data['technology_id']);

                // Create project
                $project = $this->project->create($data);
                // Sync technologies (only if valid array)
                if (!empty($technologyIds) && is_array($technologyIds)) {
                    $project->technologies()->sync($technologyIds);
                }

                // if (!empty($technologyIds) && is_array($technologyIds)) {
                //     $insertData = [];
                //     foreach ($technologyIds as $techId) {
                //         $insertData[] = [
                //             'project_id' => $project->id,
                //             'technology_id' => $techId,
                //         ];
                //     }
                //     DB::table('project_to_technologies')->insert($insertData);
                // }

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
        $this->project = $this->project->with(['getCategory', 'technologies'])->where('id', $id)->first();
        return $this->project;
    }

    public function FindList()
    {
        $project = $this->project->with(['getCategory', 'technologies'])->orderBy('id', 'DESC')->paginate(10);
        return $project;
    }

    public function update(int $id, array $data)
    {
        try {
            return DB::transaction(function () use ($id, $data) {

                $project = $this->project->findOrFail($id);

                // Extract technologies
                $technologyIds = $data['technology_id'] ?? [];
                unset($data['technology_id']);

                // Update project
                $project->update($data);

                // Sync technologies (add/remove automatically)
                if (is_array($technologyIds)) {
                    $project->technologies()->sync($technologyIds);
                }

                return $project;
            });
        } catch (\Throwable $e) {
            logger()->error('Project Update Failed: ' . $e->getMessage());
            throw $e;
        }
    }
}
