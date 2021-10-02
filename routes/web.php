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
    return view('welcome');
})->name('acasa');

Route::get('/{pages}', 'PagesController@Pages')->name('pages')
->where('pages','contacte|despre|parteneri');

Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/employee', 'EmployeeController@index')->name('employee.home');

    //auth for employees
    Route::resource('/reports',ReportsController::class);

    //auth for admin
    Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {
        Route::get('/dashboard',function () {
            return view('pages.admin.index');
        })->name('admin');

        Route::resource('crud', CRUDController::class);


        Route::get('partners/{partner}','PagesController@index')->name('partner_detail');
        Route::get('/admin-messages','PagesController@displayMessages')->name('message.index');
        Route::post('/mesaj-store','PagesController@storeMessages')->name('mesaj.store');

        });
});



