<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('detailpelatihan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{url('../css/detailpelatihan.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Infant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    @include('navbar')
    <br>
    <div class="detail-pelatihan">
        <div class="judul">
            <h1>Belajar Teknik Memotong Bawang</h1>
            <h5>oleh Chef Renata</h5>
            <video width="320" height="240" controls>
                <source src="{{url('../images/potongbawang.mp4')}}" type="video/mp4">
            </video>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="penjelasan">
                    <br><br>
                    <h3>Tentang Kelas</h3>
                    <p>Memotong bawang sebelum dimasak merupakan tantangan tersendiri. Zat yang dikeluarkan oleh bawang akan menyulitkan Anda untuk memotongnya dalam bentuk yang benar seperti yang dilakukan oleh juru masak di restoran. Di sini ada beberapa kiat memotong bawang dengan cara yang tepat sehingga menghasilkan potongan akhir yang indah.
                        Memotong bawang sebelum dimasak merupakan tantangan tersendiri. Zat yang dikeluarkan oleh bawang akan menyulitkan Anda untuk memotongnya dalam bentuk yang benar seperti yang dilakukan oleh juru masak di restoran. Di sini ada beberapa kiat memotong bawang dengan cara yang tepat sehingga menghasilkan potongan akhir yang indah.
                        Memotong bawang sebelum dimasak merupakan tantangan tersendiri. Zat yang dikeluarkan oleh bawang akan menyulitkan Anda untuk memotongnya dalam bentuk yang benar seperti yang dilakukan oleh juru masak di restoran. Di sini ada beberapa kiat memotong bawang dengan cara yang tepat sehingga menghasilkan potongan akhir yang indah.
                    </p>
                    <h3>Video Lengkap</h3>
                    <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th scope="col">
                                <video width="220" height="140" controls>
                                <source src="{{url('../images/potongbawang.mp4')}}" type="video/mp4">
                                </video>
                            </th>
                            <th scope="col">
                                <video width="220" height="140" controls>
                                <source src="{{url('../images/potongbawang.mp4')}}" type="video/mp4">
                                </video>
                            </th>
                            <th scope="col">
                                <video width="220" height="140" controls>
                                <source src="{{url('../images/potongbawang.mp4')}}" type="video/mp4">
                                </video>
                            </th>
                        </tr>
                    </table>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <br>
    @include('footer')
</body>
</html>