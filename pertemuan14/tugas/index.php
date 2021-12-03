<!DOCTYPE html>
<html lang="en">

    <head>
        <title>A.Stars</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="logo.png">
    </head>

    <body style="background-color: #222831; color: #EEEEEE;">
        <!-- NAV -->
        <nav class="navbar navbar-expand-sm" style="position: sticky; background-color: #393E46;">
            <img src="logo.png" alt="logo" style="height: 3%; width: 3%; margin: 1% 1% 1% 3%;">
            <div class="col-7" id="nama-user">
                <h4>Gemay</h4>
            </div>
            <ul class="navbar-nav">
                <!-- Dropdown -->
                <li class="nav-item">
                    <a class="nav-link" style="color: #EEEEEE;" href="index.php?p=beranda">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #EEEEEE;" href="#">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #EEEEEE;" href="#">Notifikasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #EEEEEE;" href="#" id="navbardrop" data-toggle="dropdown">
                        Info Tempat Ngopi
                    </a>
                    <div class="dropdown-menu" style="background-color: #393E46; color: #EEEEEE;">
                        <a class="dropdown-item" style="color: #EEEEEE;" href="#">Aku Gatau</a>
                        <a class="dropdown-item" style="color: #EEEEEE;" href="#">Terserah Kamu</a>
                        <a class="dropdown-item" style="color: #EEEEEE;" href="#">Aku Ikut</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="navbardrop" data-toggle="dropdown" style="color: #EEEEEE;">
                        <img src="profile.png" style="margin-left: 10px; margin-top: 5px; height: 50px;" alt="profil">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" style="background-color: #393E46;">
                        <a class="dropdown-item" style="color: #EEEEEE;" href="#">Profil</a>
                        <a class="dropdown-item" style="color: #EEEEEE;" href="Logout.php">Keluar</a>
                    </div>
                </li>
            </ul>
            <hr>
        </nav>
        <!-- END OF NAV -->

        <!-- SECTION -->
        <br>
        <div class="container">
            <div class="jumbotron bg-secondary">
                <h1>Atmayanti Punya</h1>
                <p><span id="tanggalwaktu"></span></p>
                <script>
                    var tw = new Date();
                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                    else(a = tw.getTime());
                    tw.setTime(a);
                    var tahun = tw.getFullYear();
                    var hari = tw.getDay();
                    var bulan = tw.getMonth();
                    var tanggal = tw.getDate();
                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun + " | " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10) ? "0" : "") + tw.getMinutes() + (" WIB ");
                </script>
            </div>
            <div class="row">
                <div class="col-5" style="margin-right: 50px;">
                <br><br>
                    <h2>SELAMAT DATANG</h2>
                    <h3>Mau Tau Profil Aku?</h3><br>
                    <h6 align='justify'>Aku mau perkenalan diri dulu ya. Nama aku Atmayanti.
                        Jarang ada yang tau kalo nama panggilanku itu 'Maya'.
                        Tapi gapapa lah ya. Aku asli Tulungagung. Aku lahir di
                        bulan ini 20 tahun yang lalu. Aku suka <i>voice over</i> dan <i>dubbing</i>
                        banyak yang bilang suaraku bagus, tapi sebenernya aku gabisa
                        nyanyi. Yahh kita tahu lah, ga ada yang sempurna di dunia
                        ini. <br><br>
                    </h6>
                    <p class="blockquote-footer strong">Atmayanti - 2041720016</p><br>
                    <table style="color: #EEEEEE;" class="table table-bordered table-striped table-hover table-dark">
                        <tr>
                            <th>Nama</th>
                            <td>Atmayanti</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>2041720016</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>2G</td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>D4 Teknik Informatika</td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td>Teknologi Informasi</td>
                        </tr>
                        <tr>
                            <th>Perguruan Tinggi</th>
                            <td>Politeknik Negeri Malang</td>
                        </tr>
                    </table>
                </div>
                <div class="col-6"><br><img class="img-thumbnail" src="maya.jpg" alt="gambar" width="100%" height="100%"></div>
            </div>
        </div>
        <!-- END OF SECTION -->

        <!-- FOOTER -->
        <footer class="page-footer font-small" style="background-color: #393E46;">
            <div class="container py-4 text-center text-md-left mt-5">
                <div class="row mt-3">
                    <div class="col-6">
                        <h6 class="text-uppercase font-weight-bold">Tentang Kami</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p align='justify'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet eaque, laborum voluptatum laboriosam odio blanditiis debitis modi tempore quae reiciendis harum! Doloribus suscipit provident dignissimos aut eum assumenda officia eligendi!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia debitis deleniti eveniet aliquam, fugit soluta dolorum natus sint impedit cum. Quo voluptatum illum repudiandae odio aspernatur beatae excepturi magnam rem?
                        </p>
                    </div>
                    <div class="col-3">
                        <h6 class="text-uppercase font-weight-bold">Kebijakan</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#" class="kebijakan" style="color: #EEEEEE;">Kebijakan Privasi</a>
                        </p>
                        <p>
                            <a href="#" class="kebijakan" style="color: #EEEEEE;">Syarat dan Ketentuan Umum</a>
                        </p>
                    </div>
                    <div class="col-3" id="kontak">
                        <h6 class="text-uppercase font-weight-bold" id="kontak">Kontak</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-facebook-square"><a href="#" class="kontak" style="color: #EEEEEE; font-family: verdana;">&nbsp; &nbsp; &nbsp;A.Stars</a></i>
                        </p>
                        <p>
                            <i class="fa fa-envelope-square"><a href="mailto:me.atmayanti@gmail.com" class="kontak" style="color: #EEEEEE;  font-family: verdana;">&nbsp; &nbsp; &nbsp;AStars@gmail.com</a></i>
                        </p>
                        <p>
                            <i class="fa fa-instagram"><a href="#" class="kontak" style="color: #EEEEEE;  font-family: verdana;">&nbsp; &nbsp; &nbsp;A.Stars</a></i>
                        </p>
                        <p>
                            <i class="fa fa-twitter-square"><a href="#" class="kontak" style="color: #EEEEEE;  font-family: verdana;">&nbsp; &nbsp; &nbsp;A.Stars</a></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3" style="background-color: #222831;">© 2021 Copyright: Atmayanti lahh</div>
        </footer>
        <!-- END OF FOOTER -->

    </body>
</html>