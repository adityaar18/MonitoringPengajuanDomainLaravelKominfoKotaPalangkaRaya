@extends('layout.main')

@section('content')    
<div class="main-content">
				<div class="container-fluid">		
          <div class="row">
        
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_SitusWeb')}}"><i class="lnr lnr-home"></i> <span>Back to Data Domain AKtif </span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Edit Data Sub Domain Hosting</b></h3>
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
              <form action="{{ route('update_SubdomainHosting',['id' => $item->id])}}"  method="POST" >
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
            <label for="deskripsi" class="form-control-label">Deskripsi Barang</label>
                <textarea name="deskripsi" 
                          class="form-control @error('deskripsi') is-invalid @enderror" >{{ old('deskripsi') ?
                          old('deskripsi' ) : $item->deskripsi }}</textarea>       
            @error('deskripsi') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="spek_hosting" class="form-control-label">Nama Web / APlikasi</label>
                <select name="spek_hosting" 
                        class="form-control @error('spek_hosting') is-invalid @enderror ">
                        <option value="{{ $item->spek_hosting}}">{{$item->spek_hosting}}</option>
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
                <textarea name="catatan" 
                          placeholder="Catatan"
                          class="form-control @error('catatan') is-invalid @enderror" >{{ old('catatan') ?
                          old('catatan' ) : $item->catatan }}</textarea>       
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