<!DOCTYPE html>
<html>

<head>
    <title>@yield('formcv')</title>
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
                <form action="{{route('add.cv',Auth::id())}}" method="POST">
                    @csrf
                    <div class="card-header text-center">
                        <h1>CURRICULUM VITAE</h1>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="formGroupExampleInput">Keahlian</label>
                            <input name="keahlian" type="text" class="form-control" id="formGroupExampleInput">
                            @if( $errors->first('keahlian'))
                            <div class="alert-danger">{{ $errors->first('keahlian')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Pengalaman Kerja</label>
                            <input name="pengalamanKerja" type="text" class="form-control" id="formGroupExampleInput">
                            @if( $errors->first('pengalamanKerja'))
                            <div class="alert-danger">{{ $errors->first('pengalamanKerja')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="formGroupExampleInput">Tahun</label>
                        <div class="input-group mb-3">
                            <select name="tahunAwalKerja" class="form-select form-control" id="inputGroupSelect03">
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                            <select name="tahunAkhirKerja" class="form-select form-control" id="inputGroupSelect03">
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kerja</label>
                            <textarea name="deskripsiKerja" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                            @if( $errors->first('deskripsiKerja'))
                            <div class="alert-danger">{{ $errors->first('deskripsiKerja')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Edukasi</label>
                            <input name=" edukasi" type="text" class="form-control" id="formGroupExampleInput">
                            @if( $errors->first('edukasi'))
                            <div class="alert-danger">{{ $errors->first('edukasi')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="formGroupExampleInput">Tahun</label>
                        <div class="input-group mb-3">
                            <select name="edukasiTahunAwal" class="form-select form-control" id="inputGroupSelect03">
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                            <select name="edukasiTahunAkhir" class="form-select form-control" id="inputGroupSelect03">
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Skill</label>
                            <input name="skill" type="text" class="form-control" id="formGroupExampleInput">
                            @if( $errors->first('skill'))
                            <div class="alert-danger">{{ $errors->first('skill')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="formGroupExampleInput">Sosial Media</label>
                        <div class="input-group">
                            <input name="sosialMedia" type="text" class="form-control"
                                aria-label="Text input with dropdown button">
                            @if( $errors->first('sosilaMedia'))
                            <div class="alert-danger">{{ $errors->first('sosialMedia')}}</div>
                            @endif
                            <div class="input-group-append">
                                <select name="optionSosialMedia" class="form-select form-control"
                                    id="inputGroupSelect03">
                                    <option selected>Sosial Media</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>