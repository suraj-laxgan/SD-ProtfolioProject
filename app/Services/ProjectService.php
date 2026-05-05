<?php

namespace App\Services;

use App\Repositories\Contracts\ProjectRepositoryInterface;

class ProjectService
{
    protected $projectRepo;
    protected $project;

    public function __construct(ProjectRepositoryInterface $projectRepo)
    {
        $this->projectRepo = $projectRepo;
    }

    public function create(array $data)
    {
        $this->project = $this->projectRepo->create($data);
        return $this->project;
    }


    public function FindById($encryptedId)
    {
        $id = decrypt($encryptedId);
        return $this->projectRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->projectRepo->FindList();
    }

    public function Update($project, array $data){
        $this->project = $this->projectRepo->update($project, $data);
        return $this->project;
    }



   
}
