<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>CETAK DATA PENGAJUAN</title>
</head>
<body>
    <div class="from-group">
        <p align="center"><b> LAPORAN DATA PENGAJUAN </b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;" >
                    <tr>
                        <th>Tangal/Waktu Pengajuan</th>
                        <th>Nama Perngkat Daerah</th>
                        <th>Kategori Perngkat Daerah</th>
                        <th>Jenis Permohonan</th>
                        <th>Nomor Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Nama Sub Domain</th>
                        <th>Nama Website/Aplikasi</th>
                        <th>Deskripsi</th>
                        <th>Spesifikasi Hosting</th>
                        <th>Hosting</th>
                        <th>Domain</th>
                        <th>IP Address</th>
                        <th>Metode</th>
                        <th>Spek Web/App</th>
                        <th>Nama Pengaju</th>
                        <th>No.Hp/WA Prangkat Daerah</th>
                        <th>Email</th>
                        <th>Keterangan</th>
                                               
                    </tr>
                    @foreach($items as $item)
              <tbody>
                    <tr>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->instansi}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->jenis_pemohon}}</td>
                      <td>{{$item->no_surat}}</td>
                      <td>{{$item->tgl_surat}}</td>
                      <td>{{$item->nama_domain}}</td>
                      <td>{{$item->nama_webapk}}</td>
                      <td>{{$item->dsk_webapk}}</td>
                      <td>{{$item->spk_hosting}}</td>
                      <td>{{$item->hosting}}</td>
                      <td>{{$item->domain}}</td>
                      <td>{{$item->ip_address}}</td>
                      <td>{{$item->metode}}</td>
                      <td>{{$item->nama_webapk}}</td>
                      <td>{{$item->nama_pengaju}}</td>
                      <td>{{$item->kontak}}</td>   
                      <td>{{$item->email}}</td>
                      <td> 
                                        @if($item->keterangan =='proses')
                                        <span class="badge rounded-pill bg-warning text-dark">
                                        @elseif($item->keterangan =='diterima')
                                        <span class="badge rounded-pill bg-success">
                                        @elseif($item->keterangan == 'ditolak')
                                        <span class="badge rounded-pill bg-danger">
                                        @else
                                        <span>
                                        @endif
                                            {{$item->keterangan}}
                                        </span>
                                        </td>
                        
                  @endforeach


        </table>
    </div>

    <!-- Agar ketika diklik print terotomatis ke download -->
    <script type="text/javascript">
      window.onload = function() { window.print(); }
    </script>

</body>
</html>