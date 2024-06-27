<?php

use App\Http\Controllers\ChalihtController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Chaliht;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('login',[HomeController::class,'login_admin'])->name('login');
Route::post('login',[HomeController::class,'post_login_admin'])->name('post_login_admin');
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/',[HomeController::class,'dashbaord'])->name('dashboard');
    Route::resource('chalites',ChalihtController::class);
    Route::get('setting',[HomeController::class,'get_setting'])->name('get_setting');
    Route::get('social',[HomeController::class,'social'])->name('social');
    Route::post('get_setting_post',[HomeController::class,'get_setting_post'])->name('get_setting_post');
    Route::resource('contacts', ContactController::class);
    
    Route::get('logout',[HomeController::class,'logout'])->name('logout');
    Route::get('profile',[HomeController::class,'profile'])->name('profile');
    Route::post('update_profile',[HomeController::class,'update_profile'])->name('update_profile');
});

Route::get('/',[HomeController::class,'welcom'])->name('home');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact_post',[HomeController::class,'contact_post'])->name('contact_post');
Route::get('/about',[HomeController::class,'about'])->name('about');


Route::post('show_model', [HomeController::class,'show_model'])->name('showShaliteModal');
