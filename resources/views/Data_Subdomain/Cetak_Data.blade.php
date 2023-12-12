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
    <title>CETAK DATA SUB DOMAIN WEB/APLIKASI RESMI DI LUAR SERVER KOMINFO</title>
</head>
<body>
    <div class="from-group">
        <p align="center"><b> LAPORAN DATA SUB DOMAIN WEB/APLIKASI RESMI DI LUAR SERVER KOMINFO</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;" >
                    <tr>
                    <th>Tanggal Monitoring</th>
                        <th>Nama Perangkat Daerah</th>
                        <th>Kategori Instansi</th>
                        <th>Nama Sub Domain</th>
                        <th>Nama Web/Aplikasi</th>
                        <th>Deskripsi Web/Aplikasi</th>
                        <th>Hosting</th>
                        <th>Domain</th>
                        <th>IP Address</th>
                        <th>Metode</th>
                        <th>Keterangan</th>
                        <th>Update Terakhir</th>
                        <th>Versi Mobile</th>
                        <th>Catatan</th>
                       
                    </tr>
                    @foreach($items as $item)
              <tbody>
              <tr>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->nama_PerangkatDaerah}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->nama_subdomain}}</td>
                      <td>{{$item->nama_WebAplikasi}}</td>
                      <td>{{$item->deskripsi}}</td>
                      <td>{{$item->hosting}}</td>
                      <td>{{$item->domain}}</td>
                      <td>{{$item->ip_address}}</td>
                      <td>{{$item->metode}}</td>
                      <td>{{$item->keterangan}}</td>
                      <td>{{$item->updated_at}}</td>
                      <td>{{$item->versi_mobile}}</td>
                      <td>{{$item->catatan}}</td>
                      
            </tr>
              </tbody>    
                  @endforeach


        </table>
    </div>

    <!-- Agar ketika diklik print terotomatis ke download -->
    <script type="text/javascript">
      window.onload = function() { window.print(); }
    </script>

</body>
</html>