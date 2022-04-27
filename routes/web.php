<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexBookedController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\IndexBusController;
use App\Http\Controllers\OperatorController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');

Route::get('/buses', [
    HomeController::class, 'index'
])->name('buses');

Route::get('/bookings', [
    HomeController::class, 'index'
])->name('bookings');


Route::get('/indexbookings', [
    IndexBookedController::class, 'index'
])->name('indexbookings');

Route::get('/editprofile', [
    EditProfileController::class, 'index'
])->name('editprofile');

Route::get('/indexbuses', [
    IndexBusController::class, 'index'
])->name('indexbuses');

Route::get('/operators.index', [
    OperatorController::class, 'index'
])->name('operators.index');


Route::post('/editprofile', [EditProfileController::class, 'update_avatar']);

Route::get('/add-operator', [OperatorController::class, 'create']);
Route::post('/add-operator', [OperatorController::class, 'store']);
Route::get('/edit-operator/{id}', [OperatorController::class, 'edit']);
Route::put('/update-operator/{id}', [OperatorController::class, 'update']);
Route::get('/delete-operator/{id}', [OperatorController::class, 'destroy']);






Route::resource('bookings', App\Http\Controllers\BookingsController::class);




Route::resource('buses', App\Http\Controllers\BusesController::class);
