<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PengajuanApiController;
use App\Models\Pengajuan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Login','API\\LoginApiController@index')->name('Login');
Route::post('/PostLogin','API\\LoginApiController@Login')->name('PostLogin');
Route::post('/simpanAdmin','API\\LoginApiController@inputdataAdmin')->name('simpanAdmin');
Route::post('/simpanUser','API\\LoginApiController@inputdataUser')->name('simpanUser');

Route::get('/Pengajuan','API\\PengajuanApiController@index')->name('Pengajuan');
Route::post('/posts','API\\PengajuanApiController@inputdata')->name('inputdata');
Route::get('/SearchPengajuan/{instansi}','API\\PengajuanApiController@search')->name('Pengajuan');


Route::get('/Data_SubdomainWeb','API\\Data_SubdomainWebApiController@index')->name('Data_SubdomainWeb');
Route::get('/SearchSubdomainWeb/{nama_PerangkatDaerah}','API\\Data_SubdomainWebApiController@search')->name('SearchSubdomainWeb');

Route::get('/Data_SubdomainHosting','API\\Data_SubdomainHostingApiController@index')->name('Data_SubdomainHosting');
Route::get('/SearchSubdomainHosting/{nama_PerangkatDaerah}','API\\Data_SubdomainHostingApiController@search')->name('SearchSubdomainHosting');

Route::get('/Data_Subdomain','API\\Data_SubdomainApiController@index')->name('Data_Subdomain');
Route::get('/SearchSubdomain/{nama_PerangkatDaerah}','API\\Data_SubdomainApiController@search')->name('SearchSubdomain');

Route::get('/Data_PembuatanWebAplikasi','API\\Data_PembuatanWebAplikasiApiController@index')->name('Data_PembuatanWebAplikasi');
Route::get('/Syarat','API\\SyaratApiController@index')->name('Syarat');



Route::post('/Contact','API\\ContactApiController@store')->name('Contact');
