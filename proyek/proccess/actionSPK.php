<?php
include '../helper/connection.php';

$error = "";
$nama = $_POST["nama"];
$ipk = $_POST["ipk"];
$pendidikan = $_POST["pendidikanTerakhir"];
$usia = $_POST["usia"];
$gender = $_POST["gender"];
$bahasa = $_POST["bahasa"];

if (!empty($nama) && !empty($ipk) && !empty($pendidikan) && !empty($usia) && !empty($gender) && !empty($bahasa)) {
    if ( $ipk>"4" || $ipk<"0"){
        $error = urlencode("IPK anda diluar batas");
        header("Location: ../module/cariPekerjaan.php?error=$error");
    }else if ( $usia>"60" || $usia<"10"){
        $error = urlencode("Usia anda diluar batas");
        header("Location: ../module/cariPekerjaan.php?error=$error");
    }else{
        $error = urlencode("Berhasil");
        header("Location: ../module/cariPekerjaan.php?error=$error");
    }
} else {
    $error = urlencode("Lengkapi semua data");
    header("Location: ../module/cariPekerjaan.php?error=$error");
}

mysqli_close($con);
?>