<?php 
    include 'koneksibioskop.php'; //untuk koneksi

    //untuk ambil data
    $kodetiket = $_REQUEST['kodetiket'];
    $namafilm = $_REQUEST['namafilm'];
    $hargatiket = $_REQUEST['hargatiket'];
    $jumlahtiket = $_REQUEST['jumlahtiket'];
    $kodeduduk = $_REQUEST['kodeduduk'];
    $waktufilm = $_REQUEST['waktufilm'];

    //proses simpan ke dalam database
    $perintah = "UPDATE tbl_tiket SET nama_film='$namafilm' , harga_tiket='$hargatiket', jumlah_tiket='$jumlahtiket', kode_duduk='$kodeduduk', waktu_film='$waktufilm' WHERE kode_tiket='$kodetiket' ";

    //periksa hasil simpan edit 
    if (mysqli_query($db, $perintah))
    {
        echo "Selamat, Database Berhasil Di Simpan";
    }
    else 
    {
        echo "Maaf, Data Anda Gagal Disimpan" . mysqli_error($db);
    }

    header("location:tampilbioskop.php");

?>