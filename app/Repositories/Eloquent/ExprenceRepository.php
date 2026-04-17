<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ExprenceRepositoryInterface;
use App\Models\experience;

class ExprenceRepository implements ExprenceRepositoryInterface
{
    protected $experience;
    public function __construct(experience $experience)
    {
        $this->experience = $experience;
    }
    public function create(array $data)
    {
        return $this->experience->create($data);
    }

    public function findById(int $id)
    {
        $this->experience = $this->experience->where('id', $id)->first();
        return $this->experience;
    }

    public function FindList()
    {
        $skill = $this->experience->orderBy('id','DESC')->paginate(10);
        return $skill;
    }

    public function update(int $id, array $data)
    {
        $this->experience = $this->experience->findOrFail($id);
        $this->experience->update($data);
        return $this->experience;
    }
}
