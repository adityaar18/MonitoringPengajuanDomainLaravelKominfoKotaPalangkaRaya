@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
<div class="main-content">
<div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-8">
            <h3 class="page-title"><b>Rekapan Data Sub Doamin Hosting </b></h3>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Dasboard</a></li>
                <li class="breadcrumb-item active"><a href="{{route('cetak_DataSubdomainHosting')}}" target="_blank">Cetak  Data</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
					
					<div class="row">
						<div class="col-md-40">
							<!-- BORDERED TABLE -->
              <div class="table-responsive">
							<div class="panel">
								<div class="panel-heading">
                <div class="card-tools">
                  <a href="{{route('Create_SubdomainHosting')}}" class="btn btn-success"><i class="fas fa-plus-square"></i></a>
                  <a href="{{route('cetak_DataSubdomainHosting')}}" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i></a>
              </div>
								</div>
                <div class="table-responsive">
								<div class="panel-body">
               
                
                    <br>
									<table class="table table-bordered " id="datatables">
              <thead>
                    <tr>
                        <th>Tanggal Monitoring</th>
                        <th>Nama Perangkat Daerah</th>
                        <th>Kategori Instansi</th>
                        <th>Nama Sub Domain</th>
                        <th>Nama Web/Aplikasi</th>
                        <th>Deskripsi Web/Aplikasi</th>
                        <th>Spesifikasi_Hosting</th>
                        <th>Keterangan</th>
                        <th>Update Terakhir</th>
                        <th>Versi Mobile</th>
                        <th>Catatan</th>
                        <th>Edit</th>
                        <th>Hapus</th>
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
                      <td>{{$item->update_web}}</td>
                      <td>{{$item->versi_mobile}}</td>
                      <td>{{$item->catatan}}</td>
                      <td>
              
                        <a href="{{ route('edit_SubdomainHosting', $item->id) }}"><button class="btn  btn-sm">
                        <i class="fas fa-edit" style="color:darkgreen ;"></i>
                        </button> </a> 
                       <!--Untuk Menu Hapus -->
                       
                       </td>
                       <td>
                                     <form action="{{ route('delete_SubdomainHosting', $item->id) }}" method="post" class="d-inline">
                                       @csrf <!-- berfungsi supaya saat pengiriman form tidak terjadi masalah -->
                                        @method('delete')
                                        <button class="btn  btn-sm">
                                        <i class="fas fa-trash-alt" darkgreen style="color: darkgreen ;"></i>
                                        </button>
                                        </form>
                      </td>
                    </tr>
              </tbody>
                  @endforeach

              </table>
              
              </div>
              </div>
							</div>
              </div>
							<!-- END BORDERED TABLE -->
						</div>
						</div>
					</div>
				</div>
@endsection