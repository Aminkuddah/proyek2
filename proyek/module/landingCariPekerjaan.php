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
    <link rel="stylesheet" type="text/css" href="../css/landingCariPekerjaan.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="home" class="container-fluid">
        <div class="row">    
            <div class="col-lg-2 p-3"></div>
            <div class="col-lg-8 p-3">
                <div class="navbar navbar-light">
                <a href="index.php" style="text-decoration: none; color:white;"><h1>Hasil Pekerjaan</h1></a>
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

        <div class="row pt-5 mt-5">
            <div class="col-md-1"></div>
            <div class="card telkom border border-info" style="width: 30rem;">
                <div class="card-body konten">
                    <h3 class="card-title" style="color:black">Nama Pekerjaan</h3>
                    <hr>
                    <p style="color:black">Deskripsi <br> Ini Deskripsi Pekerjaannya</p>
                    <p style="color:black">Syarat pekerjaan <br> ini sayrat pekerjaannya</p>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">Lihat Lowongan Perusahaan</button>									
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card telkom border border-info ml-5" style="width: 30rem;">
                <div class="card-body konten">
                    <h3 class="card-title" style="color:black">Nama Pekerjaan</h3>
                    <hr>
                    <p style="color:black">Deskripsi <br> Ini Deskripsi Pekerjaannya</p>
                    <p style="color:black">Syarat pekerjaan <br> ini sayrat pekerjaannya</p>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">Lihat Lowongan Perusahaan</button>									
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card telkom border border-info ml-5" style="width: 30rem;">
                <div class="card-body konten">
                    <h3 class="card-title" style="color:black">Nama Pekerjaan</h3>
                    <hr>
                    <p style="color:black">Deskripsi <br> Ini Deskripsi Pekerjaannya</p>
                    <p style="color:black">Syarat pekerjaan <br> ini sayrat pekerjaannya</p>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">Lihat Lowongan Perusahaan</button>									
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                            <div class="card-body">
                                <p>Perusahaan 1</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php include 'bahan.php';?>
</body>
</html>