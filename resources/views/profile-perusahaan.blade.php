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
          <img class="img-fluid" src="{{url('../images/company.png')}}" alt="">
          <h1>PT. Indofood</h3>
      </div>
      <div class="col-md-3"></div>
  </div>
  <br>
  <div class="row comp-detail">
      <div class="col-md-3"></div>
      <div class="col-md-6">
          <table>
              <tr>
                  <td class="title">Nama Perusahaan : </td>
                  <td>PT. Indofood Sukses Makmur TBK</td>
              </tr>
              <tr>
                  <td class="title">Sektor :</td>
                  <td>Food Industy</td>
              </tr>
              <tr>
                  <td class="title">Alamat :</td>
                  <td>Sudirman Plaza Indofood Tower Lantai 23. Jl. Jend. Sudirman Kav. 76-78. Jakarta DKI Jakarta, 12910.</td>
              </tr>
              <tr>
                  <td class="title">Email : </td>
                  <td>recruit.hr@indofood.com</td>
              </tr>
              <tr>
                  <td class="title">No. Telp :</td>
                  <td>(021) 57958822</td>
              </tr>
              <tr>
                  <td class="title">Deskripsi Perusahaan :</td>
                  <td>PT Indofood Sukses Makmur Tbk atau lebih dikenal dengan nama Indofood merupakan produsen berbagai jenis makanan dan minuman yang bermarkas di Jakarta, Indonesia</td>
              </tr>
          </table>
          <br><br>
          <div class="text-center">
            <a href="{{route('lowongan-perusahaan')}}" class="btn btn-primary text-center">Lowongan</a>
          </div>
      </div>
      <div class="col-md-3"></div>
  </div>
  <br><br>
  @include('footer')
</body>
</html>