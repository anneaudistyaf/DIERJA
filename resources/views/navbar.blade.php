<!DOCTYPE html>
<html>

<head>
	<title>Navbar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{url('../css/navbar.css')}}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Adamina&display=swap" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img class="img-fluid" src="{{ url('../images/Logo.png')}}">
			</a>
			<button class="navbar-dark navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					@if(Auth::guard('company')->check())
					<li class="nav-item">
						<a class="nav-link"
							href="{{url('/company/profile-perusahaan',Auth::guard('company')->user()->company_id)}}">Profile</a>
					</li>
					@elseif(Auth::guard('web')->check())
					<li class="nav-item">
						<a class="nav-link" href="{{route('profile',Auth::id())}}">Profile</a>
					</li>

					@endif
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('lowongan')}}">Lowongan</a>
					</li>
					@if(!Auth::guard('company')->check())
					<li class="nav-item">
						<a class="nav-link" href="{{route('sharing')}}">Sharing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('pelatihan')}}">Pelatihan</a>
					</li>
				</ul>
					@endif
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-right">
					@if(Auth::guard('web')->check())
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Dian
						</a>
						<ul class="dropdown-menu dropdown-start" aria-labelledby="navbarDropdownMenuLink">
						  <li><a class="dropdown-item" href="#">Profile</a></li>
						  <li><a class="dropdown-item" href="{{ route ('logout')}}">Logout</a></li>
						</ul>
					</li>
					@elseif(Auth::guard('company')->check())
					<li class="nav-item">
						<a class="nav-link" href="{{ route ('company.logout')}}">Logout</a>
					</li>
					@else
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						  Masuk
						</a>
						<ul class="dropdown-menu dropdown-start" aria-labelledby="navbarDropdownMenuLink">
						  <li><a class="dropdown-item" href="{{ url('User/register')}}">User</a></li>
						  <li><a class="dropdown-item" href="{{route('loginadmin')}}">Admin</a></li>
						</ul>
					</li>
					@endif
				</ul>

			</div>
		</div>
	</nav>
</body>

</html>