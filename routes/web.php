<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\SendEmailController;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
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
    return view('layout_user.home');
});

Route::get('/tabel_Pengajuan','TBpengajuanController@index')->name('tabel_Pengajuan');
Route::get('/tabel_webresmi','TBWebResmiController@index')->name('tabel_webresmi');
Route::get('/tabel_subdomainhosting','TBSubdomainHostingController@index')->name('tabel_subdomainhosting');
Route::get('/tabel_subdomain','TBSubdomainController@index')->name('tabel_subdomain');
Route::get('/tabel_pembuatanwebapk','TBPebuatanWebApkController@index')->name('tabel_pembuatanwebapk');

Route::get('/login', function () {
    return view('login.login');
})->name('login');

// Route::get('/syarat', function () {
//     return view('Tabel_user.Syarat_Pengajuan');
// })->name('syarat');

Route::get('/syarat','SyaratController@index')->name('syarat');


Route::post('/postlogin','LoginController@postlogin')->name('postlogin');

Route::get('/logout','LoginController@logout')->name('logout');
Route::get('/Registrasi','LoginController@Registrasi')->name('Registrasi');
Route::post('/simpan_registrasi','LoginController@simpanregistrasi')->name('simpan_registrasi');

Route::group(['middleware'=>['auth','Ceklevel:admin']], function(){
    Route::get('/Data_Admin','UserController@index')->name('Data_Admin');
    Route::get('/create_admin','UserController@create')->name('create_admin');
    Route::post('/simpan_admin','UserController@store')->name('simpan_admin');
    Route::get('/edit_admin/{id}/edit','UserController@edit')->name('edit_admin');
    Route::put('/update_admin/{id}','UserController@update')->name('update_admin');
    Route::delete('/delete_admin/{id}','UserController@destroy')->name('delete_admin');

    Route::get('/Pengajuan_status/{id}/set-status','PengajuanController@setStatus')->name('Pengajuan_status');
    Route::get('/Data_Pengajuan','PengajuanController@index')->name('Data_Pengajuan');
    Route::post('/Simpan_Pengajuan','PengajuanController@store')->name('Simpan_Pengajuan');
    Route::get('/edit_pengajuan/{id}/edit','PengajuanController@edit')->name('edit_pengajuan');
    Route::put('/update_pengajuan/{id}','PengajuanController@update')->name('update_pengajuan');
    Route::delete('/delete_pengajuan/{id}','PengajuanController@destroy')->name('delete_pengajuan');
    Route::get('/download/{upload_surat}','PengajuanController@download');
    Route::get('/view/{id}','PengajuanController@view');
    Route::get('/detail_show/{id}','PengajuanController@show')->name('detail_show');
    
    Route::get('/Data_SitusWeb','SitusWebController@index')->name('Data_SitusWeb');
    Route::get('/Create_SitusWeb','SitusWebController@create')->name('Create_SitusWeb');
    Route::post('/simpan_data','SitusWebController@store')->name('simpan_data');
    Route::get('/edit_situsweb/{id}/edit','SitusWebController@edit')->name('edit_situsweb');
    Route::put('/update_situsweb/{id}','SitusWebController@update')->name('update_situsweb');
    Route::delete('/delete_SitusWeb/{id}','SitusWebController@destroy')->name('delete_SitusWeb');
    
    Route::get('/Data_Subdomain','Data_SubdomainController@index')->name('Data_Subdomain');
    Route::get('/Create_Subdomain','Data_SubdomainController@create')->name('Create_Subdomain');
    Route::post('/Simpan_Subdomain','Data_SubdomainController@store')->name('Simpan_Subdomain');
    Route::get('/Edit_Subdomain/{id}/edit','Data_SubdomainController@edit')->name('Edit_Subdomain');
    Route::put('/Update_Subdomain/{id}','Data_SubdomainController@update')->name('Update_Subdomain');
    Route::delete('/Delete_Subdomain/{id}','Data_SubdomainController@destroy')->name('Delete_Subdomain');
    
    Route::get('/Data_PembuatanWebAplikasi','Pembuatan_WebAplikasiController@index')->name('Data_PembuatanWebAplikasi');
    Route::get('/Create_PembuatanWebAplikasi','Pembuatan_WebAplikasiController@create')->name('Create_PembuatanWebAplikasi');
    Route::post('/Simpan_PembuatanWebAplikasi','Pembuatan_WebAplikasiController@store')->name('Simpan_PembuatanWebAplikasi');
    Route::get('/Edit_PembuatanWebAplikasi/{id}/edit','Pembuatan_WebAplikasiController@edit')->name('Edit_PembuatanWebAplikasi');
    Route::put('/Update_PembuatanWebAplikasi/{id}','Pembuatan_WebAplikasiController@update')->name('Update_PembuatanWebAplikasi');
    Route::delete('/Delete_PembuatanWebAplikasi/{id}','Pembuatan_WebAplikasiController@destroy')->name('Delete_PembuatanWebAplikasi');
    
    Route::get('/Data_SubdomainHosting','Data_SubdomainHostingController@index')->name('Data_SubdomainHosting');
    Route::get('/Create_SubdomainHosting','Data_SubdomainHostingController@create')->name('Create_SubdomainHosting');
    Route::post('/simpan_SubdomainHosting','Data_SubdomainHostingController@store')->name('simpan_SubdomainHosting');
    Route::get('/edit_SubdomainHosting/{id}/edit','Data_SubdomainHostingController@edit')->name('edit_SubdomainHosting');
    Route::put('/update_SubdomainHosting/{id}','Data_SubdomainHostingController@update')->name('update_SubdomainHosting');
    Route::delete('/delete_SubdomainHosting/{id}','Data_SubdomainHostingController@destroy')->name('delete_SubdomainHosting');

    Route::get('/Data_Syarat','SyaratController@Syarat')->name('Data_Syarat');
    Route::get('/Create_Syarat','SyaratController@create')->name('Create_Syarat');
    Route::post('/Simpan_Syarat','SyaratController@store')->name('Simpan_Syarat');
    Route::get('/Edit_Syarat/{id}/edit','SyaratController@edit')->name('Edit_Syarat');
    Route::put('/Update_Syarat/{id}','SyaratController@update')->name('Update_Syarat');
});

