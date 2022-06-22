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
    return view('/auth/login');
});

Auth::routes();

Route::middleware('auth')->group(function() {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('users', 'UserController')->middleware('can:edit_master');

	Route::resource('roles', 'RoleController')->middleware('can:edit_master');

	Route::resource('bidang', 'BidangController')->middleware('can:edit_master');

	Route::resource('sifatsurat', 'SifatSuratController')->middleware('can:edit_surat');

	Route::resource('surat_masuk', 'SuratMasukController')->middleware('can:edit_surat');

	Route::get('surat_masuk/{surat:id}/verification', 'SuratMasukController@verification')
		->middleware('can:edit_dispos')
		->name('surat_masuk.verification');
		
	Route::patch('surat_masuk/{id}/updateVerification', 'SuratMasukController@updateVerification')
		->middleware('can:edit_dispos')
		->name('surat_masuk.updateVerification');

	Route::get('download/{id}', 'SuratMasukController@download')
		->middleware('can:read_surat')
		->name('download');

	Route::get('surat_masuk/preview/{id}', 'SuratMasukController@preview')
		->middleware('can:read_surat')
		->name('preview');
});