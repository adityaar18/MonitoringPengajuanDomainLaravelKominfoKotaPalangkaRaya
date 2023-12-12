@extends('layout.main')

@section('content')    
<div class="main-content">
				<div class="container-fluid">		
          <div class="row">
        
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_Pengajuan')}}"><i class="lnr lnr-home"></i> <span>Back to Data Pengajuan</span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Edit Data Pengajuan</b></h3>
                    </div>
          </div>	
       
					<div class="row">
						<div class="col-md-10">
    <div class="panel">
    <div class="panel-body">
    <!-- Main content -->
        <!-- Main content -->
        <div class="content">
      <div class="card card-info card-outline">
          <div class="card-header">
            
          </div>
          <div class="card-body">
              <form action="{{ route('update_pengajuan',['id' => $item->id])}}"  method="POST">
              @method('PUT')

                {{ csrf_field() }}
                <div class="form-group">
                <label for="instansi" class="form-control-label">Nama Perangkat Daerah</label>
                <input type="text"
                       name="instansi"
                       value="{{ old('instansi') ? old('instansi') : $item->instansi }}"  
                       class="form-control @error('instansi') is-invalid @enderror"/>

            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('instansi') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="kategori" class="form-control-label">Kategori</label>
    
                       <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                          <option value="Badan/Dinas/Kantor">Badan/Dinas/Kantor</option>
                          <option value="Kecamatan">Kecamatan</option>
                          <option value="Kelurahan">Kelurahan</option>
                          <option value="UPT">UPT</option>
                          <option value="RSUD">RSUD</option>
                      </select>

            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('kategori') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Permohonan</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="jenis_pemohon"  >
                          <option value="Sub_Domain_Web" @if($item ->jenis_pemohon == 'Sub_Domain_Web') selected @endif>
                              Nama Subdomain untuk Web Resmi Badan/Dinas/Kantor?KecKelurahan/UPT (Hosting Di Server Kominfo)</option>
                          <option value="Sub_Domain_dan_Hosting" @if($item ->jenis_pemohon == 'Sub_Domain_dan_Hosting') selected @endif>
                              Nama Subdomain dan Hosting untuk Aplikasi Resmi Badan/Dinas/Kantor/Kec/Kelurahan/UPT/(Hosting Di Server Kominfo)</option>
                          <option value="Sub_Domain_saja" @if($item ->jenis_pemohon == 'Sub_Domain_saja') selected @endif>
                              Nama Subdomain saja untuk Aplikasi Resmi Badan/Dinas/Kantor/Kec/Kelurahan/UPT/(Hosting Dikelola Sendiri)</option>
                          <option value="Pembuatan_Web/Aplikasi" @if($item ->jenis_pemohon == 'Pembuatan_Web/Aplikasi') selected @endif>Pembuatan Web / Aplikasi</option>
                      </select>
            </div>

            <div class="form-group">
                <label for="tgl_surat" class="form-control-label">Tanggal Surat</label>
                <input type="date"
                       name="tgl_surat"
                       value="{{ old('tgl_surat') ? old('tgl_surat') : $item->tgl_surat }}"  
                       class="form-control @error('tgl_surat') is-invalid @enderror"/>

            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('tgl_surat') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="no_surat" class="form-control-label">Nomor Surat</label>
                <input type="number"
                       name="no_surat"
                       value="{{ old('no_surat') ? old('no_surat') : $item->no_surat }}"  
                       class="form-control @error('no_surat') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('no_surat') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="nama_domain" class="form-control-label">Nama Domain</label>
                <input type="text"
                       name="nama_domain"
                       value="{{ old('nama_domain') ? old('nama_domain') : $item->nama_domain }}"  
                       class="form-control @error('nama_domain') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('nama_domain') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="nama_webapk" class="form-control-label">Nama Website / Aplikasi</label>
                <input type="text"
                       name="nama_webapk"
                       value="{{ old('nama_webapk') ? old('nama_webapk') : $item->nama_webapk }}"  
                       class="form-control @error('nama_webapk') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('nama_webapk') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="spk_hosting" class="form-control-label">Spesifikasi Hosting</label>
                <input type="text"
                       name="spk_hosting"
                       value="{{ old('spk_hosting') ? old('spk_hosting') : $item->spk_hosting }}"  
                       class="form-control @error('spk_hosting') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('spk_hosting') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
            <label for="dsk_webapk" class="form-control-label">Deskripsi Barang</label>
                <textarea name="dsk_webapk" 
                          class="form-control @error('dsk_webapk') is-invalid @enderror" >{{ old('dsk_webapk') ?
                          old('dsk_webapk' ) : $item->dsk_webapk }}</textarea>       
            @error('dsk_webapk') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="nama_pengaju" class="form-control-label">Nama Pengaju</label>
                <input type="text"
                       name="nama_pengaju"
                       value="{{ old('nama_pengaju') ? old('nama_pengaju') : $item->nama_pengaju }}"  
                       class="form-control @error('nama_pengaju') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('nama_pengaju') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="kontak" class="form-control-label">Nomor Telpon</label>
                <input type="text"
                       name="kontak"
                       value="{{ old('kontak') ? old('kontak') : $item->kontak }}"  
                       class="form-control @error('kontak') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('kontak') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input type="text"
                       name="email"
                       value="{{ old('email') ? old('email') : $item->email }}"  
                       class="form-control @error('email') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('email') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
                <label for="keterangan" class="form-control-label">Keterangan</label>
                <input type="text"
                       name="keterangan"
                       value="{{ old('keterangan') ? old('keterangan') : $item->keterangan }}"  
                       class="form-control @error('keterangan') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('keterangan') <div class="text-muted">{{$message}}</div> @enderror
            </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan Perubahan </button>
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