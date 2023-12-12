@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
<div class="main-content">
    <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-8">
            <h3 class="page-title"><b>Data Syarat</b></h3>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Dasboard</a></li>
                
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>			
	<div class="row">
	<!-- BORDERED TABLE -->
        <div class="panel"> 
        <div class="panel-heading">
                <div class="card-tools">
                  <a href="{{route('Create_Syarat')}}" class="btn btn-success"><i class="fas fa-plus-square"></i></a>
                  
              </div>               
	    </div>                     
			
    <div class="table-responsive">
		<div class="panel-body">
          <br>
			<table class="table table-bordered" id="datatables">
              <thead>
                    <tr>
                        <th>Nama Admin</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Prosedur</th>
                        <th>Syarat</th>
                        <th>Edit</th>                     
                    </tr>
            </thead>
                 
              <tbody>
                    @foreach($items as $item)
                    <tr>
                      <td>{{$item->admin}}</td>
                      <td>{{$item->judul}}</td>
                      <td>{{$item->deskripsi}}</td>
                      <td>{{$item->prosedur}}</td>
                      <td>{{$item->syarat}}</td>
                      
                        <td>
                        <!--Untuk Menu Edit -->
                         <a href="{{ route('Edit_Syarat', $item->id) }}" class="btn btn-primary btn-sm">
                                           <i class="fas fa-edit"></i>
                                       </a> 
                    
                        </td>
                        
                    </tr>
                    @endforeach
              </tbody>
                  

              </table>
               <!--Untuk memberikan link pembagi halaman tabel menjadi beberapa bagian  -->
         
                        </div> 
                    </div>
                     
                </div>
			    <!-- END BORDERED TABLE -->
						
						</div>
					</div>
				</div>
@endsection