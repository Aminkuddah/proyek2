<?php
$to = "adheadhe71@gmail.com";
$subject = $_POST["company"];
$txt = $_POST["your_message"];
$from = $_POST["email"];
$nama = $_POST["name"];
$telepon = $_POST["telephone"];
$txtFinal = $nama . "\r\n" . $telepon . "\r\n" . $txt;
$headers = "From: $from" . "\r\n" .
"CC: adheadhe71@gmail.com";

// echo $to . "\n";
// echo $subject . "\n";
// echo $txt . "\n";
// echo $from . "\n";
// echo $nama . "\n";
// echo $telepon . "\n";
// echo $txtFinal . "\n";
// echo $headers . "\n";
// die();
if (!empty($to) && !empty($subject) && !empty($from) && !empty($txt) && !empty($nama) && !empty($telepon) && !empty($txtFinal) && !empty($headers)) {
    mail($to,$subject,$txtFinal,$headers);
    $error = urlencode("berhasil");
    header("Location: ../module/aboutUs.php?error=$error");
} else {
    $error = urlencode("Lengkapi semua data form contact us");
    header("Location: ../module/aboutUs.php?error=$error");
}
?>