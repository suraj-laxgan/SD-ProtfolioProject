<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\SkillRepositoryInterface;
use App\Models\skill;

class SkillRepository implements SkillRepositoryInterface
{
    protected $skill;
    public function __construct(Skill $skill)
    {
        $this->skill = $skill;
    }
    public function create(array $data)
    {
        return $this->skill->create($data);
    }

    public function findById(int $id)
    {
        $this->skill = $this->skill->where('id', $id)->first();
        if (!$this->skill) {
            return back()->withErrors(['email' => 'Skill not found.']);
        }
        return $this->skill;
    }

    public function FindList()
    {
        $skill = $this->skill->get();
        if (COUNT($skill) >= 1) {
           return $skill ;
        }else{
            return back()->withErrors(['message' => 'No data found.']);
        }
    }

    public function update(int $id, array $data)
    {
        $this->skill = $this->skill->findOrFail($id);
        $this->skill->update($data);
        return $this->skill;
    }
}
