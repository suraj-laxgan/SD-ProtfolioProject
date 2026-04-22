<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ProjectCategoryRepositoryInterface;
use App\Models\projectCategory;

class ProjectCategoryRepository implements ProjectCategoryRepositoryInterface
{
    protected $projectCategory;
    public function __construct(projectCategory $projectCategory)
    {
        $this->projectCategory = $projectCategory;
    }
    public function create(array $data)
    {
        return $this->projectCategory->create($data);
    }

    public function findById(int $id)
    {
        $this->projectCategory = $this->projectCategory->where('id', $id)->first();
        return $this->projectCategory;
    }

    public function FindList()
    {
        $projectCategory = $this->projectCategory->orderBy('id','DESC')->paginate(10);
        return $projectCategory ;
    }

    public function update(int $id, array $data)
    {
        $this->projectCategory = $this->projectCategory->findOrFail($id);
        $this->projectCategory->update($data);
        return $this->projectCategory;
    }
}
