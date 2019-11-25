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
                    <?php if($mess != ''){ ?>
                        <h5 class="text-danger border border-danger rounded-pill pl-2 pr-2 pb-2 pt-2 bg-light"><?php echo $mess; ?></h5>
                    <?php } ?>
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
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-laki" required>
                            <label class="form-check-label" style="font-size: 23px;" for="gender">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan" required>
                            <label class="form-check-label" style="font-size: 23px;" for="gender">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="IPK" style="font-size: 25px;">Indeks Prestasi Kumulatif</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">IPK</span>
                            </div>
                            <input type="number" step="0.01" class="form-control" placeholder="Masukkan IPK anda" id="ipk" name="ipk" aria-label="Username" required>
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
                                <option value="0.25">D1</option>
                                <option value="0.5">D2</option>
                                <option value="0.75">D3</option>
                                <option value="1">D4 / S1</option>
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
                                <option value="">Pilih Akreditasi</option>
                                <option value="1">A</option>
                                <option value="0.75">B</option>
                                <option value="0.5">C</option>
                                <option value="0.25">Tidak Terakreditasi</option>
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
                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="1" required>
                            <label class="form-check-label" style="font-size: 23px;"  for="bahasa1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="2">
                            <label class="form-check-label" style="font-size: 23px;"  for="bahasa2">Tidak</label>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit"/>
                </form>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include 'bahan.php';?>
</body>
</html>