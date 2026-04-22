<?php

namespace App\Services;

use App\Repositories\Contracts\ProjectTechnologyRepositoryInterface;

class ProjectTechnologyService
{
    protected $projectTechRepo;
    protected $projectTech;

    public function __construct(ProjectTechnologyRepositoryInterface $projectTechRepo)
    {
        $this->projectTechRepo = $projectTechRepo;
    }

    public function create(array $data)
    {
        $this->projectTech = $this->projectTechRepo->create($data);
        return $this->projectTech;
    }


    public function FindById($encryptedId)
    {
        $id = decrypt($encryptedId);
        return $this->projectTechRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->projectTechRepo->FindList();
    }

    public function Update($projectTech, array $data){
        $this->projectTech = $this->projectTechRepo->update($projectTech, $data);
        return $this->projectTech;
    }



   
}
