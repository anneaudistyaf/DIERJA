<!DOCTYPE html>
<html>

<head>
  <title>@yield('admin')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" type="text/css" href="{{url('../css/admin.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  @include('navbar')
  <br>
  <div class="row admin">
    <div class="col-md-1"></div>
    <div class="col-md-3">
          <br>
          <h1>ADMIN</h1>
          <br>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Maintenance
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#tabel-user">USER</a>
              <a class="dropdown-item" href="#tabel-company">PERUSAHAAN</a>
              <a class="dropdown-item" href="#tabel-lowongan">LOWONGAN</a>
              <a class="dropdown-item" href="#tabel-sharing">SHARING</a>
              <a class="dropdown-item" href="#tabel-pelatihan">PELATIHAN</a>
            </div>
          </div>
    </div>
    <div class="col-md-7">
          <br>
          <div id="tabel-user" class="table-responsive">
            <h3 class="text-center">USER</h3>
            <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">DateOfBirth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Disabilities</th>
                    <th scope="col">Location</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Dian</td>
                    <td>xx-xx-xxxx</td>
                    <td>Perempuan</td>
                    <td>Tuna Netra</td>
                    <td>Bogor</td>
                    <td>dian@gmail.com</td>
                    <td>9ajskECmvba@JDm</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tbody>
              </table>
          </div>
          <br>
          <div id="tabel-company"  class="table-responsive">
            <h3 class="text-center">PERUSAHAAN</h3>
            <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Sektor</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PT. Indofood</td>
                    <td>food industry</td>
                    <td>Sudirman Plaza Indofood Tower Lantai 23. Jl. Jend. Sudirman Kav. 76-78. Jakarta DKI Jakarta, 12910.</td>
                    <td>recruit.hr@indofood.com</td>
                    <td>(021)-57958822</td>
                    <td>PT Indofood Sukses Makmur Tbk atau lebih dikenal dengan nama Indofood merupakan produsen berbagai jenis makanan dan minuman yang bermarkas di Jakarta, Indonesia</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tbody>
              </table>
          </div>
          <br>
          <div id="tabel-lowongan" class="table-responsive">
            <h3 class="text-center">LOWONGAN</h3>
            <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Posisi</th>
                    <th scope="col">Disabilities</th>
                    <th scope="col">Location</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Marketing</td>
                    <td>Tuna Netra</td>
                    <td>Sudirman Plaza Indofood Tower Lantai 23. Jl. Jend. Sudirman Kav. 76-78. Jakarta DKI Jakarta, 12910.</td>
                    <td>Part-Time</td>
                    <td>PT Indofood Sukses Makmur Tbk atau lebih dikenal dengan nama Indofood merupakan produsen berbagai jenis makanan dan minuman yang bermarkas di Jakarta, Indonesia</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tbody>
              </table>
          </div>
          <br>
          <div id="tabel-sharing" class="table-responsive">
            <h3 class="text-center">SHARING</h3>
            <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Disabilities</th>
                    <th scope="col">Job</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>David Sukonto</td>
                    <td>Tuna Wicara</td>
                    <td>Data Analyst</td>
                    <td>PT Indofood Sukses Makmur Tbk atau lebih dikenal dengan nama Indofood merupakan produsen berbagai jenis makanan dan minuman yang bermarkas di Jakarta, Indonesia</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tbody>
              </table>
          </div>
          <br>
          <div id="tabel-pelatihan" class="table-responsive">
            <h3 class="text-center">PELATIHAN</h3>
            <a href="{{route('tambah-pelatihan')}}" class="btn btn-secondary">Tambah Pelatihan</a>
            <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama Pelatihan</th>
                    <th scope="col">Pembuat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">File</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Memasak Daging Agar Empuk</td>
                    <td>Chef Renata</td>
                    <td>Cooking</td>
                    <td>PT Indofood Sukses Makmur Tbk atau lebih dikenal dengan nama Indofood merupakan produsen berbagai jenis makanan dan minuman yang bermarkas di Jakarta, Indonesia</td>
                    <td>image.png</td>
                    <td><div class="d-grid gap-2 d-md-block">
                      <a href="{{route('tambah-pelatihan')}}"  class="btn btn-success" type="button">Update</a>
                      <button class="btn btn-danger" type="button">Delete</button>
                        </div>
                    </td>
                </tbody>
              </table>
          </div>
    </div>
    <div class="col-md-1"></div>
  </div>
  <br>
  @include('footer')
</body>
</html>