<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class SendEmailController extends Controller
{
    public function index(){
        $isi_email =[
            'title' => 'Status Pengajuan Sub Domain Web/Aplikasi Resmi Kota Palangka Raya',
            'body' => 'Selamat Permohonan Pengajuan yang anda kirimkan telah diterima mohon cek kembali status Pengjuannya pada tabel Pengajuan',
            'penutup' => 'Hormat Kami, Kominfo Kota Palangka Raya'
        ];
        $tujuan = 'magangkominfo2022@gmail.com';
        Mail::to($tujuan)->send(new SendEmail($isi_email));
        return redirect('Data_Pengajuan')->with('success', 'Notifikasi Satatus Berhasil Di Kirimkan');
    }
}
