<!DOCTYPE html>
<html>

<head>
    <title>@yield('lamaran')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/lamaran.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <br>
    <div class="row lamaran">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            @if (session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('success')}}
            </div>
            @endif
            {{-- @if(empty($jobs))
            <h5><u>Tidak ada data pekerjaan</u></u></h5>
            @endif --}}
            @php($i=0)
            @foreach ($hasilJobs as $item)

            <h3 class="text-center">Pelamar {{$jobs[$i]->posisi}} </h3>
            <br>
            @foreach ($item as $items)
            <div class="waiting">
                @if($items->status != 0)
                {{-- <h5 class="alert alert-danger text-center">Belum ada pelamar</h5> --}}
                @else
                <h5><u>Menunggu Konfirmasi</u></h5>
                @endif
                <table class="table-wait">


                    @if($items->status == 0)

                    <tr>
                        <td>Posisi</td>
                        <td> : </td>
                        <td>{{$items->posisi}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : </td>
                        <td>{{$items->nama}}</td>
                    </tr>
                    <tr>
                        <td>Disabilitas</td>
                        <td> : </td>
                        @foreach ($ds as $key =>$value)


                        @if($items->user->disabilitas == $key)

                        <td>{{$value}}</td>
                        @endif

                        @endforeach
                    </tr>
                </table>
                <br>
                <div class="d-grid gap-2 d-md-block">

                    <form action="{{route('company.update.lamaran.perusahaan',$items->lowongan_id)}}" action="post">
                        @csrf
                        <a href="{{url('/User/CV',$items->id)}}">
                            <button class="btn btn-success" type="button">Lihat Portofolio</button>
                        </a>
                        <button name="status" class="btn btn-primary" value="1" role="button">Terima Lamaran</button>
                        <button name="status" class="btn btn-danger" value="2" role="button">Tolak Lamaran</button>

                    </form>
                </div>
                @endif
            </div>
            @endforeach
            @php($i++)
            @endforeach
            <br>

            @php($a=0)
            @foreach ($hasilJobs as $array)
            <div class="accept">

                <h5><u>Pelamar diterima di {{$jobs[$a]->posisi}}</u></h5>
                <table class="table-acc">
                    @foreach ($array as $items)
                    @if($items->status != 1 )
                    @else
                    <tr>
                        <td>Posisi</td>
                        <td> : </td>
                        <td>{{$items->posisi}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : </td>
                        <td>{{$items->nama}}</td>
                    </tr>
                    <tr>
                        <td>Disabilitas</td>
                        <td> : </td>
                        @foreach ($ds as $key =>$value)
                        @if($items->user->disabilitas == $key)

                        <td>{{$value}}</td>
                        @endif
                        @endforeach
                    </tr>
                    @endif
                    @endforeach
                </table>
                <br>
            </div>
            @php($a++)
            @endforeach
        </div>
    </div>
    <br>
    @include('footer')
</body>

</html>