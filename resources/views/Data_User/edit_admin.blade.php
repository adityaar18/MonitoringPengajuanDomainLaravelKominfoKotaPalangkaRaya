@extends('layout.main')

@section('content')    
<div class="main-content">
				<div class="container-fluid">		
          <div class="row">
        
          <div class="col-lg-11 text-right col-md-2">
            <ul class="nav-right">
              <a href="{{route('Data_Admin')}}"><i class="lnr lnr-home"></i> <span>Back to Data Admin</span></a>
            </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <h3 class="page-title"><b>Edit Data Admin</b></h3>
                    </div>
          </div>	
       
					<div class="row">
						<div class="col-md-10">

    <!-- Main content -->
        <!-- Main content -->
        <div class="content">
      <div class="card card-info card-outline">
          <div class="card-header">
            
          </div>
          <div class="card-body">
              <form action="{{ route('update_admin',['id' => $item->id])}}"  method="POST">
              @method('PUT')

                {{ csrf_field() }}
                <div class="form-group">
                <label for="name" class="form-control-label">Nama Lengkap</label>
                <input type="text"
                       name="name"
                       value="{{ old('name') ? old('name') : $item->name }}"  
                       class="form-control @error('name') is-invalid @enderror"/>

            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('name') <div class="text-muted">{{$message}}</div> @enderror
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
                <label for="password" class="form-control-label">Password</label>
                <input type="text"
                       name="password"
                       value="{{ old('password') ? old('password') : $item->password }}"  
                       class="form-control @error('password') is-invalid @enderror"/>

            <!-- Berfungsi untuk memberikan pesan error kepada user -->
                @error('password') <div class="text-muted">{{$message}}</div> @enderror
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
        
       
       

@endsection