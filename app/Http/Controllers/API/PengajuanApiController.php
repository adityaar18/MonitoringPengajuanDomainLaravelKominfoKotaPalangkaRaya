<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\SitusWebsete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PengajuanApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $items = Pengajuan::getPengajuan()->paginate(5);
    
      return ResponseFormatter::success($items);
    }
    public function search($instansi)
    {
        $data = Pengajuan::where("instansi", $instansi)->paginate();
        return ResponseFormatter::success($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inputdata(Request $request)
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

        $file = $request->upload_surat;
        $filename=date("Y-m-d",time()).'.'.$file->getClientOriginalName();
        $request->upload_surat->move('assets',$filename);
        
        
        $data->upload_surat=$filename;
        $data->save();

        return ResponseFormatter::success($data);
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
