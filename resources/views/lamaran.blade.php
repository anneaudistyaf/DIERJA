<!DOCTYPE html>
<html>
    <head>
        <title>@yield('lamaran')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{url('../css/lamaran.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>

    <body>
        @include('navbar')
        <br>
        <div class="row lamaran">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h3>Pelamar Marketing</h3>
                <br>
                <div class="waiting">
                    <h5><u>Menunggu Konfirmasi</u></h5>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td>Dian Rahmawati</td>
                        </tr>
                        <tr>
                            <td>Disabilitas</td>
                            <td> : </td>
                            <td>Tuna Rungu</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>