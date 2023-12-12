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
            <h1 class="fg-white text-center">Monitor Web Resmi Badan/Dinas/Kantor/Kec/Kelurahan/UPT/RSUD</h1>
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
                        <th scope="col">Tanggal Monotoring</th>
                        <th>Nama Perangkat Daerah</th>
                        <th>Kategori Instansi</th>
                        <th>Nama Sub-domain</th>
                        <th>Keterangan</th>
                        <th>Update Trakhir</th>
                        <th>Identitas/Logo</th>
                        <th>Profil</th>
                        <th>Kebijakan dan Prioritas</th>
                        <th>Layanan Publik</th>
                        <th>Kebijakan dan Produk Hukum</th>
                        <th>Pelaksanaan Program dan Kegiatan</th>
                        <th>Layanan Aspirasi</th>
                        <th>Kontak</th>
                        <th>catatan</th>
                        
                    </tr>
      </thead>
            
      @foreach($items as $item)
              <tbody>
                    <tr>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nama_PerangkatDaerah}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->nama_subdomain}}</td>
                      <td>{{$item->keterangan}}</td>
                      <td>{{$item->update_terakhir}}</td>
                      <td>{{$item->identitas}}</td>
                      <td>{{$item->profil}}</td>
                      <td>{{$item->kebijakan}}</td>
                      <td>{{$item->l_publik}}</td>
                      <td>{{$item->kb_produkhukum}}</td>
                      <td>{{$item->pp_kegiatan}}</td>
                      <td>{{$item->l_aspirasi}}</td>
                      <td>{{$item->kontak}}</td>
                      <td>{{$item->kontak}}</td>
                   
                    </tr>
              </tbody>
                  @endforeach

              </table>
              
              </div>
              <br>
                <li class="breadcrumb-item"><a href="{{route('cetak_DataSubdomainWeb')}}" target="_blank">Download PDF</a></li>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    @endsection