<!DOCTYPE html>
<html>

<head>
  <title>@yield('homepage')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" type="text/css" href="{{url('../css/homepage.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  @include('navbar')
  <br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 imghome">
      <img src="{{url('../images/home-pic6.png')}}" class="img-fluid" alt="">
    </div>
    <div class="col-md-1"></div>
  </div>
  <br><br>
  <div class="lowongan-home">
    <h1>Cari Pekerjaan Sesuai Keahlianmu </h1> <br>
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">


        <div class="row">
          @foreach ($jobs as $item)
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header text-center">
                {{$item->posisi}}
              </div>
              <div class="card-body">
                <p class="card-title"> <img class="img-fluid" src="{{url('../images/place.png')}}" alt="">
                  {{$item->lokasi}}
                </p>
                <p class="card-title"> <img class="img-fluid" src="{{url('../images/clock.png')}}" alt="">
                  {{$item->waktu}}
                </p>
                <p class="card-text"> {{$item->Deskripsi}}
                </p>
                <p class="card-title"> <img class="img-fluid" src="{{url('../images/disabled.png')}}" alt="">
                  {{$item->disabilitas}}</p>
              </div>
              <div class="card-footer text-center">
                <a href="{{route('detail.lowongan',$item->jobs_id)}}">Detail</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      <div class="col-md-2">

      </div>
    </div>
    <br>
    <div class="text-center">
      <a href="{{route('lowongan')}}" class="btn btnlowongan btn-rounded btn-secondary" role="button"
        aria-pressed="true">Lihat Lowongan</a>
    </div>
  </div>
  <br><br><br>
  <div class="pelatihan-home">
    <h1>Asah keahlianmu dengan mengikuti pelatihan</h1>
    <br>
    <div class="row">
      <div class="col-sm-1">

      </div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-4">
            <figure class="figure">
              <img src="{{url('../images/cook.png')}}" class="figure-img img-fluid rounded" alt="">
              <figcaption class="figure-caption">Memasak</figcaption>
            </figure>
          </div>
          <div class="col-4">
            <figure class="figure">
              <img src="{{url('../images/cook.png')}}" class="figure-img img-fluid rounded" alt="">
              <figcaption class="figure-caption">Memasak</figcaption>
            </figure>
          </div>
          <div class="col-4">
            <figure class="figure">
              <img src="{{url('../images/cook.png')}}" class="figure-img img-fluid rounded" alt="">
              <figcaption class="figure-caption">Memasak</figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-sm-1">

      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">

      </div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-4">
            <figure class="figure">
              <img src="{{url('../images/programmer.png')}}" class="figure-img img-fluid rounded" alt="">
              <figcaption class="figure-caption">Programming</figcaption>
            </figure>
          </div>
          <div class="col-4">
            <figure class="figure">
              <img src="{{url('../images/programmer.png')}}" class="figure-img img-fluid rounded" alt="">
              <figcaption class="figure-caption">Programming</figcaption>
            </figure>
          </div>
          <div class="col-4">
            <figure class="figure">
              <img src="{{url('../images/programmer.png')}}" class="figure-img img-fluid rounded" alt="">
              <figcaption class="figure-caption">Programming</figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-sm-1">

      </div>
    </div>
    <br>
    <div class="text-center">
      <button type="button" class="btn btnpelatihan btn-rounded btn-secondary">Mulai Pelatihan</button>
    </div>
  </div>
  <br>
  <div class="sharing-home">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <h1>Sharing Pengalaman</h1>
        <br>
        @foreach ($sharing as $item)
        <div class="card-columns">
          <div class="card border-secondary">
            <div class="row">
              <div class="col-sm-2 text-center">
                {{-- <img class="img-fluid" src="{{url('../images/profpic.png')}}" alt=""> --}}
              </div>
              <div class="col-sm-10">

                <div class="card-body">
                  <h4 class="card-title">{{$item->user->name}}</h4>
                  <h6>{{$item->user->disabilitas}}</h6>
                  <p class="text-muted">Data Analyst</p>
                  <p class="card border-secondary">{{$item->konten}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <br>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
  <br>
  @include("footer")
  <script type="text/javascript">
    @if(session('success'))
          $('#exampleModalCenter').modal('show');
          @endif
    @if(session('error'))
          $('#exampleModalCenter').modal('show');
          @endif
  </script>
</body>

</html>