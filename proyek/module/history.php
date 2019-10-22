<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/history.css">
</head>
<body>
    <div id="home" class="container-fluid">
        <div class="row">    
            <div class="col-lg-2 p-3"></div>
            <div class="col-lg-8 p-3">
                <div class="navbar navbar-light">
                    <h1>History</h1>
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-stripped text-center rounded bg-light">
                    <thead>
                        <tr>
                            <th class='align-middle'>#</th>
                            <th class='align-middle'>Nama</th>
                            <th class='align-middle'>Hasil1</th>
                            <th class='align-middle'>Hasil2</th>
                            <th class='align-middle'>Hasil3</th>
                            <th class='align-middle'>Usia</th>
                            <th class='align-middle'>Gender</th>
                            <th class='align-middle'>Bahasa inggirs</th>
                            <th class='align-middle'>Ipk</th>
                            <th class='align-middle'>Pendidikan terakhir</th>
                            <th class='align-middle'>Akreditasi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div> 

    <?php include 'bahan.php';?>
</body>
</html>