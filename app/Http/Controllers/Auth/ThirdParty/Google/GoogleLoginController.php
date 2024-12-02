<?php

namespace App\Http\Controllers\Auth\ThirdParty\Google;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $username = strtolower(str_replace(' ', '', $user->name));
            $randomNumber = rand(100, 999);
            $username .= $randomNumber;

            $newUser = new User();
            $newUser->username = $username;
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->password = Hash::make(request(Str::random()));
            $newUser->email_verified_at = now();
            $newUser->save();

            $newUser->assignRole('customer');

            event(new Registered($user));

            Auth::login($user);
        }

        return redirect()->intended('/profile');
    }
}