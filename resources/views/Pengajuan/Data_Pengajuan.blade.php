@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
<div class="main-content">
    <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-8">
            <h3 class="page-title"><b>Data Pengajuan Domain/Hosting/Aplikasi</b></h3>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Dasboard</a></li>
                <li class="breadcrumb-item active"><a href="{{route('cetak_pengajuan')}}" target="_blank">Cetak Pengajuan</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>			
	<div class="row">
	<!-- BORDERED TABLE -->
        <div class="panel">                      
			<div class="panel-heading">
                <div class="card-tools">
                  <a href="{{route('Create_Pengajuan')}}" class="btn btn-success"><i class="fas fa-plus-square"></i></a>
                  <a href="{{route('cetak_pengajuan')}}" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i></a>
              </div>               
	    </div>
    <div class="table-responsive">
		<div class="panel-body">
          <br>
			<table class="table table-bordered" id="datatables">
              <thead>
                    <tr>
                        <th>Tangal/Waktu Pengajuan</th>
                        <th>Nama Perngkat Daerah</th>
                        <th>Kategori Perngkat Daerah</th>
                        <th>Jenis Permohonan</th>
                        <th>Nomor Surat</th>
                        <th>Tanggal Surat</th>
                        <th>File Surat Pengajuan</th>
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
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Delete</th>                        
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
                      <td>
                          <a href="{{url('/view',$item->id)}}" target="_blank">view</a> |
                           <a href="{{url('/download',$item->upload_surat)}}">unduh</a>
                      </td>
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
                        <td>
                        <a href="#mymodal"
                                        data-remote="{{ route('detail_show', $item->id) }}"
                                        data-toggle="modal"
                                        data-target="#mymodal"
                                        data-title="Detail Pengajuan {{ $item->instansi }}"
                                        class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                        </td>

                        <td>
                        <!--Untuk Menu Edit -->
                         <a href="{{ route('edit_pengajuan', $item->id) }}" class="btn btn-primary btn-sm">
                                           <i class="fas fa-edit"></i>
                                       </a> 
                        <!--konfirmasi si transaksi jika transaction pending -->
                        @if($item->keterangan == 'proses')
                                       <a href="{{ route('Pengajuan_status',$item ->id) }}?status=diterima" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>
                                        </a>
                    
                                        <a href="{{ route('Pengajuan_status',$item->id) }}?status=ditolak" class="btn btn-warning btn-sm">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        </a> 
                                        @endif
                       
                       
                      
                        </td>
                        <td>

                            <!--Untuk Menu Hapus -->
                            <form action="{{ route('delete_pengajuan', $item->id) }}" method="post" class="d-inline">
                                       @csrf <!-- berfungsi supaya saat pengiriman form tidak terjadi masalah -->
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        </form>
                      </td>
                    </tr>
                    @endforeach
              </tbody>
                  

              </table>
               <!--Untuk memberikan link pembagi halaman tabel menjadi beberapa bagian  -->
         
                        </div> 
                    </div>
                     
                </div>
			    <!-- END BORDERED TABLE -->
						
						</div>
					</div>
				</div>
@endsection