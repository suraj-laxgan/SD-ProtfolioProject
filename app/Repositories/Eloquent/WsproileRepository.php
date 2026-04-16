<?php

namespace App\Repositories\Eloquent;

use App\Models\Event;
use App\Repositories\Contracts\WsproileRepositoryInterface;
use App\Models\profile;

class WsproileRepository implements WsproileRepositoryInterface
{
    public function create(array $data)
    {
        return profile::create($data);
    }

    public function findByEmail(string $email)
    {
        $profile = profile::where('email', $email)->first();
        if (!$profile) {
            return back()->withErrors(['email' => 'Profile not found.']);
        }
        return $profile;
    }

    public function FindList()
    {
        $profile = profile::select(['name', 'email', 'phone', 'title'])->get();
        if (COUNT($profile) >= 1) {
           return $profile ;
        }else{
            return back()->withErrors(['message' => 'No data found.']);
        }
    }

    public function update(int $id, array $data)
    {
        $profile = Profile::findOrFail($id);
        $profile->update($data);
        // Profile::where('id', $id)->update($data);
        return $profile;
    }
}
