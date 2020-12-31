<?php

namespace TeamBravo\Profile\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/test',function(){

   return  \FriendInfo_List::FriendInfo()."code!";
   

    return view('Profile::welcome');

});



Route::group(['namespace'=> 'TeamBravo\Profile\Http\Controllers'],function(){
    // both of them are correct !! 

    Route::get('/test-2','ProfileController@index'); 

    Route::get('/user',[ProfileController::class,'index']);

});

Route::get('/user',[ProfileController::class,'index']);