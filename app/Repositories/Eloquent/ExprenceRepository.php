<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ExprenceRepositoryInterface;
use App\Models\experience;

class ExprenceRepository implements ExprenceRepositoryInterface
{
    protected $exprence;
    public function __construct(experience $experience)
    {
        $this->exprence = $experience;
    }
    public function create(array $data)
    {
        return $this->exprence->create($data);
    }

    public function findById(int $id)
    {
        $this->exprence = $this->exprence->where('id', $id)->first();
        if (!$this->exprence) {
            return back()->withErrors(['email' => 'Skill not found.']);
        }
        return $this->exprence;
    }

    public function FindList()
    {
        $skill = $this->exprence->get();
        if (COUNT($skill) >= 1) {
            return $skill;
        } else {
            return back()->withErrors(['message' => 'No data found.']);
        }
    }

    public function update(int $id, array $data)
    {
        $this->exprence = $this->exprence->findOrFail($id);
        $this->exprence->update($data);
        return $this->exprence;
    }
}
