<?php
include '../helper/connection.php';

if(isset($_GET['pesan'])){
    $mess="<p> {$_GET['pesan']}</p>";
}else{
    $mess="";
}
?>

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
                    <tbody>
                    <?php
                        $query = "SELECT * FROM tb_history";
                        $result = mysqli_query($con, $query);
                        if(mysqli_num_rows($result) > 0){
                            $index = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                // $id_file=$row["link"];
                                ?>
                                <tr>
                                    <td class='align-middle'><?php echo $index++; ?></td>
                                    <td class='align-middle'><?php echo $row["nama"]; ?></td>
                                    <td class='align-middle'><?php echo $row["hasil1"]; ?></td>
                                    <td class='align-middle'><?php echo $row["hasil2"]; ?></td>
                                    <td class='align-middle'><?php echo $row["hasil3"]; ?></td>
                                    <td class='align-middle'><?php echo $row["usia"]; ?></td>
                                    <td class='align-middle'><?php echo $row["gender"]; ?></td>
                                    <td class='align-middle'><?php echo $row["b_inggris"]; ?></td>
                                    <td class='align-middle'><?php echo $row["ipk"]; ?></td>
                                    <td class='align-middle'><?php echo $row["penTerakhir"]; ?></td>
                                    <td class='align-middle'><?php echo $row["akreditasi"]; ?></td>
                                    <!-- <td class='align-middle'><a href='' class='btn btn-primary'>Open Website</a></td> -->
                                </tr>
                        <?php }
                        }else{ ?>
                            <tr>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
                                <td class='align-middle'>Data Kosong</td>
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

    <?php include 'bahan.php';?>
</body>
</html>