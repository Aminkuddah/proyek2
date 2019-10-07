<?php
include 'helper/connection.php';

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
                    <h1>Golek Kerjo</h1>
                    <div class="sosmed ">
                        <a href="index.php"><img src="../img/fb.svg" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/twitter.svg" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/google.svg" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/linkedin.png" class="sosmedLogo" height="35" width="35"></a>
                    </div>
                </div> <br>
                <div class="helloFresh">
                    <h1 class="text-align:center">Hello Fresh Graduate!</h1> 
                    <h2 class="text-align:center">Welcome To Our Website</h2>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-2">
                    <div class="row">
                        <a href="contactUs.php">
                            <div class="card kotak1 border border-success" type="button" style="width: 210%; height:100%">
                                <img src="../img/contact.svg" class="card-img-top mt-3" style="color:white;" height="80" width="80">
                                    <h5 class="card-title pl-2 mt-3">Contact Us</h5>
                            </div>
                        </a>
                    </div>
                    <pre></pre>
                    <pre></pre>

                    <div class="row">
                        <a href="listPerusahaan.php">
                            <div class="card kotak3" type="button" style="width: 210%; height:100%">
                                <img src="../img/office.svg" class="card-img-top mt-3" height="80" width="80">
                                    <h5 class="card-title pl-2 mt-3">List Perusahaan</h5>
                            </div>
                        </a>
                    </div>
                </div>&emsp;

                <div class="col-md-2">
                    <div class="row ">
                        <a href="cariPekerjaan.php">
                            <div class="card kotak2" type="button" style="width: 260%; height:103%"><br>
                                <img src="../img/searchjob.svg" class="card-img-top mt-5" height="120" width="120">
                                    <h5 class="card-title pt-4 mt-5" style="text-align: center; text-size: 20px;">Cari Pekerjaan</h5>
                            </div>
                        </a>
                    </div>
                </div>&emsp;

                <div class="col-md-2">
                    <div class="row">
                        <a href="listPekerjaan.php">
                            <div class="card kotak4" type="button" style="width: 100%; height:100%">
                                <img src="../img/listjob.svg" class="card-img-top mt-3" height="80" width="80">
                                    <h5 class="card-title pl-2 mt-3">List Pekerjaan</h5>
                            </div>
                        </a>
                    </div><pre><pre></pre></pre>
                    

                    <div class="row">
                        <a href="aboutUs.php">
                            <div class="card kotak5" type="button" style="width: 212%; height:100%">
                                <img src="../img/about.svg" class="card-img-top mt-3" height="80" width="80">
                                    <h5 class="card-title pl-2 mt-3">About Us</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        
        <!-- <div class="row">
            <div class="col-lg-3"></div>
                <div class="col-lg-2"><br>
                    <a href="contactUs.php">
                    <div class="card kotak1" type="button" style="width: 80%; height:75%">
                        <img src="../img/contact.svg" class="card-img-top mt-3" style="color:white;" height="80" width="80">
                        <div class="card-body">
                            <h5 class="card-title pt-1">Contact Us</h5>
                        </div>
                    </div></a>
                </div>
                
                <div class="col-lg-2 mr-5"><br>
                    <a href="cariPekerjaan.php">
                    <div class="card kotak2" type="button" style="width: 100%; height:175%">
                        <img src="../img/searchjob.svg" class="card-img-top mt-5" height="100" width="100">
                    </div></a>
                </div>

                <div class="col-lg-2"><br>
                <a href="listPerusahaan.php">
                <div class="card kotak3" type="button" style="width: 80%; height:75%">
                        <img src="../img/office.svg" class="card-img-top mt-3" height="80" width="80">
                        <div class="card-body">
                            <h5 class="card-title">List Perusahaan</h5>
                        </div>
                    </div></a>
                    </div>
                </div>

            <div class="row">
                <div class="col-lg-3">
                </div>

                <div class="col-lg-2"><br>
                    <a href="listPekerjaan.php">
                    <div class="card kotak4" type="button" style="width: 80%; height:75%">
                        <img src="../img/listjob.svg" class="card-img-top mt-3" height="57" width="57">
                        <div class="card-body">
                            <h5 class="card-title">List Pekerjaan</h5>
                        </div>
                    </div></a>
                </div>

                <div class="col-lg-2 mr-5"><br>
                <a href="cariPekerjaan.php"><div class="card-body">
                        <h5 class="card-title" style="color:white;">Cari Pekerjaan</h5>
                    </div></a>
                </div>

                <div class="col-lg-2"><br>
                    <a href="aboutUs.php">
                        <div class="card kotak5" type="button" style="width: 80%; height:75%">
                            <img src="../img/about.svg" class="card-img-top mt-3" height="80" width="80">
                            <div class="card-body">
                                <h5 class="card-title">About Us</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div> -->
        </div>
    </div>
</body>
</html>