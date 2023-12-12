<?php

namespace App\Http\Controllers;

use App\Models\Syarat;
use Illuminate\Http\Request;

class SyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Syarat::all();

        //membuat parameter ke 2 atau variabel yang akan dapat di tampilkan pada view/pages/index
      return view('Tabel_user.Syarat_Pengajuan',compact('items'));
    }

    public function syarat()
    {
        $items = Syarat::all();

        //membuat parameter ke 2 atau variabel yang akan dapat di tampilkan pada view/pages/index
      return view('Syarat.Data_Syarat',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Syarat.Create_Syarat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Syarat::create([
            'admin' => $request->admin,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'prosedur' => $request->prosedur,
            'syarat' => $request->syarat,
           

        ]);
        return redirect('Data_Syarat')->with('success', 'Data Berhasil Di Tambahkan!');
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
        $item = Syarat::findOrFail($id);
 
 
        return view('Syarat.Edit_Syarat')->with([
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
        $data = $request->all();
        $item = Syarat::findOrFail($id);
        $item->update($data);

        //jika sudah menyimpan data maka akan diarahkan kehalaman yang di arahkan
        return redirect()->route('Data_Syarat')->with('success', 'Data Berhasil Di Edit!');
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
