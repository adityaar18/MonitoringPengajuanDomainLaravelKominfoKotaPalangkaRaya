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
    <title>CETAK SUB DOMAIN WEB RESMI</title>
</head>
<body>
    <div class="from-group">
        <p align="center"><b> LAPORAN DATA SUB DOMAIN WEB RESMI </b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;" >
                    <tr>
                    <th scope="col">Tanggal Monotoring</th>
                        <th>Nama Perangkat Daerah</th>
                        <th>Kategori Instansi</th>
                        <th>Nama Sub-domain</th>
                        <th>Keterangan</th>
                        <th>Update Trakhir</th>
                        <th>Identitas/Logo</th>
                        <th>Profil</th>
                        <th>Kebijakan dan Prioritas</th>
                        <th>Layanan Publik</th>
                        <th>Kebijakan dan Produk Hukum</th>
                        <th>Pelaksanaan Program dan Kegiatan</th>
                        <th>Layanan Aspirasi</th>
                        <th>Kontak</th>
                        <th>catatan</th>

                    </tr>
                   
              <tbody>
              @foreach($items as $item)
              <tr>
              <td>{{$item->created_at}}</td>
                      <td>{{$item->nama_PerangkatDaerah}}</td>
                      <td>{{$item->kategori}}</td>
                      <td>{{$item->nama_subdomain}}</td>
                      <td>{{$item->keterangan}}</td>
                      <td>{{$item->update_terakhir}}</td>
                      <td>{{$item->identitas}}</td>
                      <td>{{$item->profil}}</td>
                      <td>{{$item->kebijakan}}</td>
                      <td>{{$item->l_publik}}</td>
                      <td>{{$item->kb_produkhukum}}</td>
                      <td>{{$item->pp_kegiatan}}</td>
                      <td>{{$item->l_aspirasi}}</td>
                      <td>{{$item->kontak}}</td>
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