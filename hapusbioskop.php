<html>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">

<head>
    <title> Menghapus Data Pembelian Tiket Bioskop </title>
</head>

<body>
<div class="container col-md-15">
            <div class="card">
            <div class="card-header bg-primary text-white">
            HAPUS DATA PEMBELIAN TIKET BIOSKOP
            </div>
            <div class="card-body">
    
    
    <?php
    //siapkan koneksi databasenya
    include 'koneksibioskop.php';

    //ambil data yang dikirim
    if(isset($_GET['kodetiket'])) //isset memastikan kode barang di kirim lewat form //GET yang dikirim ditampilkan di url
    {
        $kodetiket=$_GET['kodetiket'];
    }

    //nmengambil data di form
    $perintah=" SELECT * FROM tbl_tiket WHERE kode_tiket='$kodetiket'"; 
    $query=mysqli_query($db,$perintah); //menjalankan perintah
    // menampilkan data di form

    while ($row=mysqli_fetch_array($query)) //perintah untuk mengambil data hasil query
        {

    ?>
    
    <form action="proseshapusbioskop.php" methode="post" class="form-item">
        <table class="table table-bordered">
            <tr>
                <td> Kode Tiket : </td>
                <td>
                    <input type="text" name="kodetiket" class="form-control col-md-9" placeholder="kode tiket" value="<?php echo$row['kode_tiket']; ?>"></input>
                </td>
            </tr>
            <tr>
                <td> Nama Film : </td>
                <td>
                    <input type="text" name="namafilm" class="form-control col-md-9" placeholder="nama film" value="<?php echo$row['nama_film']; ?>"></input>
                </td>
            </tr>
            <tr>
                <td> Harga Tiket : </td>
                <td>
                    <input type="text" name="hargatiket" class="form-control col-md-9" placeholder="harga tiket" value="<?php echo$row['harga_tiket']; ?>"></input>
                </td>
            </tr>
            <tr>
                <td> Jumlah Tiket : </td>
                <td>
                    <input type="text" name="jumlahtiket" class="form-control col-md-9" placeholder="jumlah tiket" value="<?php echo$row['jumlah_tiket']; ?>"></input>
                </td>
            </tr>
                <td> Kode Duduk : </td>
                <td>
                    <input type="text" name="kodeduduk" class="form-control col-md-9" placeholder="kode duduk" value="<?php echo$row['kode_duduk']; ?>"></input>
                </td>
            </tr>
                <td> Waktu Tayang Film : </td>
                <td>
                    <input type="text" name="waktufilm" class="form-control col-md-9" placeholder="tahun, bulan, tanggal jam, menit, detik" value="<?php echo$row['waktu_film']; ?>"></input>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset" value="BATAL" class="btn btn-sm btn-danger"></input>
                    <input type="submit" value="HAPUS DATA" class="btn btn-sm btn-primary"></input>
                </td>
                </tr>

        </div>
        </div>
        </div>
        </table>
        
    </form>

    <?php
        }  
    ?>

</body>

</html>