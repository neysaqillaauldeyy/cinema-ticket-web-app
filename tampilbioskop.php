<html>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="js/bootstrap.js">

<head>
    <title> Menampilkan Data Pembelian Tiket Bioskop </title>
</head>

<body>
    <h1 align='center'> Data Pembelian Tiket Bioskop XXI </h1>

    <br>
    <br>
    <div class="container col-md-15">
        <div class="card">
            <div class="card-header bg-primary text-white">
            Data Penjualan Tiket Bioskop XXI
            </div>
            <div class="card-body">
    <table class="table table-bordered">
      <div>
        <tr bgcolor="softblue">
            <th> Nomor </th>
            <th> Kode Tiket </th>
            <th> Nama Judul Film </th>
            <th> Harga Tiket Bioskop </th>
            <th> Jumlah Tiket Bioskop </th>
            <th> Kode Tempat Duduk </th>
            <th> Waktu Film Bioskop </th>
            
            <th> Aksi data </th>

        </tr>

        <?php 
        include "koneksibioskop.php";
        $perintah = "SELECT * FROM tbl_tiket"; //select (*) -> select all data field yg ada di database php my admin
        $query = mysqli_query($db, $perintah) or die(mysqli_error()); //yg ad di dlm kurung -> sisi kanan perintah manggil koneksi, sisi kiri perintah manggil database
        $nomorurut = 0;

        while ($data = mysqli_fetch_array($query)) //fungsinya utk nampung variable data dan baca terus 
        {
        ?>

        <tr bgcolor="white">
        
        <td>
            <?php 
            echo $nomorurut = $nomorurut + 1;
            ?>
         </td>

         <td>
            <?php 
            echo $data['kode_tiket'];
            ?>
         </td>
        
         <td>
            <?php 
            echo $data['nama_film'];
            ?>
         </td>

         <td>
            <?php 
            echo $data['harga_tiket'];
            ?>
         </td>

         <td>
            <?php 
            echo $data['jumlah_tiket'];
            ?>
         </td>

         <td>
            <?php 
            echo $data['kode_duduk'];
            ?>
         </td>

         <td>
            <?php 
            echo $data['waktu_film'];
            ?>
         </td>

         <td>
            <a href="editbioskop.php?kodetiket=<?php  echo$data['kode_tiket'];?> "class="btn btn-sm btn-warning">  | Edit Data | </a>
            <a href="hapusbioskop.php?kodetiket=<?php echo$data['kode_tiket'];?> "class="btn btn-sm btn-danger">   | Hapus Data | </a>
         </td>
    
        </tr>
        <?php
        }


        ?>
        </div>
        </div>
        </div>
    </table>
</body>

</html>