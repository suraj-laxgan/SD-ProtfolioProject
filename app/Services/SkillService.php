<?php

namespace App\Services;

use App\Repositories\Contracts\SkillRepositoryInterface;

class SkillService
{
    protected $skillRepo;

    public function __construct(SkillRepositoryInterface $skillRepo)
    {
        $this->skillRepo = $skillRepo;
    }

    public function create(array $data)
    {
        $skill = $this->skillRepo->create($data);
        return $skill;
    }


    public function FindById(int $id)
    {
        return $this->skillRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->skillRepo->FindList();
    }

    public function Update($skill, array $data){
        $skill = $this->skillRepo->update($skill, $data);
        return $skill;
    }



   
}
