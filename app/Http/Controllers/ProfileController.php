<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Requests\WsprofileCreateRequest;
use App\Services\WsproileService;

class ProfileController extends Controller
{

    protected $wsProfileService;

    public function __construct(WsproileService $wsProfileService)
    {
        $this->wsProfileService = $wsProfileService;
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }




    public function wsCreate(Request $request): View
    {
        return view('profile.admin.create', [
            'user' => $request->user(),
        ]);
    }

    public function wsStore(WsprofileCreateRequest $request): RedirectResponse
    {
        // dd($request->all());
        $this->wsProfileService->register($request->all());
        return Redirect::route('wsprofile.create')->with('success', 'profile-Created Successfully !');
    }

    public function wsList(Request $request): View
    {
        $profile = $this->wsProfileService->FindList();
        return view('profile.admin.list', ['list' => $profile,]);
    }
    /**
     * Display the user's profile form.
     */
    public function wsEdit(Request $request, $findMe): View
    {
        $profile = $this->wsProfileService->FindByEmail($findMe);
        return view('profile.admin.edit', [
            'profiles' =>  $profile,
        ]);
    }


    /**
     * Update the user's profile information.
     */
    public function wsUpdate(WsprofileCreateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $profile = $this->wsProfileService->profileUpdate($request->id, $data);
        return Redirect::route('wsprofile.edit', ['email' => $request->email])->with('success', 'Profile updated Successfully');
    }

    /**
     * Delete the user's account.
     */
    public function wsDestroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
