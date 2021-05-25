<!DOCTYPE html>
<html>

<head>
    <title>@yield('cvuser')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/cvuser.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="row cv-photos">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <img class="img-fluid" src="{{('../images/foto.png')}}" alt="">
        </div>
        <div class="col-md-6">
            <br><br><br>
            <h4>HALLO!! SAYA <b>{{$cv->user->name}}</b></h4>
            <p class="text-muted">{{$cv->keahlian}}</p>
            <img src="{{('../images/instagram.png')}}" alt="">
            <img src="{{('../images/facebook.png')}}" alt="">
            <img src="{{('../images/twitter.png')}}" alt="">
        </div>
    </div>
    <div class="cv">
        <div class="row body-cv">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
                <br>
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="card-body-cv">
                        <h3 class="card-title">PENGALAMAN KERJA</h3>
                        <p class="card-text-cv">{{$cv->pengalamanKerja}}</p>
                        {{-- <p class="card-text-cv">Tokopedia</p> --}}
                        <p class="card-text-cv"><small
                                class="text-muted">{{$cv->tahunAwalKerja}}-{{$cv->tahunAkhirKerja}}</small></p>
                        <p class="card-text-cv">Responsibilities</p>
                        <p class="card-text-cv">{{$cv->deskripsiKerja}}</p>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="card-body-cv">
                        <h3 class="card-title">SKILL</h3>
                        <p class="card-text-cv">{{$cv->skill}}</p>
                        {{-- <p class="card-text-cv">FIGMA</p>
                        <p class="card-text-cv">Javascript</p>
                        <p class="card-text-cv">Laravel</p>
                        <p class="card-text-cv">PHP</p>
                        <p class="card-text-cv">HTML</p> --}}
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="card-body-cv">
                        <h3 class="card-title">EDUKASI</h3>
                        <p class="card-text-cv">{{$cv->edukasi}}</p>

                        <p class="card-text-cv"><small
                                class="text-muted">{{$cv->edukasiTahunAwal}}-{{$cv->edukasiTahunAkhir}}</small></p>
                        {{-- <p class="card-text-cv">Universitas Padjadjaran</p>
                        <p class="card-text-cv">S1 Teknik Informatika</p>
                        <p class="card-text-cv"><small class="text-muted">2018-Present</small></p>
                        <p class="card-text-cv">SMAN 90 Bandung</p>
                        <p class="card-text-cv">Sekolah Menengah Atas, IPA</p>
                        <p class="card-text-cv"><small class="text-muted">2015-2018</small></p> --}}
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{url('/company/lamaran')}}">

                        <button type="button" class="btn btn-light">Kembali</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>

</html>