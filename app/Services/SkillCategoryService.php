<?php

namespace App\Services;

use App\Repositories\Contracts\SkillCategoryRepositoryInterface;

class SkillCategoryService
{
    protected $categoryRepo;

    public function __construct(SkillCategoryRepositoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function create(array $data)
    {
        $category = $this->categoryRepo->create($data);
        return $category;
    }


    public function FindById($encryptedId)
    {
        $id = decrypt($encryptedId);
        return $this->categoryRepo->FindById($id);
    }

    public function FindList()
    {
        return $this->categoryRepo->FindList();
    }

    public function findCategory()
    {
        return $this->categoryRepo->findCategory();
    }

    public function getCategoryAndSkill()
    {
        return $this->categoryRepo->getCategoryAndSkill();
    }


    public function Update($category, array $data)
    {
        $category = $this->categoryRepo->update($category, $data);
        return $category;
    }
}
