<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('signup')</title>
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
                <form action="{{route('company.register')}}" method="post">
                    @csrf
                    <h1 class="text-center">DAFTAR</h1>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control border-secondary" id="formGroupName"
                            placeholder="Nama Lengkap">
                        @if( $errors->first('name'))
                        <div class="alert-danger">{{ $errors->first('name')}}</div>
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control border-secondary" id="formGroupEmail"
                            placeholder="Email">
                        @if( $errors->first('email'))
                        <div class="alert-danger">{{ $errors->first('email')}}</div>
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control border-secondary"
                            id="formGroupPassword" placeholder="Kata Sandi">
                        @if( $errors->first('password'))
                        <div class="alert-danger">{{ $errors->first('password')}}</div>
                        @endif
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

                        <div class="col-sm-12 text-center">
                            <button class="btn btn-info border-secondary register-perusahaan">Register</button>
                        </div>

                    </div>
                    <br>
                    <div class="text-center">
                        Sudah memiliki akun? <a data-toggle="modal" id="login" href="#exampleModalCenter">Login</a>
                    </div>
                </form>
                <div class="row">
                    <div class="text-muted text-center">Daftar pengguna</div>
                    <br><br>
                    <div class="col-sm-12 text-center">
                        <a href="{{url('User/register')}}">
                            <button class="btn btn-primary border-secondary register-perusahaan">pengguna</button>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        id="modal-login" aria-hidden="true">
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
                            @if( session('error'))
                            <div class="alert-danger">Email and/or password invalid.</div>
                            @endif
                            <form method="POST" action="{{route('company.loginAction')}}" id="regisLogin">
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
                                    <p>Belum memiliki akun? <a href="{{url('/company/register')}}">SignUp</a></p>
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
    @if(session('error'))
    <script>
        $(function() {
    $('#modal-login').modal('show');
});
    </script>
    @endif
    <script>
        $('#login').on('click',function(){
   $('#modal-login').modal('show')
  });  
//         $('.register-user').on('click',function(){
//    $('#register-page').find('#regisForm').attr('action',"/register")
//   });
//         $('.register-perusahaan').on('click',function(){
//    $('#register-page').find('#regisForm').attr('action',"/company/register")
//   });  
//         $('.register-user').on('click',function(){
//    $('#register-page').find('#regisForm').attr('action',"/register")
//   });
    </script>
</body>

</html>