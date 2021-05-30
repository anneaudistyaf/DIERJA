<!DOCTYPE html>
<html>

<head>
    <title>@yield('homepage')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
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
                <h1>{{$jobs->posisi}}</h1>
                @if (session('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success')}}
                </div>
                @elseif(session('failed'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ session('failed')}}
                </div>
                @endif
                <a href="{{route('detail.perusahaan',$jobs->company->company_id)}}">
                    <p>PT.{{$jobs->company->company_name}}</p>
                </a>
                <div class="row">
                    <div class="col-md-6">
                        <p><img class="img-fluid" src="{{url('../images/place.png')}}" alt="">{{$jobs->lokasi}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><img class="img-fluid" src="{{url('../images/clock.png')}}" alt="">{{$jobs->waktu}}</p>
                    </div>
                </div>
                <img class="img-fluid" src="{{url('../images/disabled.png')}}" alt="">{{$jobs->disabilitas}}</p>
                <img class="img-fluid" src="{{url('../images/marketing.png')}}">
                <br><br>
                <h5>Deskripsi dan Syarat</h5>
                <p>{{$jobs->jobs_description}}</p>
                @if(Auth::guard('web')->check())
                @if(empty($apply) )
                <form action="{{route('regis.lowongan',$jobs->jobs_id)}}" method="POST">
                    @csrf
                    <a href="">
                        <button class="btn btnlowongan btn-rounded btn-secondary" role="button"
                            aria-pressed="true">Kirim CV </button>
                    </a>
                </form>
                @elseif($apply->status == 0)
                <button class="btn btnlowongan btn-rounded btn-secondary" role="button" aria-pressed="true">Menunggu
                    Konfirmasi </button>
                @else

                @endif
                @endif
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
                        <img class="img-fluid" src="{{url('../images/berhasilcv.png')}}">
                        <br><br>
                        <h3>CV Berhasil Terkirim</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @include('footer')
    @if(session('success'))
    <script>
        $('#modalcv').modal('show');
        $('.btn-close').on('click',function(){
            $('#modalcv').modal('hide');
        });

    </script>
    @endif
</body>

</html>