Route::group(['middleware'=>['auth','Ceklevel:admin,user']], function(){
    Route::get('/beranda','BerandaController@index')->name('beranda');
    Route::get('/Create_Pengajuan','PengajuanController@create')->name('Create_Pengajuan');
    
    
   // Route::get('/formpertanyaan','FormPertanyaanController@index')->name('formpertanyaan');
   
});

    Route::get('/cetak_pengajuan','PengajuanController@cetakPengajuan')->name('cetak_pengajuan');
    Route::get('/cetak_DataSubdomainWeb','SitusWebController@cetakDataSubdomainWeb')->name('cetak_DataSubdomainWeb');
    Route::get('/cetak_DataSubdomainHosting','Data_SubdomainHostingController@cetakDataSubdomainHosting')->name('cetak_DataSubdomainHosting');
    Route::get('/cetak_DataSubdomain','Data_SubdomainController@cetakDataSubdomain')->name('cetak_DataSubdomain');
    Route::get('/cetak_PembuatanWebAplikasi','Pembuatan_WebAplikasiController@cetakPembuatanWebAplikasi')->name('cetak_PembuatanWebAplikasi');

    //buat ngirim ke mailtrap
    //Route::get('/email',[EmailController::class,'kirim']);
    Route::get('/contact','FormPertanyaanController@index')->name('contact');
    Route::post('/simpan_formpertanyaan','FormPertanyaanController@store')->name('simpan_formpertanyaan');
    Route::get('/kirim','SendEmailController@index')->name('kirim');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
    Route::post('password/reset', 'ResetPasswordController@reset');



