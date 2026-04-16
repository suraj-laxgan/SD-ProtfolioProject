<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\SkillCategoryRepositoryInterface;
use App\Models\skillCategory;

class SkillCategoryRepository implements SkillCategoryRepositoryInterface
{
    protected $skillCategory;
    public function __construct(skillCategory $skillCategory)
    {
        $this->skillCategory = $skillCategory;
    }
    public function create(array $data)
    {
        return $this->skillCategory->create($data);
    }

    public function findById(int $id)
    {
        $this->skillCategory = $this->skillCategory->where('id', $id)->first();
        if (!$this->skillCategory) {
            return back()->withErrors(['email' => 'Skill not found.']);
        }
        return $this->skillCategory;
    }

    public function FindList()
    {
        // $skillCategory = $this->skillCategory->get();
        $skillCategory = $this->skillCategory->paginate(10);
        return $skillCategory ;
    }

    public function update(int $id, array $data)
    {
        $this->skillCategory = $this->skillCategory->findOrFail($id);
        $this->skillCategory->update($data);
        return $this->skillCategory;
    }
}
