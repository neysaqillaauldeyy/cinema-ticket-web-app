<html>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">

    <head>
        <title> FORM BIOSKOP </title>
    </head>

    <body >

    <h1 align='center'> Halo, Selamat Datang Di XXI </h1>
    <h2 align='center'> Silahkan Mengisi Data Dibawah Ini : </h1>
    <br>

    <div class="container col-md-15">
            <div class="card">
            <div class="card-header bg-primary text-white">
            FORM PEMBELIAN TIKET FILM BIOSKOP 
            </div>
            <div class="card-body">
    <table class="table table-bordered">
        
        <form method="POST" action="simpanbioskop.php" class="form-item">
            <label> Masukkan Kode Tiket :  </label>
            <input name="kode_tiket" types="text" class="form-control col-md-9" placeholder="kode tiket">
        </div>
        <br>

        <div class="form-group">
            <label> Masukkan Nama Film : </label>
            <input name="nama_film" types="text" class="form-control col-md-9" placeholder="nama film">
        </div>
        <br>

        <div class="form-group">
            <label> Masukkan Harga Tiket : </label>
            <input name="harga_tiket" types="text" class="form-control col-md-9" placeholder="harga tiket">
        </div>
        <br>

        <div class="form-group">
            <label> Masukkan Jumlah Tiket : </label>
            <input name="jumlah_tiket" types="text" class="form-control col-md-9" placeholder="jumlah tiket">
        </div>
        <br>

        <div class="form-group">
            <label> Masukkan Kode Tempat Duduk : </label>
            <input name="kode_duduk" types="text" class="form-control col-md-9" placeholder="kode tempat duduk">
        </div>
        <br>

        <div class="form-group">
            <label> Masukkan Waktu Tayang Film : </label>
            <input name="waktu_film" types="text" class="form-control col-md-9" placeholder="tahun, bulan, tanggal jam, menit, detik">
        </div>
        <br>

        <div>
            <input type="reset" value="BATAL" class="btn btn-sm btn-danger">
            <input type="submit" value="SIMPAN" class="btn btn-sm btn-primary">
        </div>

        </form>

    </div>
    </div>
    </div>

    </table>
    </body>

</html>