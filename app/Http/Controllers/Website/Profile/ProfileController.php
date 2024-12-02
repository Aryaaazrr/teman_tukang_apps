<?php

namespace App\Http\Controllers\Website\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\UserDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        $detail = UserDetail::where('user_id', $request->user()->id)->first();
        return view('website.base.profile.index', [
            'user' => $request->user(),
            'detail' => $detail
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function editPhoto(Request $request): View
    {
        $detail = UserDetail::where('user_id', $request->user()->id)->first();
        return view('website.base.profile.edit.edit-photo', [
            'user' => $request->user(),
            'detail' => $detail
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function editData(Request $request): View
    {
        $detail = UserDetail::where('user_id', $request->user()->id)->first();
        return view('website.base.profile.edit.edit-account', [
            'user' => $request->user(),
            'detail' => $detail
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function editAddress(Request $request): View
    {
        $detail = UserDetail::where('user_id', $request->user()->id)->first();
        return view('website.base.profile.edit.edit-address', [
            'user' => $request->user(),
            'detail' => $detail
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
}