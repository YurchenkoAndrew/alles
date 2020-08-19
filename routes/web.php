<?php

use Illuminate\Support\Facades\Auth;
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
    Route::resource('/settings', 'SettingsController', ['as' => 'admin']);
    Route::resource('/block', 'BlockController', ['as' => 'admin']);
    Route::resource('/slides', 'SlideController', ['as' => 'admin']);
    Route::resource('/why-are-we', 'WhyAreWeController', ['as' => 'admin']);
    Route::resource('/portfolio', 'PortfolioController', ['as' => 'admin']);
    Route::resource('/portfolio-title', 'PortfolioTitleController', ['as' => 'admin']);
    Route::resource('/portfolio-item', 'PortfolioItemController', ['as' => 'admin']);
    Route::resource('/who-we-are', 'WhoWeAreController', ['as' => 'admin']);
    Route::resource('/who-we-are-item', 'WhoWeAreItemController', ['as' => 'admin']);
    Route::resource('/about', 'AboutController', ['as' => 'admin']);
    Route::resource('/comment', 'CommentController', ['as' => 'admin']);
    Route::resource('/comment-item', 'CommentItemController', ['as' => 'admin']);
    Route::resource('/client', 'ClientController', ['as' => 'admin']);
    Route::resource('/client-item', 'ClientItemController', ['as' => 'admin']);
    Route::resource('/contact', 'ContactController', ['as' => 'admin']);
});

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes([
//    'register' => false,
]);

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'IndexController@index')->name('index');
Route::post('send-mail', 'MailSendController@sendMessage')->name('send-mail');
Route::get('/send-ok', function (){return view('send-ok');})->name('send-ok');
