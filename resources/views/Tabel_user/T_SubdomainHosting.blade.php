@extends('layout_user.main')

@section('banner')
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(home/assets/img/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Monitoring</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Monitor Aplikasi Resmi di Server Kominfo</h1>
          </div>
        </div>
      </div>
    </div> 
@endsection

@section('content')
<div class="container py-5">
  <div class="row ">
    <div class="col-lg-12 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
        
          <br>
          <div class="table-responsive"> 
          <table id="datatables" style="width:100%" class="table table-striped table-bordered btn-sm">
      <thead class="table-dark">
                    <tr>
                        <th>Tanggal Monitoring</th>
                        <th>Nama Perangkat Daerah</th>
                        <th>Kategori Instansi</th>
                        <th>Nama Sub Domain</th>
                        <th>Nama Web/Aplikasi</th>
                        <th>Deskripsi Web/Aplikasi</th>
                        <th>Spesifikasi_Hosting</th>
                        <th>Keterangan</th>
                        <th>Update Terakhir Web</th>
                        <th>Versi Mobile</th>
                        <th>Catatan</th>
                        
                    </tr>
      </thead>
            
      @foreach($items as $item)
              <tbody>
                    <tr>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nama_PerangkatDaerah}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->nama_subdomain}}</td>
                      <td>{{$item->nama_WebAplikasi}}</td>
                      <td>{{$item->deskripsi}}</td>
                      <td>{{$item->spek_hosting}}</td>
                      <td>{{$item->keterangan}}</td>
                      <td>{{$item->updated_at}}</td>
                      <td>{{$item->versi_mobile}}</td>
                      <td>{{$item->catatan}}</td>
                     
                    </tr>
              </tbody>
                  @endforeach

              </table>
              
              </div>
              <br>
                <li class="breadcrumb-item"><a href="{{route('cetak_DataSubdomainHosting')}}" target="_blank">Download PDF</a></li>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    @endsection