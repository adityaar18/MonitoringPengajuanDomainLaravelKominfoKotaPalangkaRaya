@extends('layout_user.main')

@section('content')
<main>
    <div class="page-section pt-4">
      <div class="container">
        <nav aria-label="Breadcrumb">
        </nav>
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-single-wrap">
              <div class="post-thumbnail">
                <img src="../assets/img/bg_image_1.jpg" alt="">
              </div>
              @foreach ($items as $item)
              <h1 class="post-title">{{$item->judul}}</h1>
              <div class="post-meta">
                <div class="post-author">
                  <span class="text-grey">By</span> <a href="#">{{$item->admin}}</a>  
                </div>
               
              </div>
              <div class="post-content">
                <p>{{$item->deskripsi}}</p>
               <h2><b>Perosedur Pengajuan</b></h2>
                <p>
                    1. Melakuna Registrasi jika belum memiliki akun dan jika sudah memiliki akun dapat langsung <a href="{{route('login')}}">Login</a> <br>
                    2. Pemohon terlebih dahulu mengunduh dan mengisi formulir pada laman berikut:  
                    <a href="https://docs.google.com/document/d/1WO9sWsFsCtDAPfsEWVlJqjBIH0ObDkdr/edit?usp=sharing&ouid=104071413286947965632&rtpof=true&sd=true">Download file surat pengajuan</a> <br>
                    3. Formulir permohonan pengajuan subdomain website,hosting atau pembuatan Web/Aplikasi dan lampiran formulir dikirimkan melalui  
                    <a href="{{route('Create_Pengajuan')}}">form Pengajuan</a> dengan cara login ke akunnya tersebih dahulu. <br>
                    4. Mengisi Form Pengajuan Permohonan tersebut <br>
                    5. Konfirmasi balasan permohonan pengajuan subdomain website/ aplikasi tersebut apakah (disetujui/ditolak) akan disampaikan melalui Via Email <br>
                    6. Pengajuan Subdomain, hosting atau Pembuatan Web/Aplikasi  yang disetujui oleh Bidang Kominfo, akan ditindak lanjuti pembuatannya , setelah proses pembuatan subdomain website selesai akan diserahterimakan oleh
                      dinas kominfo kepada pihak pemohon.
                </p>
                <h2><b>Syarat dan Ketentuan</b></h2>
                <p>{{$item->syarat}}</p>
                   <p><b>Siapa yang dapat mengajukan subdomain website?</b></p>
                   <p>Yang dapat melakukan Pengajuan Sub Domain, Hosting atau Pembuatan Web/Aplikasi yaitu Badan/Dinas/Kantor/Kecamatan/Kelurahan/UPT/RSUD</p>
                
                
              </div>
            </div> <!-- .blog-single-wrap -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5"><b>Registrasi</b></h3>
              <form action="{{route('simpan_registrasi')}}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                <label for="name">Name *</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
                </div>
                <div class="form-row form-group">
                <div class="col-md-6">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control"  name="email" placeholder="Email" id="email">
                  </div>
                  <div class="col-md-6">
                    <label for="website">Password</label>
                    <input type="password" class="form-control"  name="password" placeholder="Password">
                  </div>   
                </div>
                 <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-primary">
                </div>
    
              </form>
            </div> <!-- .comment-form-wrap -->
        </div>
   </div>
        </div>
          
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
    @include('sweetalert::alert')
  </main>
 @endforeach
    @endsection