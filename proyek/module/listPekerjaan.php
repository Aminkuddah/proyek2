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
    <link rel="stylesheet" type="text/css" href="../css/listPekerjaan.css">
</head>
<body>
    <div id="home" class="container-fluid">
        <div class="row">    
            <div class="col-lg-2 p-3"></div>
            <div class="col-lg-8 p-3">
                <div class="navbar navbar-light">
                    <a href="index.php" style="text-decoration: none; color:white;"><h1>List Pekerjaan</h1></a>
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
            <div class="row m-3"></div>
            <h2 style="color:black;">List Pekerjaan</h2>
                <?php
                    $query = "SELECT * FROM tb_pekerjaan";
                    $result = mysqli_query($con, $query);
                    if(mysqli_num_rows($result) > 0){
                        $index = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            ?>

                            <div class="tinjau card border">
                                <h2 style="color:black;"><?php echo $index++; ?>  <?php echo $row["nama_kategori"]; ?>
                                <button type="button" id="read<?php echo $index ?>" onClick="read(<?php echo $index ?>)" class="bg bg-warning" style="color:white; float:right; width:20%;">Read More</button></h2>
                            </div>
                            <!-- <div class="konten">
                                <p style="color:black;"><?php echo $row["keterangan"]; ?> </p>
                            </div> -->

                            <!-- <h1 style="color:black">Lorem Ipsum</h1> -->
                            <p style="color:black">
                                <span style="display:none" class="more" id="more<?php echo $index ?>"><?php echo $row["keterangan"]; ?></span></p>
                            <!-- <button type="button" id="read" onClick="read()">Read More</button> -->
                    <?php }
                    }else{ ?>
                        <tr>
                            <td class='align-middle'>Data Kosong</td>
                            <td class='align-middle'>Data Kosong</td>
                        <tr>
                    <?php
                    }
                mysqli_close($con); 
                ?>
            
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <script> 
        $(document).ready(function(){
            $(".tinjau").click(function(){
                $(".konten").slideToggle("slow");
            });
        });
    </script>

    <script type="text/javascript">
        // var i=0;
        let isOpen = false;

        function read(i){
            let idRead = "read" + i;
            let idMore = "more" + i;

            if(!isOpen){
                document.getElementById(idMore).style.display = "inline";
                document.getElementById(idRead).innerHTML = "Read less";
                isOpen = true;
            }
            else{
                document.getElementById(idMore).style.display = "none";
                document.getElementById(idRead).innerHTML = "Read more";
                isOpen = false;
            }
        }
    </script>

    <?php include 'bahan.php';?>
</body>
</html>