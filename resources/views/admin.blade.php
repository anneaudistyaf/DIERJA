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
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
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
        @if (session('success_user'))
        <div class="alert alert-success text-center" role="alert">
          {{ session('success_user')}}
        </div>
        @endif
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
            @foreach ($user as $item)

            <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->date_of_birth}}</td>
              <td>{{$item->gender}}</td>
              @foreach ($disabilitas as $key =>$value)
              @if($item->disabilitas == $key)
              <td>{{$value}}</td>
              @endif
              @endforeach
              @foreach ($lokasi as $key =>$value)
              @if($item->location == $key)
              <td>{{$value}}</td>
              @endif
              @endforeach
              <td>{{$item->email}}</td>
              <td>{{$item->password}}</td>
              <td><button class="btn btn-danger">Delete</button></td>
              @endforeach
          </tbody>
        </table>
      </div>
      <br>
      <div id="tabel-company" class="table-responsive">
        @if (session('success_company'))
        <div class="alert alert-success text-center" role="alert">
          {{ session('success_company')}}
        </div>
        @endif
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
              @foreach ($company as $item)

              <td>{{$item->company_name}}</td>
              <td>{{$item->sektor}}</td>
              <td>{{$item->alamat}}
              </td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->deskripsi}}</td>
              <td><button class="btn btn-danger">Delete</button></td>
              @endforeach
          </tbody>
        </table>
      </div>
      <br>
      <div id="tabel-lowongan" class="table-responsive">
        @if (session('success_job'))
        <div class="alert alert-success text-center" role="alert">
          {{ session('success_job')}}
        </div>
        @endif
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
            @foreach ($jobs as $item)

            <tr>
              <td>{{$item->posisi}}</td>
              <td>{{$item->disabilitas}}</td>
              <td>{{$item->lokasi}}
              </td>
              <td>{{$item->lokasi}}</td>
              <td>{{$item->jobs_description}}</td>
              <td><button class="btn btn-danger delete-job" data-id="{{$item->jobs_id}}">Delete</button></td>
              @endforeach
          </tbody>
        </table>
      </div>
      <br>
      <div id="tabel-sharing" class="table-responsive">
        @if (session('success_sharing'))
        <div class="alert alert-success text-center" role="alert">
          {{ session('success_sharing')}}
        </div>
        @endif
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
            @foreach ($sharing as $item)

            <tr>
              <td>{{$item->user->name}}</td>
              @foreach ($disabilitas as $key =>$value)
              @if($item->disabilitas == $key)
              <td>{{$value}}</td>
              @endif
              @endforeach
              <td>Data Analyst</td>
              <td>{{$item->deskripsi}}</td>
              <td><button class="btn btn-danger delete-sharing" data-id="{{$item->sharing_id}}">Delete</button></td>
          </tbody>
          @endforeach
        </table>
      </div>
      <br>
      <div id="tabel-pelatihan" class="table-responsive">
        @if (session('success'))
        <div class="alert alert-success text-center" role="alert">
          {{ session('success')}}
        </div>
        @endif
        <h3 class="text-center">PELATIHAN</h3>
        <a href="{{route('admin.show.add.pelatihan')}}" class="btn btn-secondary">Tambah Pelatihan</a>
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
            @foreach ($pelatihan as $item)

            <tr>
              <td>{{$item->judul}}</td>
              <td>{{$item->author}}</td>
              <td>{{$item->kategori}}</td>
              <td>{{$item->deskripsi}}</td>
              <td>{{$item->video}}</td>
              <td>
                <div class="d-grid gap-2 d-md-block">
                  <a href="{{route('admin.edit.pelatihan',$item->pelatihan_id)}}" class="btn btn-success"
                    type="button">Update</a>
                  <button data-id="{{$item->pelatihan_id}}" class="btn btn-danger delete-pelatihan"
                    type="button">Delete</button>
                </div>
              </td>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
  {{-- MODAL DELETE --}}
  <div class="modal fade bd-delete-modal-lowongan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    id="modal-delete-admin" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content px-3 pt-2 pb-4 ">
        <div class="modal-title">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <h1 class="text-center text-delete" style="font-size:20px">
          Delete
        </h1>
        <h1 class="text-center mt-3 font-weight-normal" style="font-size:15px">
          Are you sure you want to delete?
        </h1>
        <div class="mt-3">
          <div class="d-flex justify-content-around">
            <div class="button w-50 mx-3">
              <button data-dismiss="modal" type="button" class="btn btn-delete btn-secondary w-100">Keep</button>
            </div>
            <div class="button w-50 mx-3">
              <form action="" id="deletePelatihan" method="POST">
                @csrf
                {{method_field('delete')}}
                <a href="">
                  <button class="btn btn-delete btn-danger w-100">Delete</button>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  @include('footer')
  <script>
    $('.delete-pelatihan').on('click',function(){
                console.log($(this).data('id'))
                let id = $(this).data('id')
                $('#modal-delete-admin').modal('show')
                $('#modal-delete-admin').find('#deletePelatihan').attr('action',`/admin/deletePelatihan/${id}`)
  });
    $('.delete-sharing').on('click',function(){
                console.log($(this).data('id'))
                let id = $(this).data('id')
                $('#modal-delete-admin').modal('show')
                $('#modal-delete-admin').find('#deletePelatihan').attr('action',`/admin/deleteSharing/${id}`)
  });
    $('.delete-job').on('click',function(){
                console.log($(this).data('id'))
                let id = $(this).data('id')
                $('#modal-delete-admin').modal('show')
                $('#modal-delete-admin').find('#deletePelatihan').attr('action',`/admin/deleteJobs/${id}`)
  });

  </script>
</body>

</html>