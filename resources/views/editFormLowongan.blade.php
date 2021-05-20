<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('formlowongan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/formlowongan.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="judul">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <h1>Edit</h1>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <br>
    <div class="form-foto">
        <div class="row">
            {{-- <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <div class="foto-lowongan">
                    <div class="upload-foto text-center">
                        <img src="https://placehold.it/80x80" id="preview" class="text-center img-thumbnail img-fluid">
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-sm-4">
                <form>
                    <div class="form-group">
                        <br>
                        <label for="exampleFormControlFile1">Change Profile Picture</label> <br>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        <p>Acceptable formt : jpg & png only
                            max size is 2mb and min size is 300kb</p>
                    </div>
                </form>
            </div> --}}
            <div class="col-sm-2"></div>
        </div>
    </div>
    <div class="form-lowongan">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <br>
                <form action="{{route('company.updatelowongan',$jobs->jobs_id)}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Posisi Pekerjaan</label>
                        <div class="col-sm-9">
                            <input value="{{$jobs->posisi}}" name="posisi" type="text" class="form-control"
                                id="inputPassword" placeholder="Marketing">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Disabilities</label>
                        <div class="col-sm-9">
                            <select name="disabilitas" class="form-control" id="exampleFormControlSelect1">
                                <option>Tuna rungu</option>
                                <option>Tuna wicara</option>
                                <option>Lumpuh</option>
                                <option>Disleksia</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                            <select name="lokasi" class="form-control" id="exampleFormControlSelect1">
                                <option>Bogor</option>
                                <option>Jakarta</option>
                                <option>Bandung</option>
                                <option>Yogyakarta</option>
                                <option>Medan</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-9">
                            <select name="waktu" class="form-control" id="exampleFormControlSelect1">
                                <option>Part-Time</option>
                                <option>Full-Time</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Deskripsi dan
                            Syarat</label>
                        <div class="col-sm-9">
                            <textarea name="jobs_description" class="form-control" id="exampleFormControlTextarea1"
                                rows="3">{{$jobs->jobs_description}}</textarea>
                        </div>
                    </div>
                    <br><br>
                    <button class="btn btn-primary">SIMPAN</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

    <br>
    @include('footer')

    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
          });
          $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);
          
            var reader = new FileReader();
            reader.onload = function(e) {
              // get loaded data and render thumbnail.
              document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
          });
    </script>
</body>

</html>