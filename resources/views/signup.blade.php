<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('signup')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/signup.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="signup" id="register-page">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <form action="" method="post">
                    @csrf
                    <h1 class="text-center">DAFTAR</h1>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control border-secondary" id="formGroupName"
                            placeholder="Nama Lengkap">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control border-secondary" id="formGroupEmail"
                            placeholder="Email">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control border-secondary"
                            id="formGroupPassword" placeholder="Kata Sandi">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-control border-secondary" id="formGroupConfirmPassword"
                            name="password_confirmation" placeholder="Konfirmasi Kata Sandi">
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Saya setuju dengan <a href="">terms and conditions</a>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="text-muted text-center">Daftar sebagai</div>
                        <br><br>
                        <div class="col-sm-6 text-center">
                            <button class="btn btn-primary border-secondary register-perusahaan">Perusahaan</button>
                        </div>
                        <div class="col-sm-6 text-center">
                            <button class="btn btn-info border-secondary register-user">Pengguna</button>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        Sudah memiliki akun? <a data-toggle="modal" href="#exampleModalCenter">Login</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade exampleModalCenter" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle">MASUK</h3>
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-7">
                            <form method="POST" action="{{ route('login') }}" id="regisForm">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-secondary"
                                        id="formGroupEmail2" placeholder="Email">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control border-secondary"
                                        id="formGroupPassword2" placeholder="Kata Sandi">
                                </div>
                                <br>
                                <div class="text-center">
                                    <button class="btn border-secondary btn-login">Login</button>
                                    <br><br>
                                    <p>Belum memiliki akun? <a href="{{url('/register')}}">SignUp</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @include('footer')
    <script>
        $('.register-perusahaan').on('click',function(){
   $('#register-page').find('#regisForm').attr('action',"/company/register")
  });  
        $('.register-user').on('click',function(){
   $('#register-page').find('#regisForm').attr('action',"/register")
  });
    </script>
</body>

</html>