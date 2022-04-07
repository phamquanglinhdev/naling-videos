<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FaceBookController extends Controller
{
    /**
     * Login Using Facebook
     */
    public function loginUsingFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFromFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $saveUser = User::updateOrCreate([
                'facebook_id' => $user->getId(),
            ],[
                'name' => $user->getName(),
                'email' => $user->getEmail() ?? $user->getId()."@facebook.com",
                'password' => Hash::make($user->getName().'@'.$user->getId()),
                'role'=>'1',
                'avatar'=>$user->getAvatar(),
            ]);

            Auth::loginUsingId($saveUser->id);
            backpack_auth()->loginUsingId($saveUser->id);

            return redirect()->route('index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
