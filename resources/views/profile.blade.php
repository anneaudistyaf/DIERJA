<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('profile')</title>
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
    <link rel="stylesheet" type="text/css" href="{{url('../css/profile.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="profile">
        <div class="row judul-profile">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                @if (session('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success')}}
                </div>
                @endif
                <div class="judul">
                    <h1>PROFILE</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="button">
                    <a class="btn btn-primary btn-link" href="{{url('profile/edit-user',Auth::id())}}"
                        role="button">Edit
                        Profile</a>
                </div>
            </div>
        </div>
        <div class="row profile">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card mb-3" style="max-width: 750px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid" src="{{url('../profileImage/',$usr->user_profile)}}" alt="..."
                                style="max-width: 90%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body-profile">
                                <h3 class="card-title">{{$usr->name}}</h5>
                                    <p class="card-text">{{$usr->date_of_birth}}</p>
                                    <p class="card-text">{{$usr->gender}}</p>
                                    @foreach ($ds as $key =>$value)
                                    @if($usr->disabilitas == $key)
                                    <p class="card-text">{{$value}}</p>
                                    @endif
                                    @endforeach
                                    @foreach ($lokasi as $key => $value)
                                    @if($usr->location == $key)
                                    <p class="card-text"><img class="img-fluid" src="{{url('../images/place.png')}}"
                                            alt="">{{$value}}</p>
                                    @endif
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <br>

    <div class="row status">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <div id="tabel-user" class="table-responsive">
                <h3 class="text-center">STATUS LAMARAN</h3>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Status Lamaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apply as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->company->company_name}}</td>
                            <td>{{$item->posisi}}</td>
                            @foreach ($status as $key => $value)
                            @if($item->status == $key)
                            <td>{{$value}}</td>
                            @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>
    <div class="cv">
        <div class="row judul-cv">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="judul">
                    <h1>CURRICULUM VITAE</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="button">
                    <a class="btn btn-primary btn-link" href="{{url('profile/edit-cv',Auth::id())}}" role="button">Edit
                        CV</a>
                </div>
            </div>
        </div>
        @if(empty($cv))
        @else
        <div class="row body-cv">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card mb-3" style="max-width: 750px;">
                    <div class="pekerjaan">
                        <h4>{{$cv->keahlian}}</h4>
                    </div>
                </div>
                <br>
                <div class="card mb-3" style="max-width: 750px;">
                    <div class="card-body-cv">
                        <h3 class="card-title">PENGALAMAN KERJA</h3>
                        <p class="card-text-cv">{{$cv->pengalamanKerja}}</p>
                        {{-- <p class="card-text-cv">Tokopedia</p> --}}
                        <p class="card-text-cv"><small
                                class="text-muted">{{$cv->tahunAwalKerja}}-{{$cv->tahunAkhirKerja}}</small></p>
                        <p class="card-text-cv">Responsibilities</p>
                        <p class="card-text-cv">{{$cv->deskripsiKerja}}</p>
                        {{-- <p class="card-text-cv">- Analyze and maintain existing software applications</p>
                        <p class="card-text-cv">- Discover and fix programming bugs</p> --}}
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 750px;">
                    <div class="card-body-cv">
                        <h3 class="card-title">SKILL</h3>
                        <p class="card-text-cv">{{$cv->skill}}</p>
                        {{-- <p class="card-text-cv">Javascript</p>
                        <p class="card-text-cv">Laravel</p>
                        <p class="card-text-cv">PHP</p>
                        <p class="card-text-cv">HTML</p> --}}
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 750px;">
                    <div class="card-body-cv">
                        <h3 class="card-title">EDUKASI</h3>
                        <p class="card-text-cv">{{$cv->edukasi}}</p>
                        {{-- <p class="card-text-cv">S1 Teknik Informatika</p> --}}
                        <p class="card-text-cv"><small
                                class="text-muted">{{$cv->edukasiTahunAwal}}-{{$cv->edukasiTahunAkhir}}</small></p>
                        {{-- <p class="card-text-cv">SMAN 90 Bandung</p>
                        <p class="card-text-cv">Sekolah Menengah Atas, IPA</p>
                        <p class="card-text-cv"><small class="text-muted">2015-2018</small></p> --}}
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 750px;">
                    <div class="card-body-cv">
                        <h3 class="card-title">SOSIAL MEDIA</h3>
                        <p class="card-text"><img class="img-fluid" src="{{url('../images/facebook 1.png')}}"
                                alt="">{{$cv->sosialMedia}}</p>
                        <p class="card-text"><img class="img-fluid" src="{{url('../images/twitter 1.png')}}"
                                alt="">{{$cv->sosialMedia}}</p>
                        <p class="card-text"><img class="img-fluid" src="{{url('../images/instagram 1.png')}}"
                                alt="">{{$cv->sosialMedia}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

    </div>
    @endif
    <br>
    @include('footer')
</body>

</html>