<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "UAS_MOBILE";

$koneksi = mysqli_cooct($db_host, $db_user, $db_pass, $db_name); 
if (!$koneksi){
    echo "koneksi sukses"
}else{
    echo "Koneksi Gagal";
    exit();
}
?>
