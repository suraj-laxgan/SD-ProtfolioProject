<?php

namespace App\Repositories\Contracts;

interface SkillCategoryRepositoryInterface
{
    public function create(array $data);
    public function FindList();
    public function findCategory();
    public function findById(int $id);
    public function update(int $id, array $data);
     public function getCategoryAndSkill();

}