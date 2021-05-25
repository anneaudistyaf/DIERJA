<!DOCTYPE html>
<html>

<head>
    <title>@yield('profile-perusahaan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/profile-perusahaan.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="row comp-thumbnail">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
            <img class="img-fluid" src="{{url('../profileCompany',$company->profileImage)}}" alt="">
            <h1>PT.{{$company->company_name}}</h3>
        </div>
        @if (session('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('success')}}
        </div>
        @endif
        <div class="col-md-3"></div>
    </div>
    <br>
    <div class="row comp-detail">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table>
                <tr>
                    <td class="title">Nama Perusahaan : </td>
                    <td>PT. {{$company->company_name}}</td>
                </tr>
                <tr>
                    <td class="title">Sektor :</td>
                    <td>{{$company->sektor}}</td>
                </tr>
                <tr>
                    <td class="title">Alamat :</td>
                    <td>{{$company->alamat}}</td>
                </tr>
                <tr>
                    <td class="title">Email : </td>
                    <td>{{$company->email}}</td>
                </tr>
                <tr>
                    <td class="title">No. Telp :</td>
                    <td>{{$company->phone}}</td>
                </tr>
                <tr>
                    <td class="title">Deskripsi Perusahaan :</td>
                    <td>{{$company->deskripsi}}</td>
                </tr>
            </table>
            <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>
    <br><br>
    @include('footer')
</body>

</html>