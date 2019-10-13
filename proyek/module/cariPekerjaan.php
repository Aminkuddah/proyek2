<?php
include '../helper/connection.php';

if(isset($_GET['error'])){
    $mess="{$_GET['error']}";
}else{
    $mess="";
}
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/cariPekerjaan.css">
</head>
<body>
    <div id="home" class="container-fluid">
        <div class="row">    
            <div class="col-lg-2 p-3"></div>
            <div class="col-lg-8 p-3">
                <div class="navbar navbar-light">
                <a href="index.php" style="text-decoration: none; color:white;"><h1>Cari Pekerjaan</h1></a>
                    <h5 class="text-danger border border-danger rounded-pill pl-2 pr-2 pb-2 pt-2 bg-light"><?php echo $mess; ?></h5>
                    <div class="sosmed ">
                        <a href="index.php"><img src="../img/facebook.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/twitter.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/wordpress.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/linkedin.png" class="sosmedLogo" height="35" width="35"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="../proccess/actionSPK.php" method="POST" enctype="multipart/form-data">
                <h2 style="text-align: center;">Isilah form di bawah terlebih dahulu</h2>
                    <div class="form-group">
                    <label for="nama" style="font-size: 25px;">Nama</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nama</span>
                            </div>
                            <input type="input" class="form-control" placeholder="Masukkan nama anda" id="nama" name="nama" aria-label="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Usia" style="font-size: 25px;">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="laki" required>
                            <label class="form-check-label" style="font-size: 23px;" for="gender1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="perempuan" required>
                            <label class="form-check-label" style="font-size: 23px;" for="gender2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="IPK" style="font-size: 25px;">Indeks Prestasi Kumulatif</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">IPK</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Masukkan IPK anda" id="ipk" name="ipk" aria-label="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikanTerakhir" style="font-size: 25px;">Pendidikan Terakhir</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="pendidikan">Pendidikan Terakhir</label>
                            </div>
                            <select class="custom-select" id="pendidikanTerakhir" name="pendidikanTerakhir" required>
                                <option value="">Pilih pendidikan terakhir anda</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                                <option value="sarjana">SARJANA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikanTerakhir" style="font-size: 25px;">Akreditasi</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="pendidikan">Akreditasi Kampus</label>
                            </div>
                            <select class="custom-select" id="akreditasi" name="akreditasi" required>
                                <option value="">Pilih pendidikan terakhir anda</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                                <option value="">Tidak Terakreditasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Usia" style="font-size: 25px;">Usia</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Usia</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Masukkan Umur Anda" id="usia" name="usia" aria-label="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Usia" style="font-size: 25px;">Kemampuan Berbahasa inggris</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa1" value="ya" required>
                            <label class="form-check-label" style="font-size: 23px;"  for="bahasa1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa2" value="tidak">
                            <label class="form-check-label" style="font-size: 23px;"  for="bahasa2">Tidak</label>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit"/>
                </form>
            </div>
        </div>
    </div><br><br><br><br>
    <footer class="footer">
        <div class="atas container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="namaWebsite col-md-2"><br>
                    <h4 style="color:white;">Golek Kerjo</h4><br>
                    <p><small>We connect university students with their own <span style="color:white;"><strong>Destiny</strong></span></small></p>
                </div>
                <div class="col-md-1"><br>
                    <h4 style="color:white;">Why GK</h4>
                    <a href="#"><p style="color: #9b9b9b;"><small>Graduates</small></p></a>
                    <a href="#"><p style="color: #9b9b9b;"><small>Working</small></p></a>
                    <a href="#"><p style="color: #9b9b9b;"><small>Tips</small></p></a>
                    <a href="#"><p style="color: #9b9b9b;"><small>Company</small></p></a>
                </div>
                <div class="features col-md-1"><br>
                    <h4 style="color:white;">Explore</h4>
                    <div class="kontenFeatures">
                        <a href="cariPekerjaan.php"><p style="color: #9b9b9b;"><small>Cari Pekerjaan</small></p></a>
                        <a href="listPekerjaan.php"><p style="color: #9b9b9b;"><small>List Pekerjaan</small></p></a>
                        <a href="listPerusahaan.php"><p style="color: #9b9b9b;"><small>List Perusahaan</small></p></a>
                        <a href="contactUs.php"><p style="color: #9b9b9b;"><small>Contact Us</small></p></a>
                        <a href="aboutUs.php"><p style="color: #9b9b9b;"><small>About Us</small></p></a>
                    </div>
                    
                </div>
                <div class="col-md-1"><br>
                    <h4 style="color:white;">Follow</h4>
                    <a href="#"><p style="color: #9b9b9b;"><small>Facebook</small></p></a>
                    <a href="#"><p style="color: #9b9b9b;"><small>Twitter</small></p></a>
                    <a href="#"><p style="color: #9b9b9b;"><small>LinkedIn</small></p></a>

                    <h4 style="color:white;">Need Help</h4>
                    <a href="#"><p style="color: #9b9b9b;"><small>aminkuddah@gmail.com</small></p></a>
                    <a href="#"><p style="color: #9b9b9b;"><small>085731729674</small></p></a>

                </div>
                <div class="col-md-1"><br>
                    <h4 style="color:white;">Need Help</h4>
                    <a href="#"><p style="color: #9b9b9b;"><small>aminkuddah@gmail.com</small></p></a>
                    <a href="#"><p style="color: #9b9b9b;"><small>085731729674</small></p></a>
                </div>
            </div>
        </div>
        <div class="bawah subfooter clearfix">
            <div class="" style="text-align: center;"><br>
                <label class="namaWebsite">2019 Golek Kerjo. All Rights Reserved</label>
            </div><br>
        </div>
    </footer>
</body>
</html>