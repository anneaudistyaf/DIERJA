<!DOCTYPE html>
<html>

<head>
	<title>Navbar</title>
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
	<link rel="stylesheet" type="text/css" href="{{url('../css/navbar.css')}}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Adamina&display=swap" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="{{ url('../images/Logo.png')}}">
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
						<a class="nav-link" href="{{url('/pelatihan')}}">Pelatihan</a>
					</li>
					@endif
					@if(Auth::guard('web')->check())


					<li class="nav-item">
						<a class="nav-link" href="{{ route ('logout')}}">Logout</a>
					</li>
					@elseif(Auth::guard('company')->check())
					<li class="nav-item">
						<a class="nav-link" href="{{ route ('company.logout')}}">Logout</a>
					</li>

					@else
					<form class="d-flex">
						<button class="btn-masuk" type="submit"><a href="{{url('User/register')}}">Masuk</a></button>

					</form>
					@endif
				</ul>

			</div>
		</div>
	</nav>
</body>

</html>