<?php

use App\Http\Livewire\Aboutcomponent;
use App\Http\Livewire\Contactus;
use App\Http\Livewire\Homecomponent;
use App\Http\Livewire\Shopcomponent;
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


Route::get('/',Homecomponent::class)->name("home.index");
Route::get('/shop',Shopcomponent::class)->name("shop.index");
Route::get('/about',Aboutcomponent::class)->name("about.index");
Route::get('/contact',Contactus::class)->name("contact.index");