<!DOCTYPE html>
<html>
    <head>
        <title>@yield('homepage')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{url('../css/detaillowongan.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>

    <body>
        @include('navbar')
<br><br>
        <div class="detail-lowongan">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <h1>Marketing</h1>
                        <p>PT. INDOFOOD</p>
                        <div class="row">
                            <div class="col-md-6">
                                <p><img src="{{url('../images/place.png')}}" alt="">Jakarta Barat</p>
                            </div>
                            <div class="col-md-6">
                                <p><img src="{{url('../images/clock.png')}}" alt="">Full-Time</p>
                            </div>
                        </div>
                        <img src="{{url('../images/disabled.png')}}" alt="">Tuna Netra, Lumpuh </p>
                        <img src="{{url('../images/marketing.png')}}">
                        <br><br>
                        <h5>Deskripsi dan Syarat</h5>
                        <p>Lorem ipsum Lorem ipsum Lorem Lorem ipsum Lorem ipsum Lorem
                            Lorem ipsum. Lorem ipsum Lorem ipsum Lorem
                            Lorem ipsum Lorem ipsum Lorem
                            Lorem ipsum.Lorem ipsum Lorem ipsum Lorem
                            Lorem ipsum Lorem ipsum Lorem
                            Lorem ipsum.</p> 
                        <a href="#modalcv" class="btn btnlowongan btn-rounded btn-secondary" data-bs-toggle="modal" data-bs-target="#modalcv" role="button" aria-pressed="true">Kirim CV</a>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="modal" id="modalcv" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{url('../images/berhasilcv.png')}}">
                            <br><br>
                            <h3>CV Berhasil Terkirim</h3>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
<br><br>
        @include('footer')
    </body>

</html>