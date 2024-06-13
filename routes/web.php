<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('countries', 'CountryController');
Route::resource('regions', 'RegionController');
Route::resource('cities', 'CityController');
Route::resource('districts', 'DistrictController');


// Admin dashboard routes
Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');


