<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('edit-user')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{url('../css/edit-user.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
<body>
    @include('navbar')
    <br>
    <div class="row edit-user">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card">
                <div class="card-body">
                    <div class="judul">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-8">
                                <h1>EDIT PROFILE</h1><br>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                    <div class="form-foto-user">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                                <div class="foto-user">
                                    <div class="upload-foto text-center">
                                        <img src="https://placehold.it/80x80" id="preview" class="text-center">
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-4">
                                <form>
                                    <div class="form-group">
                                        <br>
                                        <h5>Upload Profile Picture</h5>
                                        <label for="exampleFormControlFile1">Choose File</label> <br>
                                        <input type="file" accept="images/*" class="form-control-file" id="profile">
                                        <p>Acceptable format : jpg or png only
                                            max size is 10mb and min size is 300kb</p>
                                    </div>
                                  </form>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                    <div class="form-lowongan">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-8">
                                <br>
                                <h3>USER INFORMATION</h3>
                                <br>
                                <form>  
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">DateOfBirth</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" value="" id="example-date-input">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                              </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Disabilities</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="exampleFormControlSelect1">
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
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Bogor</option>
                                                <option>Jakarta</option>
                                                <option>Bandung</option>
                                                <option>Yogyakarta</option>
                                                <option>Medan</option>
                                              </select>
                                        </div>  
                                    </div>
                                    <br>
                                </form>
                                <h3>ACCOUNT INFORMATION</h3>
                                <br>
                                <form>  
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <p>: email@gmail.com</p>
                                        </div>
                                     </div>
                                     <br>
                                     <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <br><br>
                        <div class="text-center">
                        <a href="#" class="btn btn-primary">SIMPAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
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
