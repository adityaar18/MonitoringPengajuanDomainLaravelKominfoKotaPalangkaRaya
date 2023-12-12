
<table class="table table-bordered">
    <tr>
        <th>Nama Instansi</th>
        <td>{{ $item->instansi}}</td>
    </tr>

    <tr>
        <th>Kategori</th>
        <td>{{ $item->kategori}}</td>
    </tr>

    <tr>
        <th>Tanggal Surat</th>
        <td>{{ $item->tgl_surat}}</td>
    </tr>

    <tr>
        <th>No Surat</th>
        <td>{{ $item->no_surat}}</td>
    </tr>

    <tr>
        <th>Nama Domain</th>
        <td>{{ $item->nama_domain}}</td>
    </tr>

    <tr>
        <th>Nama Website/Aplikasi</th>
        <td>{{ $item->nama_webapk}}</td>
    </tr>
    <tr>
        <th>Spesifikasi Hosting</th>
        <td>{{ $item->spk_hosting}}</td>
    </tr>
    <tr>
        <th>Deskripsi Website</th>
        <td>{{ $item->dsk_webapk}}</td>
    </tr>
    <tr>
        <th>Nomor</th>
        <td>{{ $item->kontak}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $item->email}}</td>
    </tr>

      
</table>

<div class="row">
    <div class="col-1">
        <a href="{{route('Pengajuan_status', $item->id)}}?status=diterima"  class="btn btn-success btn-block">
            <i class="fa fa-chack"></i> set Diterima
        </a>
    </div>

    <div class="col-2">
        <a href="{{route('Pengajuan_status', $item->id)}}?status=ditolak"  class="btn btn-warning btn-block">
            <i class="fa fa-times"></i> set Ditolak
        </a>
    </div>

    <div class="col-3">
        <a href="{{route('Pengajuan_status', $item->id)}}?status=proses"  class="btn btn-info btn-block">
            <i class="fa fa-spinner"></i> set Diproses
        </a>
    </div>

</div>
