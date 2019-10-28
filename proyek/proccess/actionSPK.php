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
$i = 0;

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
            $nilaiUsia = 1;
        }else if( $usia<"31"){
            $nilaiUsia = 0.75;
        }else{
            $nilaiUsia = 0.5;
        }

        if( $ipk<"2.51" ){
            $nilaiIPK = 0.25;
        }else if( $ipk<"3.01"){
            $nilaiIPK = 0.5;
        }else if( $ipk<"3.51" ){
            $nilaiIPK = 0.75;
        }else{
            $nilaiIPK = 1;
        }

        if (mysqli_num_rows($result) != 0){
            while($row = mysqli_fetch_assoc($result)){
                $hitungPendidikan = $row["pendidikan_terakhir"] * $pendidikan;
                $hitungIPK = $row["ipk"] * $nilaiIPK;
                $hitungUsia = $row["usia"] * $nilaiUsia;
                $hitungAkreditasi = $row["akreditasi"] * $akreditasi;
                $hitungBahasa = $row["b_inggris"] * $bahasa;

                $hasilTotal = $hitungPendidikan + $hitungIPK + $hitungUsia + $hitungAkreditasi + $hitungBahasa;
                $hasil[$i] = $hasilTotal;
                $pickHasil[$i] = $i;
                $i++;
            }

            if($bahasa == 1){
                $nilaiBahasa = "Ya";
            }else{
                $nilaiBahasa = "Tidak";
            }

            if($pendidikan == 1){
                $nilaiPendidikan = "D4 / S1";
            }else if($pendidikan == 0.75){
                $nilaiPendidikan = "D3";
            }else if($pendidikan == 0.5){
                $nilaiPendidikan = "D2";
            }else if($pendidikan == 0.25){
                $nilaiPendidikan = "D1";
            }

            if($akreditasi == 1){
                $nilaiAkreditasi = "A";
            }else if($akreditasi == 0.75){
                $nilaiAkreditasi = "B";
            }else if($akreditasi == 0.5){
                $nilaiAkreditasi = "C";
            }else if($akreditasi == 0.25){
                $nilaiAkreditasi = "Tidak Terakreditasi";
            }

            array_multisort($hasil, $pickHasil);
            // var_dump($hasil);
            // echo "<br>";
            // var_dump($pickHasil);
            // die();
            $hasilAkhir1 = $pickHasil[8] + 1;
            $hasilAkhir2 = $pickHasil[7] + 1;
            $hasilAkhir3 = $pickHasil[6] + 1;
            // echo $hasilAkhir1 . "<br>";
            // echo $hasilAkhir2 . "<br>";
            // echo $hasilAkhir3 . "<br>";
            // die();
            $query = "INSERT INTO tb_history (nama, hasil1, hasil2, hasil3, usia, gender, b_inggris, ipk, penTerakhir, akreditasi)
            VALUES ('$nama', '$hasilAkhir1', '$hasilAkhir2', '$hasilAkhir3', '$usia', '$gender', '$nilaiBahasa', '$ipk', '$nilaiPendidikan', '$nilaiAkreditasi')";

            if (mysqli_query($con, $query)) {
                $error = urlencode("berhasil");
                header("Location: ../module/landingCariPekerjaan.php?error=$error");
            }else{
                $error = urlencode("gagal");
                header("Location: ../module/cariPekerjaan.php?error=$error");
            }
        }
    }        
} else {
    $error = urlencode("Lengkapi semua data");
    header("Location: ../module/cariPekerjaan.php?error=$error");
}

mysqli_close($con);
?>