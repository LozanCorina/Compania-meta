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

Route::get('/', function () {

    $data=App\Models\Partner::all()->take(3);
    return view('welcome',compact('data'));
})->name('acasa');

Route::get('/{pages}', 'PagesController@Pages')->name('pages')
->where('pages','contacte|despre|parteneri');

//admin
Auth::routes();
Route::resource('crud', CRUDController::class);
Route::get('/dashboard',function () {
    return view('pages.admin.admin');
})->name('admin');

Route::get('partners/{partner}','PagesController@index')->name('partner_detail');
Route::get('/admin-messages','PagesController@displayMessages')->name('message.index');
Route::post('/mesaj-store','PagesController@storeMessages')->name('mesaj.store');
