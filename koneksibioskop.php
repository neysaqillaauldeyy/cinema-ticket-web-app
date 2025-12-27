<?php 

$server = "localhost";                // nama user yang digunakan
$user = "root";                      // nama user
$password = "";                      // password user
$nama_database = "db_bioskop";       // nama database yang digunakan

$db = mysqli_connect($server, $user, $password, $nama_database); 
//perintah koneksi

if (!$db){
    die("Gagal Terhubung Dengan Database:" .mysqli_connect_error());
}
        // pesan apabila koneksi gagal

?>