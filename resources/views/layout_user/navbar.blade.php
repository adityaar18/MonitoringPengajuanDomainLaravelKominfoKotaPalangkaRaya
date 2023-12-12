<nav class="navbar navbar-expand-lg navbar-light" id="mainav" class="fl_right">
      <div class="container">
       <img src="{{asset('template/assets/img/kominfo.png')}}" alt="">
        <a href="/"  class="navbar-brand">Kominfo<span class="text-primary">Palangka Raya.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="{{ request()->is('/') ? 'active' : ''}}">
            <span class="lnr lnr-home"></span>
              <a href="/" class="nav-link">Home</a> 
            </li>
            <li class="{{ request()->is('#about') ? 'active' : ''}}">
              <a href="#about" class="nav-link">About</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#data" class="nav-link">Data</a>
            </li> -->
            <li class="nav-item dropdown" class="{{ request()->is('#navbarDropdown') ? 'active' : ''}}">
              <a class="nav-link dropdown-toggle" href="#navbarDropdown" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Monitoring
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" class="{{ request()->is('tabel_Pengajuan') ? 'active' : ''}}" href="{{route('tabel_Pengajuan')}}">Data Pengajuan</a></li>
                <li><a class="dropdown-item" href="{{route('tabel_webresmi')}}">Data Web Resmi</a></li>
                <li><a class="dropdown-item" href="{{route('tabel_subdomainhosting')}}">Data Aplikasi (Di dalam server Kominfo)</a></li>
                <li><a class="dropdown-item" href="{{route('tabel_subdomain')}}">Data Aplikasi (Di luar server Kominfo)</a></li>
                <li><a class="dropdown-item" href="{{route('tabel_pembuatanwebapk')}}">Data Pembuatan Website dan Aplikasi</a></li>
              </ul>
            </li>
            <li class="{{ request()->is('contact') ? 'active' : ''}}">
              <a href="{{route('contact')}}" class="nav-link">Contact</a>
            </li>
            <li class="{{ request()->is('login') ? 'active' : ''}}">
              <a href="{{route('login')}}" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
