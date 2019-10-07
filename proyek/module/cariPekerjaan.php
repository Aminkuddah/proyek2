<!DOCTYPE html>
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
                    <h1>Cari Pekerjaan</h1>
                    <div class="sosmed ">
                        <a href="index.php"><img src="../img/fb.svg" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/twitter.svg" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/google.svg" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/linkedin.png" class="sosmedLogo" height="35" width="35"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form>
                <h2 style="text-align: center;">Isilah form di bawah terlebih dahulu</h2>
                    <div class="form-group">
                    <label for="nama">Nama</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nama</span>
                            </div>
                            <input type="input" class="form-control" placeholder="Masukkan nama anda" aria-label="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="IPK">Indeks Prestasi Kumulatif</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">IPK</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Masukkan IPK anda" aria-label="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikanTerakhir">Pendidikan Terakhir</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="pendidikan">Pendidikan Terakhir</label>
                            </div>
                            <select class="custom-select" id="pendidikanTerakhir" required>
                                <option value="">Pilih pendidikan terakhir anda</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                                <option value="sarjana">SARJANA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Usia">Usia</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Usia</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Masukkan Umur Anda" aria-label="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Usia">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="laki" required>
                            <label class="form-check-label" for="gender1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="perempuan">
                            <label class="form-check-label" for="gender2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Usia">Kemampuan Berbahasa inggris</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="ya" required>
                            <label class="form-check-label" for="bahasa1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="tidak">
                            <label class="form-check-label" for="bahasa2">Tidak</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 20%;">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <img src="../img/caripekerjaan.jpg" height="80%" width="100%" > -->
</body>
</html>