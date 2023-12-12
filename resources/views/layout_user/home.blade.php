@extends('layout_user.main')

@section('banner')
<div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
        <div class="hero-carousel-item">
            <img src="{{asset('home/assets/img/bg_image_3.jpg')}}" alt="">
            <div class="img-caption">
              <div class="subhead">Selamat Datang Di Website</div>
              <h1 class="mb-4"><b>Sistem Pengajuan Sub Domain Web Resmi Kota Palangka Raya</b></h1>
              <!-- <a href="#services" class="btn btn-primary">Read More</a> -->
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="{{asset('home/assets/img/bg_image_1.jpg')}}" alt="">
            <div class="img-caption">
              <div class="subhead"></div>
              <h1 class="mb-4"><b>Pengajuan Sub Domain WEB</b></h1>
              <!-- <a href="#services" class="btn btn-outline-light">Get Started</a> -->
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="{{asset('home/assets/img/bg_image_2.jpg')}}" alt="">
            <div class="img-caption">
              <h1 class="mb-4"><b>Pengajuan Sub Domain dan Hosting</b></h1>
              <!-- <a href="#services" class="btn btn-outline-light">Get Started</a>
              <a href="#services" class="btn btn-primary">See Pricing</a> -->
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="{{asset('home/assets/img/bg_image_3.jpg')}}" alt="">
            <div class="img-caption">
              <div class="subhead">Kirimkan Pengajuan Domain dan Sub Domain Website dan Aplikasi anda</div>
              <h1 class="mb-4"><b> Pengajuan Sub Domain </b></h1>
              <!-- <a href="#services" class="btn btn-primary">Read More</a> -->
            </div>
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div>
@endsection

@section('content')
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3" id="about">
            <div class="subhead">About Us</div>
            <h2 class="title-section"> Pengajuan Sub Domain, Hosting atau Pembuatan Web/ Aplikasi</h2>

            <p>Nama domain instansi pemerintahan telah diatur dalam Peraturan Menteri KOMINFO RI Nomor 5 Tahun 2015 Tentang Registrar Nama Domain Instansi 
              Penyelenggara Negara, dan untuk lingkup Pemerintah Kota Palangka Raya telah memiliki domain resmi, maka bagi Perangkat Daerah 
              di lingkungan Pemerintah Kota Palu yang akan membuat/membangun website atau aplikasi sistem informasi berbasis web dapat mengajukan 
              permohonan subdomain, hosting dan web/aplikasi kepada Dinas KOMINFO Kota Palangka Raya </p>

            <a href="{{route('syarat')}}" class="btn btn-primary mt-4">Daftar Sub Domain</a>

          </div>
          <div class="col-lg-6 py-3">
            <div class="about-img">
              <img src="{{asset('home/assets/img/about.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section" id="data">
      <div class="container">
        <div class="text-center">
          <div class="subhead">Fitur</div>
          <h2 class="title-section">Data Website dan Aplikasi Resmi Kota Palangka Raya</h2>
        </div>

        <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-3">
                <img src="{{asset('home/assets/img/icons/customer_services.svg')}}" alt="">
              </div>
              <a href="{{route('tabel_Pengajuan')}}"><h5>Data Pengajuan</h5></a>  
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-3">
                <img src="{{asset('home/assets/img/icons/web_development.svg')}}" alt="">               
              </div>
              <a href="{{route('tabel_webresmi')}}"><h5> Data Web Resmi</h5></a> 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-3">
                <img src="{{asset('home/assets/img/icons/graphics_design.svg')}}" alt="">
              </div>
              <a href="{{route('tabel_subdomainhosting')}}"><h5>Data Aplikasi Resmi</h5> <p> (di dalam server kominfo )</p></a> 
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-3">
                <img src="{{asset('home/assets/img/icons/seo_and_marketing.svg')}}" alt="">
              </div>
             <a href="{{route('tabel_subdomain')}}"><h5>Data Aplikasi Resmi</h5> <p> (di luar server kominfo )</p></a> 
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-3">
                <img src="{{asset('home/assets/img/icons/data_analyst.svg')}}" alt="">
              </div>
              <a href="{{route('tabel_pembuatanwebapk')}}"><h5> Data Pembuatan Website dan Aplikasi</h5></a> 
            </div>
          </div>

         

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

  
    @endsection