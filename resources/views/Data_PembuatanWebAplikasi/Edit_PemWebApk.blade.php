@extends('layout.main')

@section('content')    
<div class="main-content">
				<div class="container-fluid">		
          <div class="row">
        
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_Subdomain')}}"><i class="lnr lnr-home"></i> <span>Back to Data Pembuatan Web /Aplikasi </span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Edit Data Pembuatan Web /Aplikasi</b></h3>
            </div>
        </div>	
       
	<div class="row">
	<div class="col-md-10">
    <div class="panel">
    <div class="panel-body">
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
          <div class="card-header">
            
          </div>
          <div class="card-body">
              <form action="{{ route('Update_PembuatanWebAplikasi',['id' => $item->id])}}"  method="POST" enctype="multipart/form-data">
              @method('PUT')
                {{ csrf_field() }}

            <div class="form-group">
                <label for="nama_PerangkatDaerah" class="form-control-label">Nama Perangkat Daerah</label>
                <select name="nama_PerangkatDaerah" 
                        class="form-control @error('nama_PerangkatDaerah') is-invalid @enderror ">
                        <option value="{{ $item->nama_PerangkatDaerah}}">{{$item->nama_PerangkatDaerah}}</option>
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
                        <option value="{{ $item->kategori}}">{{$item->kategori}}</option>
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
                        <option value="{{ $item->nama_subdomain}}">{{$item->nama_subdomain}}</option>
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
                        <option value="{{ $item->nama_WebAplikasi}}">{{$item->nama_WebAplikasi}}</option>
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->nama_webapk}}">{{$pj->nama_webapk}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('nama_WebAplikasi') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <textarea name="deskripsi" 
                          placeholder="Deskripsi"
                          class="ckeditor form-control @error('deskripsi') is-invalid @enderror" >{{ old('deskripsi') ? old('deskripsi') : $item->deskripsi}}</textarea>       
                @error('deskripsi') <div class="text-muted">{{$message}}</div> @enderror
                </div>

           <div class="form-group">
                <label for="spek_web" class="form-control-label">Nama Web / APlikasi</label>
                <select name="spek_web" 
                        class="form-control @error('spek_web') is-invalid @enderror ">
                        <option value="{{ $item->spek_web}}">{{$item->spek_web}}</option>
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->spek_webapp}}">{{$pj->spek_webapp}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('spek_web') <div class="text-muted">{{$message}}</div> @enderror
            </div>
    

            <div class="form-group">
                <label for="status" class="form-control-label">Versi Mobile</label>
                <input type="text"
                       name="status"  
                       value="{{ old('status') ? old('status') : $item->status}}"
                       class="form-control @error('status') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('status') <div class="text-muted">{{$message}}</div> @enderror
            </div>
           

            <div class="form-group">
            <label for="catatan" class="form-control-label">Catatan</label>
                <textarea name="catatan" 
                          placeholder="Catatan"
                          class="form-control @error('catatan') is-invalid @enderror" >{{ old('deskripsi') ? old('deskripsi') : $item->deskripsi}}</textarea>       
                @error('catatan') <div class="text-muted">{{$message}}</div> @enderror
                </div>

            <div class="form-group">
                <label for="data_dukung" class="form-control-label">Versi Mobile</label>
                <input type="text"
                       name="data_dukung"  
                       value="{{ old('data_dukung') ? old('data_dukung') : $item->data_dukung}}"
                       class="form-control @error('data_dukung') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('data_dukung') <div class="text-muted">{{$message}}</div> @enderror
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
        
       
       

@endsection