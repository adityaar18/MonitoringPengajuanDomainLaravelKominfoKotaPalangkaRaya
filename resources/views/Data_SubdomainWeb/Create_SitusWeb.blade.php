@extends('layout.main')

@section('content')  

<div class="main-content">
	<div class="container-fluid">	
        <div class="row">
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_SitusWeb')}}"><i class="lnr lnr-home"></i> <span>Back to Data Sub Domain Web </span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Pengecekan Keaktifan Domain dan Subdomain</b></h3>
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
        <form action="{{route('simpan_data')}}"  method="POST" enctype="multipart/form-data">
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
                  <input type="date" class="form-control" name="update_terakhir" required placeholder="update_terakhir">
                  <div class="input-group-append">
                    <div class="input-group-text">   
                    </div>
                  </div>
                </div>

            <div class="form-group">
                  <label for="exampleFormControlSelect1">Identitas</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="identitas" required  placeholder="identitas">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>

            <div class="form-group">
                  <label for="exampleFormControlSelect1">Profile</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="profil" required  placeholder="profil">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Kebijakan</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kebijakan" required  placeholder="kebijakan">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Layanan Publik</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="l_publik" required  placeholder="l_publik">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Kebijakan dan Produk Hukum</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kb_produkhukum" required placeholder="kb_produkhukum">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Pelaksanaan Program dan Kegiatan</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="pp_kegiatan" required  placeholder="pp_kegiatan">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Layanan Aspirasi</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="l_aspirasi" required  placeholder="l_aspirasi">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Kontak Situs Web</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kontak" required  placeholder="kontak">
                          <option value="ada">Ada</option>
                          <option value="tidak-ada">Tidak Ada</option>
                      </select>
            </div>

            <div class="form-group">
                <textarea name="catatan" 
                          placeholder="Catatan" required
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