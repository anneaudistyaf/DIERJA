<!DOCTYPE html>
<html>

<head>
    <title>@yield('tambah-pelatihan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/tambah-pelatihan.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            @if(session('failed'))
            <div class="alert alert-danger text-center" role="alert">
                {{ session('failed')}}
            </div>
            @endif
            <h1>Tambah Pelatihan</h1>
            <br>
            <div class="card">
                <form action="{{route('admin.add.pelatihan')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br><br>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label for="namapelatihan" class="col-sm-2 col-form-label">Nama Pelatihan</label>
                        <div class="col-sm-8">
                            <input name="judul" type="text" class="form-control" id="namapelatihan">
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label for="pembuat" class="col-sm-2 col-form-label">Pembuat</label>
                        <div class="col-sm-8">
                            <input name="author" type="text" class="form-control" id="pembuat">
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-8">
                            <select name="kategori" class="form-control select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Cooking</option>
                                <option value="2">Programming</option>
                                <option value="3 ">Musik</option>
                            </select>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <br>
                    <div class="form-foto-teaser">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                                <div class="foto-teaser">
                                    <div class="upload-foto text-center">
                                        <img src="https://placehold.it/80x80" id="preview"
                                            class="text-center img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">

                                <div class="form-group">
                                    <br>
                                    <h5>Upload Thumbnail</h5>
                                    <label for="exampleFormControlFile1">Choose File</label> <br>
                                    <input type="file" name="file1" class="form-control-file" id="teaser">
                                    <p>Acceptable format : jpe,jpg,png only
                                        max size is 2mb</p>
                                </div>

                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        <div class="col-sm-5"></div>
                    </div>
                    <br>

                    <div class="form-foto-pelatihan">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                                <div class="foto-pelatihan">
                                    <div class="upload-foto text-center">
                                        <img src="https://placehold.it/80x80" id="preview"
                                            class="text-center img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">

                                <div class="form-group">
                                    <br>
                                    <h5>Upload Video</h5>
                                    <label for="exampleFormControlFile1">Choose file</label> <br>
                                    <input type="file" name="file2" accept="video/mp4" class="form-control-file"
                                        id="pelatihan">
                                    <p>Acceptable format : mp4 only
                                        max size is 60mb and min size is 2mb</p>
                                </div>

                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <br><br>
                        <div class="text-center">
                            <button class="btn btn-primary">SIMPAN</button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br>
    @include('footer')
</body>
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

</html>