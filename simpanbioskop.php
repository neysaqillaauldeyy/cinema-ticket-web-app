<?php 

//memanggil file koneksi 
include "koneksibioskop.php";

if(isset($_POST['kode_tiket'])){

    //isset berfungsi untuk memeriksa nilai kiriman
    //apakah melalui form atau tidak
    $kodetiket = $_POST['kode_tiket'];
    $namafilm = $_POST['nama_film'];
    $hargatiket = $_POST['harga_tiket'];
    $jumlahtiket = $_POST['jumlah_tiket'];
    $kodeduduk = $_POST['kode_duduk'];
    $waktufilm = $_POST['waktu_film'];

} else {
   // die ("Anda Dilarang Masuk Tanpa Melalui Form!");

   //kalau form tidak diakses maka kembalikan ke form input
   header("location:formbioskop.php");
}

//memeriksa apakah data sudah diisi ato belum
if (empty($kodetiket)){
    die("Kode Tiket Harus Diisi!");
}
if (empty($namafilm)){
    die("Nama Judul Film Harus Diisi!");
}
if (empty($hargatiket)){
    die("Harga Tiket Film Harus Diisi!");
}
if (empty($jumlahtiket)){
    die("Jumlah Tiket Film Harus Diisi!");
}
if (empty($kodeduduk)){
    die("Kode Tempat Duduk Di Bioskop Harus Diisi!");
}
if (empty($waktufilm)){
    die("Jam Tayang Film Bioskop Harus Diisi!");
}

//simpan data ke database
$perintah = "insert into tbl_tiket values ('$kodetiket', '$namafilm', '$hargatiket', '$jumlahtiket', '$kodeduduk', '$waktufilm')";
mysqli_query($db, $perintah);
die("Data Anda Telah Berhasil Disimpan!"); //untuk memunculkan pesan bahwa data berhasil disimpan


?>