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
          <h3 class="page-title"><b>Edit Keaktifan Domain dan Subdomain</b></h3>
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
              <form action="{{ route('update_situsweb',['id' => $item->id])}}"  method="POST" >
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
                  value="{{ old('update_terakhir') ? old('update_terakhir') : $item->update_terakhir}}"
                  name="update_terakhir" placeholder="update_terakhir">
                  <div class="input-group-append">
                    <div class="input-group-text">   
                    </div>
                  </div>
                </div>
             
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Identitas</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="identitas"  placeholder="identitas">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                          <option value="ada" @if($item ->identitas == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->identitas == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>

            <div class="form-group">
                  <label for="exampleFormControlSelect1">Profile</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="profil"  placeholder="profil">
                          <option value="ada" @if($item ->profil == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->profil == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Kebijakan</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kebijakan"  placeholder="kebijakan">
                          <option value="ada" @if($item ->kebijakan == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->kebijakan == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Layanan Publik</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="l_publik"  placeholder="l_publik">
                          <option value="ada" @if($item ->l_publik == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->l_publik == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Kebijakan dan Produk Hukum</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kb_produkhukum"  placeholder="kb_produkhukum">
                          <option value="ada" @if($item ->kb_produkhukum == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->kb_produkhukum == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Pelaksanaan Program dan Kegiatan</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="pp_kegiatan"  placeholder="pp_kegiatan">
                          <option value="ada" @if($item ->pp_kegiatan == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->pp_kegiatan == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Layanan Aspirasi</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="l_aspirasi"  placeholder="l_aspirasi">
                          <option value="ada" @if($item ->l_aspirasi == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->l_aspirasi == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Kontak Situs Web</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kontak"  placeholder="kontak">
                          <option value="ada" @if($item ->l_aspirasi == 'ada ') selected @endif>Ada</option>
                          <option value="tidak-ada" @if($item ->l_aspirasi == 'tidak-ada') selected @endif>Tidak Ada</option>
                      </select>
            </div>

            <div class="form-group">
                <label for="catatan" class="form-control-label">Catatan</label>
                <input type="text"
                       name="catatan"
                       value="{{ old('catatan') ? old('catatan') : $item->catatan }}"  
                       class="form-control @error('catatan') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
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