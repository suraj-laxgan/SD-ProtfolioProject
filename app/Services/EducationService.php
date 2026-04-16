<?php

namespace App\Services;

use App\Repositories\Contracts\EducationRepositoryInterface;

class EducationService
{
    protected $educationRepo;

    public function __construct(EducationRepositoryInterface $educationRepo)
    {
        $this->educationRepo = $educationRepo;
    }

    public function create(array $data)
    {
        $skill = $this->educationRepo->create($data);
        return $skill;
    }


    public function FindById(int $id)
    {
        return $this->educationRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->educationRepo->FindList();
    }

    public function Update($skill, array $data){
        $skill = $this->educationRepo->update($skill, $data);
        return $skill;
    }



   
}
