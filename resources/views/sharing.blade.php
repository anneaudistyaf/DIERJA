<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('sharing')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/sharing.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="home-sharing">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <img src="{{url('../images/sharing.png')}}" class="img-fluid" alt="">
                <br>
                @if(Auth::guard('web')->check())
                <a class="btn btn-primary btn-link" data-toggle="modal" href="#exampleModalCenter" role="button">Tulis
                    Pengalaman</a>
                @endif
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <br>
            <div class="card-columns">
                @foreach ($sharing as $item)
                <div class="card border-secondary">
                    <div class="row">

                        <div class="col-sm-2 text-center">
                            <img src="{{url('../images/profpic.png')}}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="card-body">
                                <h4 class="card-title">{{$item->user->name}}</h4>
                                <h6></h6>
                                <p class="text-muted">Data Analyst</p>
                                <div class="card border-secondary readmore">
                                    {!! \Illuminate\Support\Str::limit($item->konten,50,'')!!}
                                    @if (strlen($item->konten) > 50)
                                    <span id="dots">...</span>
                                    <span id="more">{!! substr($item->konten, 50) !!}</span>
                                    @endif
                                    <button class="myBtn" id="myBtn">Read more</button>
                                </div>
                                <i onclick="heart(this)" class="fa fa-heart-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br>
    <!-- Modal -->
    <div class="modal fade exampleModalCenter" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle"></h3>
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

                    <form action="{{route('user.post')}}" method="POST">
                        @csrf
                        {{-- <p>Tulis pengalamanmu disini...</p> --}}
                        <div class="form-group">
                            <label for="formGroupExampleInput">Judul</label>
                            <input type="text" name="judulSharing" class="form-control" id="formGroupExampleInput"
                                placeholder="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Konten</label>
                            <textarea name="isisharing" id="editor" cols="50" rows="10"></textarea>
                            <br>
                        </div>
                        <button class="btn btn-primary">Kirim</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <br>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<<<<<<< Updated upstream
  <script>
        function myFunction(x) {
          x.classList.toggle("fa-heartbeat");
        }
    </script>  
=======
    <script>
        function heart(x) {
          x.classList.toggle("fa-heartbeat");
        }
    </script>
    <script>
        $('.myBtn').on('click',function(){
                
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn") ;

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
    });
     

    </script>
>>>>>>> Stashed changes
</body>

</html>