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
          <h3 class="page-title"><b>Tambah Data Admin</b></h3>
                    </div>
          </div>	
       
					<div class="row">
						<div class="col-md-10">

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
      <div class="panel">
        <div class="row">
			<div class="col-md-14">
            <div class="panel-body">
          <div class="card-body">
              <form action="{{route('simpan_admin')}}"  method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Full name">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      
                    </div>
                  </div>
                </div>
              
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                     
                    </div>
                  </div>
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
				</div>
        
       
       

@endsection