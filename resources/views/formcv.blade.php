<!DOCTYPE html>
<html>

<head>
  <title>@yield('formcv')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" type="text/css" href="{{url('../css/formcv.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  @include('navbar')
  <br>
  <div class="row formcv">
      <div class="col-md-4"></div>
      <div class="col-md-7">
          <div class="card">
              <div class="card-header text-center">
                  <h1>CURRICULUM VITAE</h1>
              </div>
              <div class="card-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Keahlian</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
              </div>
              <div class="card-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Pengalaman Kerja</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
              </div>
              <div class="card-body">
                    <label for="formGroupExampleInput">Tahun</label>
                    <div class="input-group mb-3">
                        <select class="form-select form-control" id="inputGroupSelect03" >
                            <option value="1">2015</option>
                            <option value="2">2016</option>
                            <option value="3">2017</option>
                            <option value="4">2018</option>
                            <option value="5">2019</option>
                            <option value="6">2020</option>
                            <option value="7">2021</option>
                        </select>
                        <select class="form-select form-control" id="inputGroupSelect03">
                            <option value="1">2015</option>
                            <option value="2">2016</option>
                            <option value="3">2017</option>
                            <option value="4">2018</option>
                            <option value="5">2019</option>
                            <option value="6">2020</option>
                            <option value="7">2021</option>
                        </select>
                    </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kerja</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="formGroupExampleInput">Edukasi</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
              </div>
              <div class="card-body">
                <label for="formGroupExampleInput">Tahun</label>
                <div class="input-group mb-3">
                    <select class="form-select form-control" id="inputGroupSelect03" >
                      <option selected>Dari</option>
                      <option value="1">2015</option>
                      <option value="2">2016</option>
                      <option value="3">2017</option>
                      <option value="4">2018</option>
                      <option value="5">2019</option>
                      <option value="6">2020</option>
                      <option value="7">2021</option>
                    </select>
                    <select class="form-select form-control" id="inputGroupSelect03">
                      <option value="1">2015</option>
                      <option value="2">2016</option>
                      <option value="3">2017</option>
                      <option value="4">2018</option>
                      <option value="5">2019</option>
                      <option value="6">2020</option>
                      <option value="7">2021</option>
                    </select>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="formGroupExampleInput">Skill</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
              </div>
              <div class="card-body">
                <label for="formGroupExampleInput">Sosial Media</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                      <select class="form-select form-control" id="inputGroupSelect03">
                        <option selected>Sosial Media</option>
                        <option value="1">Instagram</option>
                        <option value="2">Facebook</option>
                        <option value="3">Twitter</option>
                      </select>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <a href="{{route('cvuser')}}" class="btn btn-primary">SIMPAN</a>
              </div>
          </div>
      </div>
  </div>
</body>
</html>