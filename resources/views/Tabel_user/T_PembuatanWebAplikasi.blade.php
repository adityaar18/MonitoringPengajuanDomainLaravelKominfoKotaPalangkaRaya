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
            <h1 class="fg-white text-center">Monitor Progress Pengembangan Aplikasi yang Dikelola Kominfo</h1>
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
                        <th>Tanggal Pencatatan Progres</th>
                        <th>Nama Perangkat Daerah</th>
                        <th>Kategori Instansi</th>
                        <th>Nama Sub Domain</th>
                        <th>Nama Web/Aplikasi</th>
                        <th>Deskripsi Web/Aplikasi</th>
                        <th>Spek_Web/Aplikasi</th>
                        <th>Status</th>
                        <th>Catatan</th>
                        <th>Data Dukung</th>
                        
                    </tr>
      </thead>
              <tbody>
              @foreach($items as $item)
                    <tr>
                    <td>{{$item->created_at}}</td>
                      <td>{{$item->nama_PerangkatDaerah}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->nama_subdomain}}</td>
                      <td>{{$item->nama_WebAplikasi}}</td>
                      <td>{{$item->deskripsi}}</td>
                      <td>{{$item->spek_web}}</td>
                      <td>{{$item->status}}</td>
                      <td>{{$item->catatan}}</td>
                      <td>{{$item->data_dukung}}</td>
                      
                     
                    </tr>
                    @endforeach
              </tbody>
                  

              </table>
              
              </div>
              <br>
                <li class="breadcrumb-item"><a href="{{route('cetak_PembuatanWebAplikasi')}}" target="_blank">Download PDF</a></li>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    @endsection