<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ProjectImageRepositoryInterface;
use App\Models\projectImage;

class ProjectImageRepository implements ProjectImageRepositoryInterface
{
    protected $projectImage;
    public function __construct(projectImage $projectImage)
    {
        $this->projectImage = $projectImage;
    }
    public function create(array $data)
    {
        return $this->projectImage->create($data);
    }

    public function findById(int $id)
    {
        $this->projectImage = $this->projectImage->where('id', $id)->first();
        return $this->projectImage;
    }

    public function FindList()
    {
        $projectImage = $this->projectImage->orderBy('id','DESC')->paginate(10);
        return $projectImage ;
    }

    public function update(int $id, array $data)
    {
        $this->projectImage = $this->projectImage->findOrFail($id);
        $this->projectImage->update($data);
        return $this->projectImage;
    }
}
