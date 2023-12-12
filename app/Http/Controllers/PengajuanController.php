<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $items = Pengajuan::latest()->get();
    //    $items->appends($request->all());
       

        //membuat parameter ke 2 atau variabel yang akan dapat di tampilkan pada view/pages/index
      return view('Pengajuan.Data_pengajuan')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengajuan.Create_Pengajuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data= new Pengajuan();
       $data->instansi = $request->instansi;
       $data->kategori = $request->kategori;
       $data->jenis_pemohon = $request->jenis_pemohon;
       $data->no_surat = $request->no_surat;
       $data->tgl_surat = $request->tgl_surat;
       $data->nama_domain = $request->nama_domain .'.palangkaraya.go.id';
       $data->nama_webapk = $request->nama_webapk;
       $data->dsk_webapk = $request->dsk_webapk;
       $data->spk_hosting = ($request->spk_hosting  ? $request->spk_hosting : '-');
       $data->hosting = ($request->hosting  ? $request->hosting : '-');
       $data->domain = ($request->domain  ? $request->domain : '-');
       $data->ip_address = ($request->ip_address ? $request->ip_address : '-');
       $data->metode = ($request->metode  ? $request->metode : '-');
       $data->spek_webapp = ($request->spek_webapp  ? $request->spek_webapp : '-');
       $data->nama_pengaju = $request->nama_pengaju;
       $data->kontak = $request->kontak;
       $data->email = $request->email;
       $data->keterangan =  'proses';
       
    //    $data->email = ($request->email == '' ? $request->email : '-');
       

        $file = $request->upload_surat;
        $filename=date("Y-m-d",time()).'.'.$file->getClientOriginalName();
        $request->upload_surat->move('assets',$filename);
        
        
        $data->upload_surat=$filename;
        $request->validate([
            
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data->save();
       

        Mail::raw('Terimakasi Telah Melakuan Pengajuan Sub Domain Pengajuan anda sedang diproses mohon di tunggu info selanjutnya '.$data->instansi, function ($message) use($data) {
            $message->to($data->email, $data->instansi);
            $message->subject('Notifikasi Pengajuan Domain');
        });

        return redirect('beranda')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pengajuan::findOrFail($id);
        return view('Pengajuan.Show')->with([
            'item'=>$item
        ]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $item = Pengajuan::findOrFail($id);
 
         return view('Pengajuan.Edit_Pengajuan')->with([
            'item'=>$item
        ]);
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
        $data = Pengajuan::findOrFail($id);
        $dt = [
            'instansi' => $request['instansi'],
            'kategori' => $request['kategori'],
            'jenis_pemohon' => $request['jenis_pemohon'],
            'tgl_surat' => $request['tgl_surat'],
            'no_surat' => $request['no_surat'],
            'nama_domain' => $request['nama_domain'],
            'nama_webapk' => $request['nama_webapk'],
            'spk_hosting' => $request['spk_hosting'],
            'dsk_webapk' => $request['dsk_webapk'],
            'nama_pengaju' => $request['nama_pengaju'],
            'kontak' => $request['kontak'],
            'email' => $request['email'],
            'keterangan' => $request['keterangan'],

        ];
        
 
      
        $data->update($dt);
        

        return redirect('Data_Pengajuan')->with('success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pengajuan::findOrFail($id);
        $item->delete();

        return redirect()->route('Data_Pengajuan')->with('success', 'Data Berhasil Di Hapus!');
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('assets/'.$file));
    }

    public function view($id)
    {
        $data=Pengajuan::find($id);
        return view('Pengajuan.ViewPdf',compact('data'));
    }

    public function setStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:proses,diterima,ditolak'
        ]);

        $item = Pengajuan::findOrFail($id);
        $item->keterangan= $request->status;
        $item->save();
        $isi_email ='Permohonan Pengajuan anda telah diterima oleh Kominfo Kota Palangka Raya, Seilahkan cek pengajuan anda pada tabel pengajuan.

        Hormat kami, Kominfo Kota Palangka Raya-';

        $isi_email2 ='Mohon maaf untuk pengajuan subdomain yang anda ajukan ditolak mohon syarat pengajuannya di lengkapi terlebih dahulu 

        Hormat kami, Kominfo Kota Palangka Raya-';
        
        //membuat kirim email jika prosesnya di terima atau di tolak
        if($item->keterangan =='diterima'){
            Mail::raw($isi_email.$item->intansi, function ($message) use($item) {
                $message->to($item->email, $item->instansi);
                $message->subject('Notifikasi Permintaan Diterima Pengajuan Sub Domain Web/Aplikasi Resmi Kota Palangka Raya');
            });
        }elseif($item->keterangan =='ditolak'){
            Mail::raw($isi_email2.$item->intansi, function ($message) use($item) {
                $message->to($item->email, $item->instansi);
                $message->subject('Notifikasi Permintaan Ditolak Pengajuan Sub Domain Web/Aplikasi Resmi Kota Palangka Raya');      
            });
        }


        return redirect()->route('Data_Pengajuan');
    }

    public function cetakPengajuan()
    {
        $items = Pengajuan::all();
        return view('Pengajuan.Cetak_Data')->with([
            'items' => $items
        ]);
    }
}
