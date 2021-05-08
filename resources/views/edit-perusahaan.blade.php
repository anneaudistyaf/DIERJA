<!DOCTYPE html>
<html>

<head>
  <title>@yield('edit-perusahaan')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" type="text/css" href="{{url('../css/edit-perusahaan.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  @include('navbar')
  <br>
  <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="upload-foto text-center">
            <img src="https://placehold.it/80x80" id="preview" class="text-center img-thumbnail">
            <form method="post" id="image-form">
                <input type="file" name="img[]" class="file" accept="image/*">
                <div class="input-group my-3">
                <input type="text" class="form-control" disabled placeholder="No file choosen" id="file">
                <div class="input-group-append">
                    <button type="button" class="browse btn btn-secondary">Choose a file</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama Perusahaan</label>
                      <input type="text" class="form-control" id="formGroupExampleInput">
                    </div><br>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email</label>
                      <input type="email" class="form-control" id="formGroupExampleInput2">
                    </div><br>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nomor Telpon</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2">
                    </div><br>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Sektor</label>
                        <select class="form-control pilih-sektor" id="FormCustomSelect">
                            <option selected class="text-muted">Choose...</option>
                            <option value="1">Food</option>
                            <option value="2">Pertambangan</option>
                            <option value="3">Perminyakan</option>
                            <option value="4">Property</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="exampleTextarea">Alamat Perusahaan</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div><br>
                    <div class="form-group">
                        <label for="exampleTextarea">Deskripsi Perusahaan Perusahaan</label>
                        <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                    </div><br>
                    <a href="{{route('profile-perusahaan')}}" class="btn btn-primary">SIMPAN</button>
                  </form>
            </div>
        </div>
    </div>
    <div class="col-sm-2"></div>
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