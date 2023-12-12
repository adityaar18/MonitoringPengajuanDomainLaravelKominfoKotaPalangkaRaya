<?php

namespace App\Http\Controllers;

use App\Models\Data_SubdomainHosting;
use App\Models\Pengajuan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Data_SubdomainHostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;$items = Data_SubdomainHosting::with('pengajuan')->latest()->get();
        //membuat parameter ke 2 atau variabel yang akan dapat di tampilkan pada view/pages/index
      return view('Data_SubdomainHosting.Data_SubdomainHosting',compact('items','pengajuan'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengajuan = Pengajuan::all();
        $item = Data_SubdomainHosting::with('pengajuan')->get();

        return view('Data_SubdomainHosting.Create_SubdomainHosting',compact('item','pengajuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Data_SubdomainHosting::create([
            'nama_PerangkatDaerah' => $request->nama_PerangkatDaerah,
            'kategori' => $request->kategori,
            'nama_subdomain' => $request->nama_subdomain,
            'nama_WebAplikasi' => $request->nama_WebAplikasi,
            'deskripsi' => $request->deskripsi,
            'spek_hosting' => $request->spek_hosting,
            'keterangan' => $request->keterangan,
            'update_web' => $request->update_web,
            'versi_mobile' => $request->versi_mobile,
            'catatan' => $request->catatan,
            

        ]);
        return redirect('Data_SubdomainHosting')->with('success', 'Data Berhasil Di Tambahkan!');
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
        $pengajuan = Pengajuan::all();
        $item = Data_SubdomainHosting::with('pengajuan')->findOrFail($id);
 
 
        return view('Data_SubdomainHosting.Edit_SubdomainHosting')->with([
           'item'=>$item, 'pengajuan'=>$pengajuan
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
        $data = $request->all();
        $item = Data_SubdomainHosting::findOrFail($id);
        $item->update($data);

        //jika sudah menyimpan data maka akan diarahkan kehalaman yang di arahkan
        return redirect()->route('Data_SubdomainHosting')->with('success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Data_SubdomainHosting::findOrFail($id);
        $item->delete();

        return redirect()->route('Data_SubdomainHosting')->with('success', 'Data Berhasil Dihapus!');
    }

    public function cetakDataSubdomainHosting()
    {
        $items = Data_SubdomainHosting::all();
        return view('Data_SubdomainHosting.Cetak_Data')->with([
            'items' => $items
        ]);
    }
}
