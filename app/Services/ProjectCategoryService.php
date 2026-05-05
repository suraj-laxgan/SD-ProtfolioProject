<?php

namespace App\Services;

use App\Repositories\Contracts\ProjectCategoryRepositoryInterface;

class ProjectCategoryService
{
    protected $projectCategoryRepo;
    protected $projectCategory;

    public function __construct(ProjectCategoryRepositoryInterface $projectCategoryRepo)
    {
        $this->projectCategoryRepo = $projectCategoryRepo;
    }

    public function create(array $data)
    {
        $this->projectCategory = $this->projectCategoryRepo->create($data);
        return $this->projectCategory;
    }


    public function FindById($encryptedId)
    {
        $id = decrypt($encryptedId);
        return $this->projectCategoryRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->projectCategoryRepo->FindList();
    }

    public function Update($projectCategory, array $data){
        $this->projectCategory = $this->projectCategoryRepo->update($projectCategory, $data);
        return $this->projectCategory;
    }



   
}
