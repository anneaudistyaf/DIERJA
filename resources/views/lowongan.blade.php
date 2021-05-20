<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('lowongan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/lowongan.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="row home-lowongan">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <img src="{{url('../images/lowongan.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-md-1"></div>
    </div>
    <br><br>
    <div class="row barislowongan">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                @foreach ($jobs as $item)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-center">
                            {{$item->posisi}}
                        </div>
                        <div class="card-body">
                            <p class="card-title"> <img src="{{url('../images/place.png')}}" alt=""> {{$item->lokasi}}
                            </p>
                            <p class="card-title"> <img src="{{url('../images/clock.png')}}" alt=""> {{$item->waktu}}
                            </p>
                            <p class="card-text"> {{$item->Deskripsi}}
                            </p>
                            <p class="card-title"> <img src="{{url('../images/disabled.png')}}" alt="">
                                {{$item->disabilitas}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{route('detail.lowongan',$item->id)}}">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <br><br>
    @include('footer')
</body>

</html>