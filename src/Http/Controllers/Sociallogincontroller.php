<?php

namespace sociallogin\sociallogin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
class Sociallogincontroller extends Controller
{
    public function redirectToGoogle()
    {
        // echo config('secretkey.key');
        return Socialite::driver('google')->redirect();
    }
      public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        print_r($user);
        
        // Your login logic here, you can check if the user exists in the database and log them in.
        // Example:
        // $user->getId(); // Google ID
        // $user->getName(); // User full name
        // $user->getEmail(); // User email address
    }
}
