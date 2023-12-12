<?php

namespace App\Http\Controllers;

use App\Models\Data_Subdomain;
use App\Models\Data_SubdomainHosting;
use App\Models\Pembuatan_WebAplikasi;
use App\Models\Pengajuan;
use App\Models\SitusWebsete;
use App\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = Pengajuan::all()->count();
        $subdomain = Data_Subdomain::with('pengajuan')->count();
        $subdomainhosting = Data_SubdomainHosting::with('pengajuan')->count();
        $subdomainweb = SitusWebsete::with('pengajuan')->count();
        $pembuatanWebApk = Pembuatan_WebAplikasi::with('pengajuan')->count();
        $admin = User::all()->count();
        $items = Pengajuan::all();

        return view('layout.beranda')->with([
            'pengajuan' => $pengajuan, 
            'subdomain' => $subdomain,
            'subdomainhosting' => $subdomainhosting,
            'subdomainweb' => $subdomainweb,
            'pembuatanWebApk' => $pembuatanWebApk,
            'admin' => $admin,
            'items' => $items,
            
           
        ]);
        
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
        //
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
