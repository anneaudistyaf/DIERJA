<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('loginadmin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/signup.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br><br>
    <div class="row login-admin">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <h1 class="text-center">Masuk Admin</h1>
            <br>
            <form method="POST" action="#" id="">
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
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <img class="img-fluid" src="{{url('../images/admin.png')}}" alt="">
        </div>
    </div>
    <br>
    <@include('footer')