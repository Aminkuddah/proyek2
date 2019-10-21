<?php
include '../helper/connection.php';

$error = "";
$nama = $_POST["nama"];
$ipk = $_POST["ipk"];
$pendidikan = $_POST["pendidikanTerakhir"];
$usia = $_POST["usia"];
$akreditasi = $_POST["akreditasi"];
$gender = $_POST["gender"];
$bahasa = $_POST["bahasa"];

if (!empty($nama) && !empty($ipk) && !empty($pendidikan) && !empty($usia) && !empty($gender) && !empty($bahasa)) {
    if ( $ipk>"4" || $ipk<"0"){
        $error = urlencode("IPK anda diluar batas");
        header("Location: ../module/cariPekerjaan.php?error=$error");
    }else if ( $usia>"40" || $usia<"20"){
        $error = urlencode("Usia anda diluar batas");
        header("Location: ../module/cariPekerjaan.php?error=$error");
    }else{
        $tes_query = "SELECT * FROM tb_pekerjaan";
        $result = mysqli_query($con, $tes_query);

        if( $usia<"25" ){
            $nilai = 1;
        }else if( $usia<"31"){
            $nilai = 0.75;
        }else{
            $nilai = 0.5;
        }

        if( $ipk<"2.51" ){
            $nilai2 = 0.25;
        }else if( $ipk<"3.01"){
            $nilai2 = 0.5;
        }else if( $ipk<"3.51" ){
            $nilai2 = 0.75;
        }else{
            $nilai2 = 1;
        }

        if (mysqli_num_rows($result) != 0){
            while($row = mysqli_fetch_assoc($result)){
                $hitungPendidikan = $row["pendidikan_terakhir"] * $pendidikan;
                $hitungIPK = $row["ipk"] * $nilai2;
                $hitungUsia = $row["usia"] * $nilai;
                $hitungAkreditasi = $row["akreditasi"] * $akreditasi;
                $hitungBahasa = $row["b_inggris"] * $bahasa;

                $hasilTotal = $hitungPendidikan + $hitungIPK + $hitungUsia + $hitungAkreditasi + $hitungBahasa;
            }
        }    
    }    
} else {
    $error = urlencode("Lengkapi semua data");
    header("Location: ../module/cariPekerjaan.php?error=$error");
}

mysqli_close($con);
?>