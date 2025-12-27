<?php 
    include 'koneksibioskop.php'; //untuk koneksi

    //untuk ambil data
    $kodetiket = $_REQUEST['kodetiket'];

    //proses hapus ke dalam database
    $perintah = "DELETE FROM tbl_tiket WHERE kode_tiket='$kodetiket'";

    //periksa hasil hapus data 
    if (mysqli_query($db, $perintah))
    {
        echo "Selamat, Database Berhasil Di Hapus";
    }
    else 
    {
        echo "Maaf, Data Anda Gagal Di Hapus" . mysqli_error($db);
    }

    header("location:tampilbioskop.php");

?>