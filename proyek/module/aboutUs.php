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
    <link rel="stylesheet" type="text/css" href="../css/aboutUs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Classy Contact Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
    <div id="home" class="container-fluid">
        <!-- <div class="row">
            <div class="col-lg-2 p-3"></div>
            <div class="col-lg-8 p-3">
                <div class="navbar navbar-light">
                    <h1>About Us</h1>
                    <div class="sosmed ">
                        <a href="index.php"><img src="../img/facebook.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/twitter.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/wordpress.png" class="sosmedLogo" height="35" width="35"></a>
                        <a href="index.php"><img src="../img/linkedin.png" class="sosmedLogo" height="35" width="35"></a>
                    </div>
                </div>
            </div>
        </div><br> -->
        <div class="atas"><br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <img src="../img/judul1.png" alt="">
                </div>
                <div class="col-md-5">
                <?php if($mess != ''){ ?>
                        <h5 class="text-danger border border-danger rounded-pill pl-2 pr-2 pb-2 pt-2 bg-light"><?php echo $mess; ?></h5>
                    <?php } ?>
                    <h5 style="text-align:gravity">Golek kerjo adalah aplikasi karya mahasiswa Politeknik Negeri Malang yang 
                    memudahkan lulusan mahasiswa jurusan Teknologi Informasi untuk menentukan profesi kerja mereka setelah lulus nanti</h5>
                </div>
            </div><br>
        </div><br><br>

        <div class="tengah">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="ourStory">Our Story</label>
                    <h5 style="text-align:gravity">
                    Jadi, aplikasi golek kerjo ini aplikasi karya mahasiswa Politeknik Negeri Malang yang
                    memudahkan lulusan mahasiswa jurusan Teknologi Informasi untuk menentukan profesi kerja 
                    mereka setelah lulus nanti. Dan juga untuk mencari referensi pekerjaan di perusahaan-perusahaan 
                    pada bidang IT.</h5>
                </div>
            </div>
        </div><br>

        <div class="bawah">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="ourStory">Our Difference</label>
                    <h5 style="text-align:gravity">
                    Perbedaan website Golek Kerjo dengan website lain yaitu terletak pada pemilihan posisi kerja, sekarang
                    banyak website yang menyediakan informasi tentang lowongan pekerjaan dan lain-lain. pada website Golek Kerjo ini
                    user dapat mencocokkan posisi kerja yang sesuai dengan passion dan nilai mata kuliah yang sudah ditempuh sebelumnya,
                    dimana hal ini menjadi tolak ukur perekrutan perusahaan dalam mencari pekerja sesuai dengan bidang-bidang itu sendiri.</h5>
                </div>
            </div>
        </div><br>

        <div id="flip">
            <button class="btn btn-danger" style="width:20%; font-family:lato;">Our Leader</button>
        </div>
        <div id="panel">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <label for="ourStory">Leadership</label><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">   
                    <img src="../img/abda.jpeg" class="gambar" alt=""><br>
                    <label for="">Abdallah Darussalam Candra</label>
                    <h5>CEO</h5>
                </div>
                <div class="col-md-3">   
                    <img src="../img/amin.jpeg" class="gambar" alt=""><br>
                    <label for="">Amin Anis Kuddah</label>
                    <h5>CEO</h5>
                </div>
                <div class="col-md-3">   
                    <img src="../img/adhe.jpeg" class="gambar" alt=""><br>
                        <label for="">Rahardhiyan Wahyu Putra</label>
                        <h5>CEO</h5>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="container">
		<div class="left-w3">
			<h2>Contact Us!</h2>
			<form action="../proccess/actionSendMail.php" method="POST">
				<div class="agile1">
					<h3>Name</h3>
					<input type="text" name="name" id="name" class="name" placeholder="" required="">
				</div>
				<div class="agile1">
					<h3>Company</h3>
					<input type="text" name="company" id="company" class="company" placeholder="" required="">
				</div>
				<div class="agile1">
					<h3>Telephone</h3>
					<input type="text" name="telephone" id="telephone" class="telephone" placeholder="" required="">
				</div>
				<div class="agile1">
					<h3>Email</h3>
					<input type="text" name="email" id="email" class="email" placeholder="" required="">
				</div>
				<div class="agile1">
					<h3>Message</h3>
					<textarea  name="your_message" id="your_message" placeholder=""  required=""></textarea>
				</div>	
				<input type="submit" value="Send Message">
			</form>
		</div>
		<div class="right-w3ls">
            <h3 class="w3ls">Our Location</h3>
            <div class="agile1">
                <h3>Reach Us</h3>
                <div class="map">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=politeknik%20negeri%20malang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/"></a>
                </div>
            </div>
		</div>
		<div class="clear"></div>	
	</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <script> 
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
    </script><br>
    

    <?php include 'bahan.php';?>
</body>
</html>