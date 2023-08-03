<?php
use sociallogin\sociallogin\Http\Controllers\Sociallogincontroller;

Route::get('sociallink',function(){
    return view('sociallogin::sociallink');
});
Route::group(['middleware' => 'web','namespace'=>'sociallogin\sociallogin\Http\Controllers'],function(){
    Route::get('auth/google', [Sociallogincontroller::class,"redirectToGoogle"]);
    Route::get('auth/google/callback',[Sociallogincontroller::class,'handleGoogleCallback']);
});
