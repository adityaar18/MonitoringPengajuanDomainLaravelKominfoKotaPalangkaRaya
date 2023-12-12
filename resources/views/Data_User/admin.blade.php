@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><b>Data Admin</b></h3>
					<div class="row">
						<div class="col-md-14">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
                <div class="card-tools">
                  <a href="{{route('create_admin')}}" class="btn btn-success"><i class="fas fa-plus-square"></i></a>
              </div>
								</div>
								<div class="panel-body">
									<table class="table table-bordered" id="datatables">
                  <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    </thead>

                  @foreach($items as $item)
              <tbody>
                    <tr>
                      <td>{{$item->name}}</td>
                      <td>{{$item->level}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->password}}</td>
                      <td>
              
                        <a href="{{ route('edit_admin', $item->id) }}"><button class="btn  btn-sm">
                        <i class="fas fa-edit" style="color:darkgreen ;"></i>
                        </button> </a> 
                       <!--Untuk Menu Hapus -->
                       
                       </td>
                       <td>
                                     <form action="{{ route('delete_admin', $item->id) }}" method="post" class="d-inline">
                                       @csrf <!-- berfungsi supaya saat pengiriman form tidak terjadi masalah -->
                                        @method('delete')
                                        <button class="btn  btn-sm">
                                        <i class="fas fa-trash-alt" darkgreen style="color: darkgreen ;"></i>
                                        </button>
                                        </form>
                      </td>
                    </tr>
              </tbody>
                  @endforeach

              </table>
              </div>
							</div>
							<!-- END BORDERED TABLE -->
						</div>
						</div>
					</div>
				</div>
@endsection