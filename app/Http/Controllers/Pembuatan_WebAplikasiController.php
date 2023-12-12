<?php

namespace App\Http\Controllers;

use App\Models\Pembuatan_WebAplikasi;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class Pembuatan_WebAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $items = Pembuatan_WebAplikasi::with('pengajuan')->latest()->get();

        //membuat parameter ke 2 atau variabel yang akan dapat di tampilkan pada view/pages/index
      return view('Data_PembuatanWebAplikasi.Pembuatan_WebAplikasi')->with([
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
        $pengajuan = Pengajuan::all();
        $item = Pembuatan_WebAplikasi::with('pengajuan')->get();

        return view('Data_PembuatanWebAplikasi.Create_PemWebApk',compact('item','pengajuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pembuatan_WebAplikasi::create([
            'nama_PerangkatDaerah' => $request->nama_PerangkatDaerah,
            'kategori' => $request->kategori,
            'nama_subdomain' => $request->nama_subdomain,
            'nama_WebAplikasi' => $request->nama_WebAplikasi,
            'deskripsi' => $request->deskripsi,
            'spek_web' => $request->spek_web,
            'status' => $request->status,
            'catatan' => $request->catatan,
            'data_dukung' => $request->data_dukung,
            

        ]);
        return redirect('Data_PembuatanWebAplikasi')->with('success', 'Data Berhasil Di Tambahkan!');
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
        $item = Pembuatan_WebAplikasi::with('pengajuan')->findOrFail($id);
 
 
        return view('Data_PembuatanWebAplikasi.Edit_PemWebApk')->with([
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
        $item = Pembuatan_WebAplikasi::findOrFail($id);
        $item->update($data);

        //jika sudah menyimpan data maka akan diarahkan kehalaman yang di arahkan
        return redirect()->route('Data_PembuatanWebAplikasi')->with('success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pembuatan_WebAplikasi::findOrFail($id);
        $item->delete();

        return redirect()->route('Data_PembuatanWebAplikasi')->with('success', 'Data Berhasil Dihapus!');
    }

    public function cetakPembuatanWebAplikasi()
    {
        $items = Pembuatan_WebAplikasi::all();
        return view('Data_PembuatanWebAplikasi.Cetak_Data')->with([
            'items' => $items
        ]);
    } 
}
