@extends('layout.main')

@section('content')    
<div class="main-content">
				<div class="container-fluid">		
          <div class="row">
        
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_SubdomainHosting')}}"><i class="lnr lnr-home"></i> <span>Back to Data Subdomain Hosting </span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Tambah Data Sub Domain Hosting</b></h3>
                    </div>
          </div>	
       
					<div class="row">
						<div class="col-md-11">
    
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
      <div class="panel">
        <div class="row">
			<div class="col-md-14">
            <div class="panel-body">
          <div class="card-body">
              <form action="{{route('simpan_SubdomainHosting')}}"  method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

            <div class="form-group">
                <label for="nama_PerangkatDaerah" class="form-control-label">Nama Perangkat Daerah</label>
                <select name="nama_PerangkatDaerah" 
                        class="form-control @error('nama_PerangkatDaerah') is-invalid @enderror ">
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->instansi }}">{{$pj->instansi}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('nama_PerangkatDaerah') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="kategori" class="form-control-label">Kategori</label>
                <select name="kategori" 
                        class="form-control @error('kategori') is-invalid @enderror ">
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->kategori }}">{{$pj->kategori}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('kategori') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="nama_subdomain" class="form-control-label">Nama Sub Domain</label>
                <select name="nama_subdomain" 
                        class="form-control @error('nama_subdomain') is-invalid @enderror ">
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->nama_domain }}">{{$pj->nama_domain}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('nama_subdomain') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            
            <div class="form-group">
                <label for="nama_WebAplikasi" class="form-control-label">Nama Web / APlikasi</label>
                <select name="nama_WebAplikasi" 
                        class="form-control @error('nama_WebAplikasi') is-invalid @enderror ">
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->nama_webapk}}">{{$pj->nama_webapk}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('nama_WebAplikasi') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
            <label for="deskripsi" class="form-control-label">Deskripsi</label>
                <textarea name="deskripsi" 
                          required
                          placeholder="Deskripsi"
                          class="form-control @error('deskripsi') is-invalid @enderror" >{{ old('deskripsi')}}</textarea>       
                @error('deskripsi') <div class="text-muted">{{$message}}</div> @enderror
                </div>

            <div class="form-group">
                <label for="spek_hosting" class="form-control-label">Nama Web / APlikasi</label>
                <select name="spek_hosting" 
                        class="form-control @error('spek_hosting') is-invalid @enderror ">
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->spk_hosting}}">{{$pj->spk_hosting}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('spek_hosting') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="keterangan" class="form-control-label">Keterangan</label>
                <select name="keterangan" 
                        class="form-control @error('keterangan') is-invalid @enderror ">
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->keterangan }}">{{$pj->keterangan}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('keterangan') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
            <label for="exampleFormControlSelect1">Update Trakhir</label>
                  <input type="date" class="form-control" name="update_web" required placeholder="update_terakhir">
                  <div class="input-group-append">
                    <div class="input-group-text">   
                    </div>
                  </div>
                </div>

            <div class="form-group">
                <label for="versi_mobile" class="form-control-label">Versi Mobile</label>
                <input type="text"
                       name="versi_mobile"  
                       required
                       class="form-control @error('versi_mobile') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('versi_mobile') <div class="text-muted">{{$message}}</div> @enderror
            </div>
           

            <div class="form-group">
            <label for="catatan" class="form-control-label">Catatan</label>
                <textarea name="catatan" 
                          required
                          placeholder="Catatan"
                          class="form-control @error('catatan') is-invalid @enderror" >{{ old('catatan')}}</textarea>       
                @error('catatan') <div class="text-muted">{{$message}}</div> @enderror
                </div>
        
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
              </form>
          </div>
      </div>
    </div>
    <!-- end -->
    </div>
		</div>
			</div>
				</div>
            </div>
        </div>
    </div>
        
       
       

@endsection