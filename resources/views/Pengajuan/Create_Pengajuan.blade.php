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
          <h3 class="page-title"><b>Tambah Data Pengajuan</b></h3>
                    </div>
          </div>	
          <div class="panel">
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
          
            <div class="row">
						<div class="col-md-14">
            
								<div class="panel-body">
                <div class="card-body">
              <form action="{{route('Simpan_Pengajuan')}}"  method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">    
                <label for="exampleFormControlSelect1">Nama Perangkat Daerah</label>            
                  <input type="text" class="form-control" name="instansi" required placeholder="Nama Perangkat Daerah">
                  <div class="input-group-append">
                    <div class="input-group-text">                     
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Ketegori Perangkat Derah</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kategori"  placeholder="Kategori Instansi">
                          <option value="Badan/Dinas/Kantor">Badan/Dinas/Kantor</option>
                          <option value="Kecamatan">Kecamatan</option>
                          <option value="Kelurahan">Kelurahan</option>
                          <option value="UPT">UPT</option>
                          <option value="RSUD">RSUD</option>
                      </select>
            </div>
            <div class="form-group">
                  <label for="jenis_permohonan">Jenis Permohonan</label>
                      <select class="form-control" id="jenis_permohonan" name="jenis_pemohon"  placeholder="Jenis Permohonan">
                          <option value="Sub_Domain_Web">1. Nama Subdomain untuk Web Resmi Badan/Dinas/Kantor/Kec/Kelurahan/UPT (Hosting Di Server Kominfo)</option>
                          <option value="Sub_Domain_dan_Hosting">2. Nama Subdomain dan Hosting untuk Aplikasi Resmi Badan/Dinas/Kantor/Kec/Kelurahan/UPT/(Hosting Di Server Kominfo)</option>
                          <option value="Sub_Domain_saja">3. Nama Subdomain saja untuk Aplikasi Resmi Badan/Dinas/Kantor/Kec/Kelurahan/UPT/(Hosting Dikelola Sendiri)</option>
                          <option value="Pembuatan_Web/Aplikasi">4.Pembuatan Web / Aplikasi</option>
                         
                      </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">No.Surat</label>
                  <input type="number" class="form-control" name="no_surat" required placeholder="No.Surat">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>
              
                <div class="form-group">
                <label for="exampleFormControlSelect1">Tanggal Surat</label>
                  <input type="date" class="form-control" name="tgl_surat" required placeholder="Tanggal Surat">
                  <div class="input-group-append">
                    <div class="input-group-text">   
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <label for="upload_surat" class="form-control-label">File Surat Permohnan(Format PDF) </label>
                <input type="file"
                       name="upload_surat"
                       value="{{ old('upload_surat')}}"  
                       accept="file/*"
                       required
                       class="form-control @error('upload_surat') is-invalid @enderror"/>
            @error('upload_surat') <div class="text-muted">{{$message}}</div> @enderror
            </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Sub Domain</label>
                  <input type="text" class="form-control" name="nama_domain"  placeholder="Hanya menuliskan nama domain saja tanpa palangkaraya.go.id" > 
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Website/Aplikasi</label>
                  <input type="text" class="form-control" name="nama_webapk" placeholder="Nama Website/Aplikasi">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Deskripsi Web/Aplikasi</label>
                <textarea name="dsk_webapk" rows="5"
                          placeholder="....."
                          class="form-control @error('dsk_webapk') is-invalid @enderror" >{{ old('dsk_webapk')}}</textarea>       
                @error('dsk_webapk') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                  <div class="jika-pilih-2">
                    <h4><b>Untuk jenis permohonan no.2</b></h4>
                    <label for="exampleFormControlSelect1">Spesifikasi Hosting</label>
                    <input type="text" class="form-control" name="spk_hosting" placeholder="Spesifikasi Hosting" disabled="disabled">
                    <div class="input-group-append">
                      <div class="input-group-text">  
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="jika-pilih-3">
                  <h4><b>Untuk jenis permohonan no.3</b></h4>
                <p>Nama layanan hosting yg dipakai</p>
                  <label for="exampleFormControlSelect1">Berikan Spesifikasi Hosting Yang Diinginkan</label>
                  <input type="text" class="form-control" name="hosting" placeholder="Hosting" disabled="disabled">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
              </div>
                </div>

                <div class="form-group">
                <div class="jika-pilih-3">
                <label for="exampleFormControlSelect1">Nama domain sendiri</label>
                  <input type="text" class="form-control" name="domain" placeholder="Domain" disabled="disabled">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
              </div>
 
                </div>

                <div class="form-group">
                <div class="jika-pilih-3">
                <label for="exampleFormControlSelect1">IP Address</label>
                  <input type="text" class="form-control" name="ip_address" placeholder="IP ADDRESS"  disabled="disabled">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
              </div>
                </div>

                <div class="form-group">
                <div class="jika-pilih-3">
                <label for="exampleFormControlSelect1">Metode</label>
                  <input type="text" class="form-control" name="metode" placeholder="Metode" disabled="disabled">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
              </div>
                </div>

                <div class="form-group">
                <div class="jika-pilih-4">
                <h4><b>Untuk jenis permohonan no.4</b></h4>
                <p>Berikan spesifikasi website/app yang di ingin kan </p>
                <label for="exampleFormControlSelect1">Spesifikasi WEB</label>
                  <input type="text" class="form-control" name="spek_webapp" placeholder="Spesifikasi WEB" disabled="disabled"> 
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
              </div>
                </div>


            <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Pengaju</label>
                  <input type="text" class="form-control" name="nama_pengaju" required placeholder="Nama Pengaju">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">No HP/WA</label>
                  <input type="number" class="form-control" name="kontak" required placeholder="Kontak Instansi">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Email Instansi</label>
                  <input type="text" class="form-control" name="email" required placeholder="Email Instansi">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>

                <div class="form-group">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
                @error('g-recaptcha-response')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                  
                </div>

              </form>
          </div>
        </div>
        </div>
		</div>
	</div>
	</div>
		</div>
      </div>
      </div>


   
@endsection