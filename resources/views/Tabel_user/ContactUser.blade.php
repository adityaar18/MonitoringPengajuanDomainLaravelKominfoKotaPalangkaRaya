@extends('layout_user.main')

@section('banner')
<div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(home/assets/img/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Contact</h1>
          </div>
        </div>
      </div>
    </div> 
@endsection

@section('content')
<div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Ajukan Pertanyaan </h2>
          <p>Diharapkan menggunakan akun Gmail anda <a href="mailto:example@mail.com">example@gmail.com</a></p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="{{route('simpan_formpertanyaan')}}"  method="POST" enctype="multipart/form-data" class="form-contact">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-sm-6 py-2">
                  <label for="name" class="fg-grey">Nama</label>
                  <input type="text" name="nama_penanya" required class="form-control" id="name" placeholder="Enter name..">
                </div>
                <div class="col-sm-6 py-2">
                  <label for="email" class="fg-grey">Email</label>
                  <input type="text" name="email" class="form-control" id="email" required placeholder="Email address..">
                </div>
                <div class="col-12 py-2">
                  <label for="subject" class="fg-grey">Nama Perangkat Daerah</label>
                  <input type="text" name="instansi" class="form-control" id="subject" placeholder="Badan/Dinas/Kantor/Kecamatan/Kelurahan/UPT/RSUD DLL">
                </div>
                <div class="col-12 py-2">
                  <label for="message" class="fg-grey">Pesan</label>
                  <textarea id="message" name="pertanyaan" rows="8" class="form-control" required placeholder="Enter message.."></textarea>
                </div>
                <div class="col-12 mt-3">
                  <button type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
    @endsection