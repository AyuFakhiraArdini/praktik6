<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
include "time.php";

if (empty($nama) || empty($email)) {
    header('Location: fail.php');
} else {
    echo"<center> Nama : $nama"."</center><br>";
    echo"<center> Email : $email"."</center><br>";
    echo "<br>";
    echo "<center> Terakhir Login : $waktu $tanggal"."</center>";
}
?>