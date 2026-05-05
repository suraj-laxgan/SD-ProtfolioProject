<?php

namespace App\Repositories\Contracts;

interface ExprenceRepositoryInterface
{
    public function create(array $data);
    public function FindList();
    public function findById(int $id);
     public function update(int $id, array $data);

}