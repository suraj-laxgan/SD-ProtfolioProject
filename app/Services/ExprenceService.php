<?php

namespace App\Services;

use App\Repositories\Contracts\ExprenceRepositoryInterface;

class ExprenceService
{
    protected $exprenceRepo;
    protected $exprence;

    public function __construct(ExprenceRepositoryInterface $exprenceRepo)
    {
        $this->exprenceRepo = $exprenceRepo;
    }

    public function create(array $data)
    {
        $this->exprence = $this->exprenceRepo->create($data);
        return $this->exprence;
    }


    public function FindById(int $id)
    {
        return $this->exprenceRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->exprenceRepo->FindList();
    }

    public function Update($exprence, array $data){
        $this->exprence = $this->exprenceRepo->update($exprence, $data);
        return $this->exprence;
    }



   
}
