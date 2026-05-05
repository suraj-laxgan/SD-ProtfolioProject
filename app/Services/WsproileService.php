<?php

namespace App\Services;

use App\Repositories\Contracts\WsproileRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Jobs\WelcomeEmailJob;
class WsproileService
{
    protected $profileRepo;

    public function __construct(WsproileRepositoryInterface $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }

    public function register(array $data)
    {
        $profile = $this->profileRepo->create($data);
        return $profile;
    }


    public function FindByEmail(string $email)
    {
        return $this->profileRepo->FindByEmail($email);
    }

     public function FindList()
    {
        return $this->profileRepo->FindList();
    }

    public function profileUpdate($profile, array $data){
        $profile = $this->profileRepo->update($profile, $data);
        return $profile;
    }



   
}
