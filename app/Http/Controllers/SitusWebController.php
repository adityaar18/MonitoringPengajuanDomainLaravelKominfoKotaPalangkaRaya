<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use App\Models\SitusWebsete;
use Illuminate\Support\Str;
class SitusWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $items = SitusWebsete::with('pengajuan')->latest()->get();

        //membuat parameter ke 2 atau variabel yang akan dapat di tampilkan pada view/pages/index
      return view('Data_SubdomainWeb.Data_SitusWeb',compact('items','pengajuan'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengajuan = Pengajuan::all();
        $item = SitusWebsete::with('pengajuan')->get();

        return view('Data_SubdomainWeb.Create_SitusWeb',compact('item','pengajuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SitusWebsete::create([
            'nama_PerangkatDaerah' => $request->nama_PerangkatDaerah,
            'kategori' => $request->kategori,
            'nama_subdomain' => $request->nama_subdomain,
            'keterangan' => $request->keterangan,
            'update_terakhir' => $request->update_terakhir,
            'identitas' => $request->identitas,
            'profil' => $request->profil,
            'kebijakan' => $request->kebijakan,
            'l_publik' => $request->l_publik,
            'kb_produkhukum' => $request->kb_produkhukum,
            'pp_kegiatan' => $request->pp_kegiatan,
            'l_aspirasi' => $request->l_aspirasi,
            'kontak' => $request->kontak,
            'catatan' => $request->catatan,

        ]);
        return redirect('Data_SitusWeb')->with('success', 'Data Berhasil Di Tambahkan!');
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
        $item = SitusWebsete::with('pengajuan')->findOrFail($id);
 
 
        return view('Data_SubdomainWeb.Edit_SitusWeb')->with([
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
        $data['slug'] = Str::slug($request->nama);
        
        $item = SitusWebsete::findOrFail($id);
        $item->update($data);

        //jika sudah menyimpan data maka akan diarahkan kehalaman yang di arahkan
        return redirect()->route('Data_SitusWeb')->with('success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SitusWebsete::findOrFail($id);
        $item->delete();

        return redirect()->route('Data_SitusWeb')->with('success', 'Data Berhasil Dihapus!');
    }

    public function cetakDataSubdomainWeb()
    {
        $items = SitusWebsete::all();
        return view('Data_SubdomainWeb.Cetak_Data')->with([
            'items' => $items
        ]);
    }
}
