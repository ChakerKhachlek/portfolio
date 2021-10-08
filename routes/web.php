<?php

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

Route::get('/',['App\Http\Controllers\HomeController','index'] );


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/manage-profile', function () {
        return view('ManagePortfolio.manage-profile');
    })->name('profile-management');

    Route::get('/manage-projects', function () {
        return view('ManagePortfolio.manage-projects');
    })->name('projects-management');

    Route::get('/manage-experiences', function () {
        return view('ManagePortfolio.manage-experiences');
    })->name('experiences-management');

    Route::get('/manage-services', function () {
        return view('ManagePortfolio.manage-services');
    })->name('services-management');

    Route::get('/manage-technologies', function () {
        return view('ManagePortfolio.manage-technologies');
    })->name('technologies-management');
});


require __DIR__.'/auth.php';
