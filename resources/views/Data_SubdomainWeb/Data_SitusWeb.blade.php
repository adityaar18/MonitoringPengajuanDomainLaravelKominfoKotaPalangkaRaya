@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
<div class="main-content">
<div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-8">
            <h3 class="page-title"><b>Kelola Data Sub Domain Web</b></h3>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Dasboard</a></li>
                <li class="breadcrumb-item active"><a href="{{route('cetak_DataSubdomainWeb')}}" target="_blank">Cetak Data</a></li>
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
                  <a href="{{route('Create_SitusWeb')}}" class="btn btn-success"><i class="fas fa-plus-square"></i></a>
                  <a href="{{route('cetak_DataSubdomainWeb')}}" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i></a>
              </div>
								</div>
                <div class="table-responsive">
								<div class="panel-body">
                 
                  <br>
									<table class="table table-bordered table-hover" id="datatables">
              <thead>
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
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
              </thead>               
              <tbody>
              @foreach($items as $item)
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
                      <td>{{$item->catatan}}</td>
                      
                      <td>
              
                        <a href="{{ route('edit_situsweb', $item->id) }}"><button class="btn  btn-sm">
                        <i class="fas fa-edit" style="color:darkgreen ;"></i>
                        </button> </a> 
                       <!--Untuk Menu Hapus -->
                       
                       </td>
                       <td>
                                     <form action="{{ route('delete_SitusWeb', $item->id) }}" method="post" class="d-inline">
                                       @csrf <!-- berfungsi supaya saat pengiriman form tidak terjadi masalah -->
                                        @method('delete')
                                        <button class="btn  btn-sm">
                                        <i class="fas fa-trash-alt" darkgreen style="color: darkgreen ;"></i>
                                        </button>
                                        </form>
                      </td>
                    </tr>
                    @endforeach
              </tbody>
                  

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