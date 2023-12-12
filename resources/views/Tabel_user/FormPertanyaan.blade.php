@extends('layout.main')

@section('content')    

<div class="main-content">
	<div class="container-fluid">		
        <div class="row">
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('beranda')}}"><i class="lnr lnr-home"></i> <span>Back to Dashboard </span> Admin</a>
            </ul>
        </div> 
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>FORM PERTANYAAN</b></h3>
        </div>
     </div>	
   
	<div class="row">
	<div class="col-md-10">
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
          <div class="card-header">
            
          </div>
          <div class="card-body">
              <form action="{{route('simpan_formpertanyaan')}}"  method="POST" enctype="multipart/form-data">
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
                <label for="exampleFormControlSelect1">Nama Penanya</label>
                  <input type="text" class="form-control" name="nama_penanya" placeholder="Nama Pengaju">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Email Instansi</label>
                  <input type="text" class="form-control" name="email" placeholder="Email Instansi">
                  <div class="input-group-append">
                    <div class="input-group-text">  
                    </div>
                  </div>
                </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Pesan</label>
                <textarea name="pertanyaan" 
                          placeholder=""
                          class="form-control @error('pertanyaan') is-invalid @enderror" >{{ old('pertanyaan')}}</textarea>       
                @error('pertanyaan') <div class="text-muted">{{$message}}</div> @enderror
                </div>
        
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Submit</button>
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

@endsection