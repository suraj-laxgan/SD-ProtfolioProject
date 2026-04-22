<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Models\contact;

class ContactRepository implements ContactRepositoryInterface
{
    protected $contact;
    public function __construct(contact $contact)
    {
        $this->contact = $contact;
    }
    public function create(array $data)
    {
        return $this->contact->create($data);
    }

    public function findById(int $id)
    {
        $this->contact = $this->contact->where('id', $id)->first();
        return $this->contact;
    }

    public function FindList()
    {
        $contact = $this->contact->orderBy('id','DESC')->paginate(10);
        return $contact ;
    }

    public function update(int $id, array $data)
    {
        $this->contact = $this->contact->findOrFail($id);
        $this->contact->update($data);
        return $this->contact;
    }
}
