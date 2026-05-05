<?php

namespace App\Services;

use App\Repositories\Contracts\ExprenceRepositoryInterface;

class ExprenceService
{
    protected $experienceRepo;
    protected $experience;

    public function __construct(ExprenceRepositoryInterface $experienceRepo)
    {
        $this->experienceRepo = $experienceRepo;
    }

    public function create(array $data)
    {
        $this->experience = $this->experienceRepo->create($data);
        return $this->experience;
    }


    public function FindById($encryptedId)
    {
        $id = decrypt($encryptedId);
        return $this->experienceRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->experienceRepo->FindList();
    }

    public function Update($experience, array $data){
        $this->experience = $this->experienceRepo->update($experience, $data);
        return $this->experience;
    }



   
}
