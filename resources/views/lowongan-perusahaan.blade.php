<!DOCTYPE html>
<html>
    <head>
        <title>@yield('lowongan perusahaan')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
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
                    <div class="col-md-4">
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
                            <a href="{{route('formlowongan')}}">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                    </div>
                    <div class="col-md-4">
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
                    </div>
                </div>
                <br><br>
                <button class="btn btn-secondary">Tambah Lowongan</button>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br>
        @include('footer')
    </body>
</html>