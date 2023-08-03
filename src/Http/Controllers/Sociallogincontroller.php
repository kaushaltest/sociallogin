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
}
