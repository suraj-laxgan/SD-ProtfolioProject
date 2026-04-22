<?php

namespace App\Repositories\Contracts;

interface ProjectCategoryRepositoryInterface
{
    public function create(array $data);
    public function FindList();
    public function findById(int $id);
     public function update(int $id, array $data);

}