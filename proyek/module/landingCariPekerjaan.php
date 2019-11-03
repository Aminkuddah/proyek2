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
        <!-- <div class="row">
            <div class="col-md-1"></div>
            <div class="row pt-5">
                <div class="col-md-1"></div>
                <div class="card telkom border border-info" style="width: 100rem;">
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
                                    <div class="row">
                                        <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-10">
                                            <strong><Label class="pt-2" style="font-size:35px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="row pt-5">
                <div class="col-md-1"></div>
                <div class="card telkom border border-info" style="width: 100rem;">
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
                                    <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo">Lihat Lowongan Perusahaan</button>									
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-10">
                                            <strong><Label class="pt-2" style="font-size:35px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row cardPekerjaan">
            <div class="col-md-1"></div>
            <div class="row pt-5">
                <div class="col-md-1"></div>
                <div class="card card1" style="width: 30rem;">
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
                                    <div class="row">
                                        <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-8">
                                            <strong><Label class="pt-2" style="font-size:25px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5 pl-5">
                <div class="col-md-1"></div>
                <div class="card card2" style="width: 30rem;">
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
                                    <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo">Lihat Lowongan Perusahaan</button>									
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-8">
                                            <strong><Label class="pt-2" style="font-size:25px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5 pl-5">
                <div class="col-md-1"></div>
                <div class="card card3" style="width: 30rem;">
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
                                    <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree">Lihat Lowongan Perusahaan</button>									
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-8">
                                            <strong><Label class="pt-2" style="font-size:25px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- baru -->
        <div class="row cardPekerjaan">
            <div class="col-md-1"></div>
            <div class="row pt-5">
                <div class="col-md-1"></div>
                <div class="card card1" style="width: 30rem; position: absolute;">
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
                                    <div class="row">
                                        <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-8">
                                            <strong><Label class="pt-2" style="font-size:25px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <!-- dua -->
            <div class="row pt-5 pl-5">
                <div class="col-md-5"></div>
                <div class="card card2" style="width: 30rem; position: absolute;">
                    <div class="card-body konten">
                        <h3 class="card-title" style="color:black">Nama Pekerjaan</h3>
                        <hr>
                        <p style="color:black">Deskripsi <br> Ini Deskripsi Pekerjaannya lorem</p>
                        <p style="color:black">Syarat pekerjaan <br> ini sayrat pekerjaannya</p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo">Lihat Lowongan Perusahaan</button>									
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-8">
                                            <strong><Label class="pt-2" style="font-size:25px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <!-- tiga -->
            <div class="row kotak3 pt-5 pl-5">
                <div class="col-md-1"></div>
                <div class="card card3" style="width: 30rem;">
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
                                    <button class="btn btn-success" type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree">Lihat Lowongan Perusahaan</button>									
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="logoPerusahaan pl-3">
                                            <img src="../img/logo perusahaan/1/Radya Labs.png" alt="" style="height:70px; width:70px;">
                                        </div><br>
                                        <div class="namaPerusahaan col-md-8">
                                            <strong><Label class="pt-2" style="font-size:25px; text-align:left">Ini Nama Perusahaan</Label></strong>
                                        </div><br><br><br>
                                        <div class="deskripsiPerusahaan col-md-12">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam perferendis, similique ratione maxime cumque quidem sapiente eius consequatur illo officiis ea, molestias, culpa quaerat temporibus obcaecati rerum excepturi adipisci dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Link Website</a></p>
                                </div>
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