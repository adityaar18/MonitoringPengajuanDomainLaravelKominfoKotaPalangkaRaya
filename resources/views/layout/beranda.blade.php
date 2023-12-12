@extends('layout.main')

@section('content')  
<br>
<div class="panel">  
					<div class="panel-body">
							<div class="row">
							<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fas fa-users"></i></span>
										<p>
											<span class="number">{{ $admin }}</span>
											<span class="title">Total Pengguna</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-line-chart"></i></span>
										<p>
											<span class="number">{{ $pengajuan }}</span>
											<span class="title">Pengajuan</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-table"></i></span>
										<p>
											<span class="number">{{ $subdomain }}</span>
											<span class="title">Data Sub Domain</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-map"></i></span>
										<p>
											<span class="number">{{ $subdomainhosting }}</span>
											<span class="title">Data Sub Domain dan Hosting</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-window-maximize"></i></span>
										<p>
											<span class="number">{{ $subdomainweb }}</span>
											<span class="title">Data Sub Domain Web</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">{{ $pembuatanWebApk }}</span>
											<span class="title">Data Pembuatan Web dan Aplikasi</span>
										</p>
									</div>
								</div>
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
                        <th>Nama Sub Domain</th>
                        <th>Nama Website/Aplikasi</th>
						<th>Status</th>
                        
                    </tr>
            </thead>
                 
              <tbody>
                    @foreach($items as $item)
                    <tr>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->instansi}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->jenis_pemohon}}</td>
                      <td>{{$item->nama_domain}}</td>
                      <td>{{$item->nama_webapk}}</td>
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
               <!--Untuk memberikan link pembagi halaman tabel menjadi beberapa bagian  -->
         
                        </div> 
                    </div>
				</div>
                     
                
				
					@endsection