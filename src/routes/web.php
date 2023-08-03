<?php
use kaushal\sociallogin\Http\Controllers\Sociallogincontroller;

Route::get('sociallink',function(){
    return view('sociallogin::sociallink');
});
Route::group(['namespace'=>'kaushal\sociallogin\Http\Controllers'],function(){
    Route::get('auth/google', [Sociallogincontroller::class,"redirectToGoogle"]);
    Route::get('auth/google/callback',[Sociallogincontroller::class,'handleGoogleCallback']);
});
