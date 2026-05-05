<?php

namespace App\Services;

use App\Repositories\Contracts\ProjectImageRepositoryInterface;

class ProjectImageService
{
    protected $projectImageRepo;
    protected $projectImage;

    public function __construct(ProjectImageRepositoryInterface $projectImageRepo)
    {
        $this->projectImageRepo = $projectImageRepo;
    }

    public function create(array $data)
    {
        $this->projectImage = $this->projectImageRepo->create($data);
        return $this->projectImage;
    }


    public function FindById($encryptedId)
    {
        $id = decrypt($encryptedId);
        return $this->projectImageRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->projectImageRepo->FindList();
    }

    public function Update($projectImage, array $data){
        $this->projectImage = $this->projectImageRepo->update($projectImage, $data);
        return $this->projectImage;
    }



   
}
