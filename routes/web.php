<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SocialLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//All SocialLogin System Start
//..............................
Route::get('/gotoGoogle',[SocialLogin::class,'gotoGoogle'])->name('gotoGoogle');
Route::get('/google/login',[SocialLogin::class,'googlestore'])->name('googlestore');
Route::post('/updatepass/{id}',[SocialLogin::class,'updatepass'])->name('updatepass');

//..............................
//All SocialLogin System End


Route::get('/', function () {
    return view('backend.dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['prefix'=>'slider'],function(){
    Route::get('/add',[SliderController::class,'add'])->name('slideradd');
    Route::Post('/store',[SliderController::class,'store'])->name('store');
    Route::get('/manage',[SliderController::class,'manage'])->name('manage');
    Route::get('/delete/{id}',[SliderController::class,'delete'])->name('delete');
    Route::get('/deleteImg/{id}',[SliderController::class,'deleteImg'])->name('deleteImg');
    Route::get('/galery',[SliderController::class,'galery'])->name('galery');
    Route::Post('/imageStore',[SliderController::class,'imageStore'])->name('imageStore');
    Route::get('/view/{id}',[SliderController::class,'view'])->name('view');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('edit');
    Route::post('/editimage/{id}',[SliderController::class,'editimage'])->name('editimage');
});



require __DIR__.'/auth.php';



