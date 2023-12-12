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
            <h1 class="fg-white text-center">Data Pengajuan</h1>
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
                        <th>Tangal/Waktu Pengajuan</th>
                        <th>Nama Perngkat Daerah</th>
                        <th>Kategori Perngkat Daerah</th>
                        <th>Jenis Permohonan</th>
                        <th>Nomor Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Nama Sub Domain</th>
                        <th>Nama Website/Aplikasi</th>
                        <th>Deskripsi</th>
                        <th>Spesifikasi Hosting</th>
                        <th>Hosting</th>
                        <th>Domain</th>
                        <th>IP Address</th>
                        <th>Metode</th>
                        <th>Spek Web/App</th>
                        <th>Nama Pengaju</th>
                        <th>No.Hp/WA Prangkat Daerah</th>
                        <th>Email</th>
                        <th>Keterangan</th>
                                               
                    </tr>
      </thead>
              <tbody>
                 @foreach($items as $item)
                    <tr>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->instansi}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->jenis_pemohon}}</td>
                      <td>{{$item->no_surat}}</td>
                      <td>{{$item->tgl_surat}}</td>
                      <td>{{$item->nama_domain}}</td>
                      <td>{{$item->nama_webapk}}</td>
                      <td>{{$item->dsk_webapk}}</td>
                      <td>{{$item->spk_hosting}}</td>
                      <td>{{$item->hosting}}</td>
                      <td>{{$item->domain}}</td>
                      <td>{{$item->ip_address}}</td>
                      <td>{{$item->metode}}</td>
                      <td>{{$item->nama_webapk}}</td>
                      <td>{{$item->nama_pengaju}}</td>
                      <td>{{$item->kontak}}</td>   
                      <td>{{$item->email}}</td>
                      <td> 
                                        @if($item->keterangan =='proses')
                                        <span class="badge rounded-pill bg-warning text-dark">
                                        @elseif($item->keterangan =='diterima')
                                        <span class="badge rounded-pill bg-success">
                                        @elseif($item->keterangan == 'ditolak')
                                        <span class="badge rounded-pill bg-danger">
                                        @else
                                        <span>
                                        @endif
                                            {{$item->keterangan}}
                                        </span>
                                        </td>
                  </tr>   
                  @endforeach
             </tbody>

              </table>
              
              </div>
								<br>
                <li class="breadcrumb-item"  ><a href="{{route('cetak_pengajuan')}}" target="_blank">Download PDF</a></li>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    @endsection

