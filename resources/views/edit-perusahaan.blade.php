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
  <form method="POST" action="{{route('company.update-perusahaan',$company->company_id)}}" id="image-form"
    enctype="multipart/form-data">
    @csrf
    <div class="row">
      @if(session('failed'))
      <div class="alert alert-danger text-center" role="alert">
        {{ session('failed')}}
      </div>
      @endif
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="upload-foto text-center">
          <img src="https://placehold.it/80x80" id="preview" class="text-center img-thumbnail img-fluid">
          <input type="file" name="file" class="file" accept="image/*">
          <div class="input-group my-3">
            <input type="text" class="form-control" disabled placeholder="No file choosen" id="file">
            <div class="input-group-append">
              <button type="button" class="browse btn btn-secondary">Choose a file</button>
            </div>
          </div>

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
                <input name="nama" value="{{$company->company_name}}" type="text" class="form-control"
                  id="formGroupExampleInput">
                @if( $errors->first('nama'))
                <div class="alert-danger">{{ $errors->first('nama')}}</div>
                @endif
              </div><br>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input name="email" value="{{$company->email}}" type="email" class="form-control"
                  id="formGroupExampleInput2">
                @if( $errors->first('email'))
                <div class="alert-danger">{{ $errors->first('email')}}</div>
                @endif
              </div><br>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nomor Telpon</label>
                <input name="phone" value="{{$company->phone}}" type="text" class="form-control"
                  id="formGroupExampleInput2">
                @if( $errors->first('phone'))
                <div class="alert-danger">{{ $errors->first('phone')}}</div>
                @endif
              </div><br>
              <div class="form-group">
                <label for="formGroupExampleInput2">Sektor</label>
                <select name="sektor" class="form-control pilih-sektor" id="FormCustomSelect">
                  <option selected class="text-muted">Choose...</option>
                  <option value="food">Food</option>
                  <option value="pertambangan">Pertambangan</option>
                  <option value="perminyakan">Perminyakan</option>
                  <option value="property">Property</option>
                </select>
              </div><br>
              <div class="form-group">
                <label for="exampleTextarea">Alamat Perusahaan</label>
                <textarea name="alamat" class="form-control" id="exampleTextarea"
                  rows="3">{{$company->alamat}}</textarea>
                @if( $errors->first('alamat'))
                <div class="alert-danger">{{ $errors->first('alamat')}}</div>
                @endif
              </div><br>
              <div class="form-group">
                <label for="exampleTextarea">Deskripsi Perusahaan Perusahaan</label>
                <textarea name="deskripsi" class="form-control" id="exampleTextarea"
                  rows="4">{{$company->deskripsi}}</textarea>
                @if( $errors->first('deskripsi'))
                <div class="alert-danger">{{ $errors->first('deskripsi')}}</div>
                @endif
              </div><br>
              <div class="button-submit text-center">
                <button class="btn btn-primary">SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </form>
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