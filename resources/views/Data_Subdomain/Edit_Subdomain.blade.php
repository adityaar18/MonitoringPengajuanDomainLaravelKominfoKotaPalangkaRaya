@extends('layout.main')

@section('content')    
<div class="main-content">
				<div class="container-fluid">		
          <div class="row">
        
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_Subdomain')}}"><i class="lnr lnr-home"></i> <span>Back to Data Subdomain </span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Edit Data Sub Domain Saja</b></h3>
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
              <form action="{{ route('Update_Subdomain',['id' => $item->id])}}"  method="POST" enctype="multipart/form-data">
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
                          class="form-control @error('deskripsi') is-invalid @enderror" >{{ old('deskripsi') ? old('deskripsi') : $item->deskripsi}}</textarea>       
                @error('deskripsi') <div class="text-muted">{{$message}}</div> @enderror
                </div>

            <div class="form-group">
                <label for="hosting" class="form-control-label">Hosting</label>
                <select name="hosting" 
                        class="form-control @error('hosting') is-invalid @enderror ">
                        <option value="{{ $item->hosting}}">{{$item->hosting}}</option>
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->hosting}}">{{$pj->hosting}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('hosting') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="domain" class="form-control-label">Domain</label>
                <select name="domain" 
                        class="form-control @error('domain') is-invalid @enderror ">
                        <option value="{{ $item->domain}}">{{$item->domain}}</option>
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->domain}}">{{$pj->domain}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('domain') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="ip_address" class="form-control-label">IP ADDRESS</label>
                <select name="ip_address" 
                        class="form-control @error('ip_address') is-invalid @enderror ">
                        <option value="{{ $item->ip_address}}">{{$item->ip_address}}</option>
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->ip_address}}">{{$pj->ip_address}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('ip_address') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="metode" class="form-control-label">Metode</label>
                <select name="metode" 
                        class="form-control @error('metode') is-invalid @enderror ">
                        <option value="{{ $item->ip_address}}">{{$item->ip_address}}</option>
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->metode}}">{{$pj->metode}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('metode') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="keterangan" class="form-control-label">Keterangan</label>
                <select name="keterangan" 
                        class="form-control @error('keterangan') is-invalid @enderror ">
                        <option value="{{ $item->keterangan}}">{{$item->keterangan}}</option>
                    @foreach ($pengajuan as $pj)
                        <option value="{{ $pj->keterangan }}">{{$pj->keterangan}}</option>
                     @endforeach
                    </select>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
            @error('keterangan') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
            <label for="exampleFormControlSelect1">Update Trakhir</label>
                  <input type="date" class="form-control" 
                  value="{{ old('update_web') ? old('update_web') : $item->update_web}}"
                  name="update_web" placeholder="update_web">
                  <div class="input-group-append">
                    <div class="input-group-text">   
                    </div>
                  </div>
                </div>

            <div class="form-group">
                <label for="versi_mobile" class="form-control-label">Versi Mobile</label>
                <input type="text"
                       name="versi_mobile"  
                       value="{{ old('versi_mobile') ? old('versi_mobile') : $item->versi_mobile}}"
                       class="form-control @error('versi_mobile') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('versi_mobile') <div class="text-muted">{{$message}}</div> @enderror
            </div>
           

            <div class="form-group">
            <label for="exampleFormControlSelect1">Catatan</label>
                <textarea name="catatan" 
                          placeholder="Catatan"
                         
                          class="form-control @error('catatan') is-invalid @enderror" >{{ old('catatan') ? old('catatan') : $item->catatan}}</textarea>       
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
        
       
       

@endsection