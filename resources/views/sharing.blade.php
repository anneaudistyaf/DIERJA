<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('sharing')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
		integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
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
                <a class="btn btn-primary btn-link" data-bs-toggle="modal" href="#exampleModalCenter" role="button">Tulis
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
            @if (session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('success')}}
            </div>
            @endif
            <div class="card-columns">
                @foreach ($sharing as $item)
                <div class="card border-secondary">
                    <div class="row">

                        <div class="col-sm-2 text-center">
                            <img class="img-fluid" src="{{url('../profileImage/',)}}" alt="">
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
                            <textarea type="text" name="isisharing" id="editor" cols="50" rows="10"></textarea>
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
</body>

</html>