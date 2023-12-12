@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
<div class="main-content">
    <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-8">
                <h3 class="page-title"><b>Data Pembuatan Web/APlikasi </b></h3>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Dasboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('cetak_PembuatanWebAplikasi')}}" target="_blank">Cetak  Data</a></li>
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
                  <a href="{{route('Create_PembuatanWebAplikasi')}}" class="btn btn-success"><i class="fas fa-plus-square"></i></a>
                  <a href="{{route('cetak_PembuatanWebAplikasi')}}" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i></a>
              </div>
								</div>
                <div class="table-responsive">
								<div class="panel-body">
                
                    <br>
									<table class="table table-bordered" id="datatables">
              <thead>
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
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
              </thead>
                  @foreach($items as $item)
              <tbody>
                    <tr>
                    <td>{{$item->updated_at}}</td>
                      <td>{{$item->nama_PerangkatDaerah}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->nama_subdomain}}</td>
                      <td>{{$item->nama_WebAplikasi}}</td>
                      <td>{{$item->deskripsi}}</td>
                      <td>{{$item->spek_web}}</td>
                      <td>{{$item->status}}</td>
                      <td>{{$item->catatan}}</td>
                      <td>{{$item->data_dukung}}</td>
                      
                      <td>
              
                        <a href="{{ route('Edit_PembuatanWebAplikasi', $item->id) }}"><button class="btn  btn-sm">
                        <i class="fas fa-edit" style="color:darkgreen ;"></i>
                        </button> </a> 
                       <!--Untuk Menu Hapus -->
                       
                       </td>
                       <td>
                                     <form action="{{ route('Delete_PembuatanWebAplikasi', $item->id) }}" method="post" class="d-inline">
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