@extends('layout.main')

@section('content')    
<div class="main-content">
				<div class="container-fluid">		
          <div class="row">
        
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_SitusWeb')}}"><i class="lnr lnr-home"></i> <span>Back to Data Domain Aktif </span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Edit Syarat Pengajuan</b></h3>
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
              <form action="{{ route('Update_Syarat',['id' => $item->id])}}"  method="POST" >
              @method('PUT')
                {{ csrf_field() }}

            <div class="form-group">
                <label for="admin" class="form-control-label">Nama Admin</label>
                <input type="text"
                       name="admin"
                       value="{{ old('admin') ? old('admin') : $item->admin }}"  
                       class="form-control @error('admin') is-invalid @enderror"/>

            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('admin') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            
            <div class="form-group">
                <label for="judul" class="form-control-label">Judul</label>
                <input type="text"
                       name="judul"
                       value="{{ old('judul') ? old('judul') : $item->judul }}"  
                       class="form-control @error('judul') is-invalid @enderror"/>
            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('judul') <div class="text-muted">{{$message}}</div> @enderror
            </div>


            <div class="form-group">
            <label for="deskripsi" class="form-control-label">Deskripsi</label>
                <textarea name="deskripsi" 
                          rows="5"
                          class="form-control @error('deskripsi') is-invalid @enderror" >{{ old('deskripsi') ?
                          old('deskripsi' ) : $item->deskripsi }}</textarea>       
            @error('deskripsi') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
            <label for="prosedur" class="form-control-label">Prosedur</label>
                <textarea name="prosedur" 
                          rows="5"
                          class="form-control @error('prosedur') is-invalid @enderror" >{{ old('prosedur') ?
                          old('prosedur' ) : $item->prosedur }}</textarea>       
            @error('prosedur') <div class="text-muted">{{$message}}</div> @enderror
            </div>

            <div class="form-group">
            <label for="syarat" class="form-control-label">Syarat</label>
                <textarea name="syarat" 
                          rows="5"
                          class="form-control @error('syarat') is-invalid @enderror" >{{ old('syarat') ?
                          old('syarat' ) : $item->syarat }}</textarea>       
            @error('syarat') <div class="text-muted">{{$message}}</div> @enderror
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