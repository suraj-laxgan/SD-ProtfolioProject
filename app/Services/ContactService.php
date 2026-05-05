<?php

namespace App\Services;

use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Support\Facades\Notification;
use App\Mail\ThankYouMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Events\ThankYouMailEvent;

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
        return DB::transaction(function () use ($data) {
            $this->message = $this->contactRepo->create($data);
            // Mail::to($this->message->email)->send(new ThankYouMail($this->message));
            // Mail::to($this->message->email)->queue(new ThankYouMail($this->message));
            ThankYouMailEvent::dispatch($this->message);
            return $this->message;
        });
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

    public function Update($message, array $data)
    {
        $this->message = $this->contactRepo->update($message, $data);
        return $this->message;
    }
}
