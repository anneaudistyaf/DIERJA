<!DOCTYPE html>
<html>

<head>
    <title>@yield('lowongan perusahaan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/lowongan-comp.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br><br>
    <div class="row lowongan-perusahaan">
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <h3>List Lowongan</h3>
            <br>
            <div class="row lowongan">
                {{-- <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="{{url('../images/cardheader.png')}}" alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Marketing</h5>
                <p class="card-title">Tuna Netra dan Lumpuh</p>
                <p class="card-title">Full Time</p>
                <p class="text-center">... pelamar</p>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="">Edit Lowongan</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="">Delete Lowongan</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="">Detail</a>
            </div>
        </div>
    </div> --}}

    @foreach ($jobs as $item)
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center">
                <img src="{{url('../images/cardheader.png')}}" alt="">
            </div>

            <div class="card-body">
                <p class="card-title">{{$item->posisi}}</p>
                <p class="card-title">{{$item->disabilitas}}</p>
                <p class="card-title">{{$item->waktu }}</p>
                <p class="text-left">{{$item->jobs_description}}</p>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{url('/company/editlowongan',$item->jobs_id)}}">Edit Lowongan</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="" data-toggle="modal" data-target=".bd-delete-modal-lowongan" class="delete-lowongan"
                            data-id="{{$item->jobs_id}}">Delete Lowongan</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{route('company.detaillowongan',$item->jobs_id)}}">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    <br><br>
    <a href="{{url('/company/formlowongan')}}">

        <button class="btn btn-secondary">Tambah Lowongan</button>
    </a>
    </div>
    <div class="col-md-2"></div>
    </div>
    {{-- MODAL DELETE --}}
    <div class="modal fade bd-delete-modal-lowongan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        id="modal-delete-lowongan" aria-hidden="true">
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
                            <button data-dismiss="modal" type="button"
                                class="btn btn-delete btn-secondary w-100">Keep</button>
                        </div>
                        <div class="button w-50 mx-3">
                            <form action="" id="deleteLowongan" method="POST">
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
        $('.delete-lowongan').on('click',function(){
                    console.log($(this).data('id'))
                    let id = $(this).data('id')
                    // $('#modal-delete-lowongan').modal('show')
                    $('#modal-delete-lowongan').find('#deleteLowongan').attr('action',`/company/deleteLowongan/${id}`)
      });

    </script>
</body>

</html>