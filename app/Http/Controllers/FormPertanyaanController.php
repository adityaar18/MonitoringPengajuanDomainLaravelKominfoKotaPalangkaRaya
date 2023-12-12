<?php

namespace App\Http\Controllers;

use App\Mail\formMail;
use App\Models\FormPertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Tabel_user.ContactUser');
       // return view('Tabel_user.FormPertanyaan');

    }

    public function contact()
    {
        return view('Tabel_user.ContactUser');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FormPertanyaan::create([
            'instansi' => $request->instansi,
            'nama_penanya' => $request->nama_penanya,
            'email' => $request->email,
            'pertanyaan' => $request->pertanyaan,

        ]);

        $data= FormPertanyaan::all();
        $data->instansi = $request->instansi;
        $data->email = $request->email;


        Mail::raw('Pertanyaan yang anda ajukan di Form Pertanyaan Anda Akan Segera Di Balas . Terima Kasih.'.$data->instansi, function ($message) use($data) {
            $message->to($data->email, $data->instansi);
            $message->subject('Notifikasi Form Pertanyaan Pengajuan Domain');
        });

        //pengiriman pertanyaan dari pengguna user
        $isi_email =[
            'instansi' => $request->instansi,
            'nama_penanya' => $request->nama_penanya,
            'email' => $request->email,
            'pertanyaan' => $request->pertanyaan,
        ];
        
        $tujuan = 'magangkominfo2022@gmail.com';
        Mail::to($tujuan)->send(new formMail($isi_email));
      
        

        return redirect('contact')->with('success', 'Pertanyaan Anda Telah Di Kirimkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
