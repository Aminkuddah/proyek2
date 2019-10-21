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
    <link rel="stylesheet" type="text/css" href="../css/listPerusahaan.css">
</head>
<body>
    <div id="home" class="container-fluid">
        <div class="row">    
            <div class="col-lg-2 p-3"></div>
            <div class="col-lg-8 p-3">
                <div class="navbar navbar-light">
                    <a href="index.php" style="text-decoration: none; color:white;"><h1>List Perusahaan</h1></a>
                    <div class="sosmed ">
                        <a href="index.php"><img src="../img/facebook.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/twitter.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/wordpress.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/linkedin.png" class="sosmedLogo" height="35" width="35"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 border border-success rounded bg-light">
            <div class="row m-3">
                <table class="table table-stripped text-center" id="table_id">
                    <thead>
                        <tr>
                            <th class='align-middle'>#</th>
                            <th class='align-middle'>List Perusahaan</th>
                            <th class='align-middle'>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM tb_perusahaan";
                        $result = mysqli_query($con, $query);
                        if(mysqli_num_rows($result) > 0){
                            $index = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td class='align-middle'><?php echo $index++; ?></td>
                                    <td class='align-middle'><?php echo $row["nama_perusahaan"]; ?></td>
                                    <td class='align-middle'><?php echo $row["lokasi"]; ?></td>
                                </tr>
                        <?php }
                        }else{ ?>
                            <tr>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosongan</td>
                            <tr>
                        <?php
                        }
                    mysqli_close($con); 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>