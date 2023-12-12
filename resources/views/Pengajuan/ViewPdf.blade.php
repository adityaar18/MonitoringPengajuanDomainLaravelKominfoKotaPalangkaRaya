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
    <title>CETAK DATA</title>
</head>
<body>
    <div class="from-group" align="center">
     
        <iframe src="/assets/{{$data->upload_surat}}" height="1000" width="1000"  ></iframe>
    </div>
    <a href="{{route('Data_Pengajuan')}}">Back To Data Pengajuan</a>

    <!-- Agar ketika diklik print terotomatis ke download -->
    <script type="text/javascript">
      window.onload = function() { window.print(); }
    </script>

</body>
</html>