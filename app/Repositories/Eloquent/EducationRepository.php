<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\EducationRepositoryInterface;
use App\Models\education;

class EducationRepository implements EducationRepositoryInterface
{
    protected $education;
    public function __construct(education $education)
    {
        $this->education = $education;
    }
    public function create(array $data)
    {
        return $this->education->create($data);
    }

    public function findById(int $id)
    {
        $this->education = $this->education->where('id', $id)->first();
        return $this->education;
    }

    public function FindList()
    {
        $education = $this->education->paginate(10);
        return $education ;
    }

    public function update(int $id, array $data)
    {
        $this->education = $this->education->findOrFail($id);
        $this->education->update($data);
        return $this->education;
    }
}
