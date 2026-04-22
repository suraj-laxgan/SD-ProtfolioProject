<?php

namespace App\Services;

use App\Repositories\Contracts\ContactRepositoryInterface;

class ContactService
{
    protected $contactRepo;
    protected $message;

    public function __construct(ContactRepositoryInterface $contactRepo)
    {
        $this->contactRepo = $contactRepo;
    }

    public function create(array $data)
    {
        $this->message = $this->contactRepo->create($data);
        return $this->message;
    }


    public function FindById($encryptedId)
    {
        $id = decrypt($encryptedId);
        return $this->contactRepo->FindById($id);
    }

     public function FindList()
    {
        return $this->contactRepo->FindList();
    }

    public function Update($message, array $data){
        $this->message = $this->contactRepo->update($message, $data);
        return $this->message;
    }



   
}
