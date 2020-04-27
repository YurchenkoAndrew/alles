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
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/block', 'BlockController', ['as' => 'admin']);
    Route::resource('/slides', 'SlideController', ['as' => 'admin']);
    Route::resource('/why-are-we', 'WhyAreWeController', ['as' => 'admin']);
    Route::resource('/portfolio', 'PortfolioController', ['as' => 'admin']);
    Route::resource('/portfolio-title', 'PortfolioTitleController', ['as' => 'admin']);
    Route::resource('/portfolio-item', 'PortfolioItemController', ['as' => 'admin']);
    Route::resource('/who-we-are', 'WhoWeAreController', ['as' => 'admin']);
    Route::resource('/who-we-are-item', 'WhoWeAreItemController', ['as' => 'admin']);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
