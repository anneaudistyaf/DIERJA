<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pelatihan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/pelatihan.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <br>
    <div class="row home-kategori">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="text-center">Kategori</h1><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 card btn card-button ">
                            <div class="card-body text-center align-middle">
                                <img class="img-fluid" src="{{url('../images/programming.png')}}" alt=""><br>
                                <a href="#programming">Programming</a>
                            </div>
                        </div>
                        <div class=" col-md-4 card btn card-button">
                            <div class="card-body text-center align-middle">
                                <img class="img-fluid" src="{{url('../images/music.png')}}" alt=""><br>
                                <a href="#musik">Musik</a>
                            </div>
                        </div>
                        <div class="col-md-4 card btn card-button">
                            <div class="card-body text-center align-middle">
                                <img class="img-fluid" src="{{url('../images/cooking.png')}}" alt=""><br>
                                <a href="#cooking">Cooking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br><br>
    <div class="kategori-programming">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 table-responsive">
                <h3 id="programming">Programming</h3>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col-md-4">
                            <img src="{{url('../images/html.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">Basic</a>
                        </th>
                        <th scope="col-md-4">
                            <img src="{{url('../images/php.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">PHP</a>
                        </th>
                        <th scope="col-md-4">
                            <img src="{{url('../images/java.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">Java</a>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <br>
    <div class="kategori-musik">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 table-responsive">
                <h3 id="musik">Musik</h3>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col-md-4">
                            <img src="{{url('../images/piano.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">Piano</a>
                        </th>
                        <th scope="col-md-4">
                            <img src="{{url('../images/gitar.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">Gitar</a>
                        </th>
                        <th scope="col-md-4">
                            <img src="{{url('../images/bass.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">Bass</a>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="kategori-masak">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 table-responsive">
                <h3 id="cooking">Cooking</h3>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col-md-4">
                            <img src="{{url('../images/potong.png')}}" class="img-fluid" alt="">
                            <a href="{{url('../detailpelatihan')}}" class="text-center">Potong Bawang</a>
                        </th>
                        <th scope="col-md-4">
                            <img src="{{url('../images/potong.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">Potong Bawang</a>
                        </th>
                        <th scope="col-md-4">
                            <img src="{{url('../images/potong.png')}}" class="img-fluid" alt="">
                            <a href="" class="text-center">Potong Bawang</a>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <br><br>
    @include('footer')
</body>
</html>