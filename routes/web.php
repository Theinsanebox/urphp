<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;




//login

Route::get('/', function () {
    if(session('email'))
    {
        return view('dashboard');
    } 
    else
    {
        return view('login');
    }
});


//register
Route::view('register','register');
Route::post('userRegistration',[userController::class,'registerUser']);
Route::get('logOutuser',[userController::class,'logoutuser']);
Route::post('userLogin',[userController::class,'checkUserLogin']);



 Route::group(["middleware"=>['protectedPage']],function()
{
    Route::view('dashboard','dashboard');
    Route::view('support','support');
    Route::view('news','news');
    Route::view('about','about');
    Route::view('user','user');
    Route::view('setting','setting');
    Route::view('contact','contact');    
    Route::get('user',[userController::class,'showtheData']);
    Route::post('updateData/{id}',[userController::class,'updateUserData']);
    Route::post('deleteData/{id}',[userController::class,'deleteUserData']);
    Route::post('checkStatus/{id}',[userController::class,'updateStatus']);
    Route::post('addNewuser',[userController::class,'insertUD']);
    Route::get('news',[userController::class,'newsAct']);
});

