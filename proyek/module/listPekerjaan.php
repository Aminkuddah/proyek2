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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="home" class="container-fluid">
        <!-- <div class="row">    
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
        </div> -->

        <nav class="navbar navbar-expand-lg navbar-dark" style="font-size: 20px; font-family: Roboto;">
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="listPekerjaan.php">List Pekerjaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listPerusahaan.php">List Perusahaan</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
                <ul class="navbar-nav mr-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="cariPekerjaan.php">Cari Pekerjaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About Us</a>
                    </li>
                </ul>
            </div>
        </nav><br><br>

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

                            <!-- <div class="tinjau card border">
                                <h2 style="color:black;"><?php echo $index++; ?>  <?php echo $row["nama_kategori"]; ?>
                                <button type="button" id="read<?php echo $index ?>" onClick="read(<?php echo $index ?>)" class="bg bg-warning" style="color:white; float:right; width:20%;">Read More</button></h2>
                            </div>

                            <p style="color:black; font-size:25px;">
                                <span style="display:none" class="more" id="more<?php echo $index ?>"><?php echo $row["keterangan"]; ?></span></p> -->

                            <!-- <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $row["nama_kategori"]; ?>
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <?php echo $row["keterangan"]; ?>
                                    </div>
                                    </div>
                                </div>
                            </div> -->
                            
                            <button type="button" class="collapsible">
                                <h2><?php echo $row["nama_kategori"]; ?>    
                            </button>
                            <div class="content">
                                <p><?php echo $row["keterangan"]; ?></p>
                            </div>

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
            <br>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- <script> 
        $(document).ready(function(){
            $(".tinjau").click(function(){
                $(".konten").slideToggle("slow");
            });
        });
    </script>

    <script type="text/javascript">
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
    </script> -->

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
    </script>

    <?php include 'bahan.php';?>
</body>
</html>