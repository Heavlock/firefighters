<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', 'DefaultController@home')->name('home');
Route::get('/form', 'DefaultController@form')->name('formPage');
Route::post('/form', 'DefaultController@sendForm')->name('formPageAction');

Route::namespace('\App\Http\Livewire')->group(function () {
    Route::get('/product/{product}', 'Product@__invoke')->name('product');
    Route::get('/catalog', 'Catalog@__invoke')->name('catalog');
    Route::get('/user-account', 'UserAccount@__invoke')->name('account');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
require __DIR__ . '/auth.php';
