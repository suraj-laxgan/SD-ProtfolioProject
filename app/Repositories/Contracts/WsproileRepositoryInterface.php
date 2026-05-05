<?php

namespace App\Repositories\Contracts;

interface WsproileRepositoryInterface
{
    public function create(array $data);
    public function FindList();
    public function findByEmail(string $email);
     public function update(int $id, array $data);

}