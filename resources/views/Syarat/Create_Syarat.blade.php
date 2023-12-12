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
          <h3 class="page-title"><b>Tambah Data Syarat</b></h3>
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
              <form action="{{route('Simpan_Syarat')}}"  method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">    
                <label for="exampleFormControlSelect1">Nama Admin</label>            
                  <input type="text" class="form-control" name="admin" required placeholder="Nama Admin">
                  <div class="input-group-append">
                    <div class="input-group-text">                     
                    </div>
                  </div>
                </div>

                <div class="form-group">    
                <label for="exampleFormControlSelect1">Judul</label>            
                  <input type="text" class="form-control" name="judul" required placeholder="Judul">
                  <div class="input-group-append">
                    <div class="input-group-text">                     
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                <label for="exampleFormControlSelect1">Deskripsi </label>
                <textarea name="deskripsi" rows="5"
                          placeholder="....."
                          class="form-control @error('deskripsi') is-invalid @enderror" >{{ old('deskripsi')}}</textarea>       
                @error('deskripsi') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Prosedur </label>
                <textarea name="prosedur" rows="5"
                          placeholder="....."
                          class="form-control @error('prosedur') is-invalid @enderror" >{{ old('prosedur')}}</textarea>       
                @error('prosedur') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Syarat</label>
                <textarea name="syarat" rows="5"
                          placeholder="....."
                          class="form-control @error('syarat') is-invalid @enderror" >{{ old('syarat')}}</textarea>       
                @error('syarat') <div class="text-muted">{{$message}}</div> @enderror
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