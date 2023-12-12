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
    <title>CETAK DATA PROGRESS PENGEMBANGAN APLIKASI YANG DI KELOLA KOMINFO</title>
</head>
<body>
    <div class="from-group">
        <p align="center"><b> LAPORAN DATA PROGRESS PENGEMBANGAN APLIKASI YANG DI KELOLA KOMINFO</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;" >
                    <tr>
                    <th>Tanggal Pencatatan Progres</th>
                        <th>Nama Perangkat Daerah</th>
                        <th>Kategori Instansi</th>
                        <th>Nama Sub Domain</th>
                        <th>Nama Web/Aplikasi</th>
                        <th>Deskripsi Web/Aplikasi</th>
                        <th>Spek_Web/Aplikasi</th>
                        <th>Status</th>
                        <th>Catatan</th>
                        <th>Data Dukung</th>
                       
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
                      <td>{{$item->spek_web}}</td>
                      <td>{{$item->status}}</td>
                      <td>{{$item->catatan}}</td>
                      <td>{{$item->data_dukung}}</td>
                      
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