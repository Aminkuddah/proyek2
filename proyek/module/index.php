<?php
include '../helper/connection.php';

if(isset($_GET['pesan'])){
    $mess="<p> {$_GET['pesan']}</p>";
}else{
    $mess="";
}
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div id="home" class="container-fluid">
        <div class="row">    
            <div class="col-lg-2 p-3"></div>
            <div class="col-lg-8 p-3">
                <div class="navbar navbar-light">
                    <h1 class="namaWebsite">Golek Kerjo</h1>
                    <div class="sosmed ">
                        <a href="index.php"><img src="../img/facebook.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/twitter.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/wordpress.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/linkedin.png" class="sosmedLogo" height="35" width="35"></a>
                    </div>
                </div>
                <!-- <div class="helloFresh">
                    <h1 class="text-align:center">Hello Fresh Graduate!</h1> 
                    <h2 class="text-align:center">Welcome To Our Website</h2>
                </div> -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="atas col-md-8" style="height: 3%; width: 80%;">
                <img src="../img/41.jpg" class="card-img-top mt-3" >
                <div class="centered">
                    <h2 class="teks">Find your job</h2>
                    <h5>Halo fresh graduate polinema, Selamat datang di website resmi Golek Kerjo 
                    Golek kerjo adalah aplikasi karya mahasiswa Politeknik Negeri Malang yang 
                    memudahkan lulusan mahasiswa jurusan Teknologi Informasi untuk menentukan 
                    profesi kerja mereka setelah lulus nanti</h5>
                </div>
            </div>
        </div><br><br>

        <section class="how">
                <h1 class="" style="text-align:center;">How it works</h1>
            <div class="isi row container-fluid" style="text-align:center;">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <img src="../img/form.png">
                    <h5 style="text-align:left;">Mengisi form pada halaman cari pekerjaan</h5>
                </div>
                <div class="col-md-2">
                    <img src="../img/form.png">
                    <h5 style="text-align:left;">Data akan di proses sesuai dengan form yang telah diisi</h5>
                </div>
                <div class="col-md-2">
                    <img src="../img/form.png">
                    <h5 style="text-align:left;">Hasil Pekerjaan yang cocok sesuai dengan form</h5>
                </div>
            </div>
        </section><br><br>

        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-2">
                    <div class="row">
                        <a href="listPekerjaan.php" style="text-decoration: none;">
                            <div class="card kotak4" type="button" style="width: 100%; height:100%">
                                <img src="../img/job.png" class="card-img-top mt-3" style="height: 30%; width: 30%;">
                                <h5 class="card-title pl-2 mt-3">List Pekerjaan</h5>
                            </div>
                        </a>
                    </div>
                    <pre></pre><pre></pre>

                    <div class="row">
                        <a href="listPerusahaan.php" style="text-decoration: none;">
                            <div class="card kotak3" type="button" style="width: 100%; height:100%">
                                <img src="../img/office.png" class="card-img-top mt-3" style="height: 30%; width: 30%;">
                                    <h5 class="card-title pl-2 mt-3">List Perusahaan</h5>
                            </div>
                        </a>
                    </div>
                </div>&emsp;

                <div class="col-md-2">
                    <div class="row ">
                        <a href="cariPekerjaan.php" style="text-decoration: none;">
                            <div class="card kotak2" type="button" style="width: 100%; height:100%"><br>
                                <img src="../img/cari.png" class="card-img-top mt-5" style="height: 50%; width: 50%;">
                                <h4 class="card-title pt-4 mt-5" style="text-align: center; text-size: 10px;">Cari Pekerjaan</h4>
                            </div>
                        </a>
                    </div>
                </div>&emsp;

                <div class="col-md-2">
                    <div class="row">
                        <a href="history.php" style="text-decoration: none;">
                            <div class="card kotak1" type="button" style="width: 100%; height:100%">
                                <img src="../img/history.png" class="card-img-top mt-3" style="height: 30%; width: 30%;">
                                    <h5 class="card-title pl-2 mt-3">History</h5>
                            </div>
                        </a>
                    </div>
                    <pre><pre></pre></pre>

                    <div class="row">
                        <a href="aboutUs.php" style="text-decoration: none;">
                            <div class="card kotak5" type="button" style="width: 100%; height:100%">
                                <img src="../img/about.png" class="card-img-top mt-3" style="height: 30%; width: 30%;">
                                    <h5 class="card-title pl-2 mt-3">About Us</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <?php include 'bahan.php';?>
</body>
</html>