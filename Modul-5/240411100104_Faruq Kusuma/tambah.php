<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    mysqli_query($koneksi, "INSERT INTO supplier VALUES (NULL, '$nama', '$telp', '$alamat')");
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah</title>
</head>
<body>
    <h1>Tambah Data Master Supplier Baru</h1>
    <form method="POST" action="">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label>Telp</label>
            <input type="text" name="telp" placeholder="telp" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="alamat" required>
        </div>
        <div>
            <label style="display: inline-block; width: 100px;"></label>
            <button type="submit" name="simpan" >Simpan</button>
            <a href="index.php">Batal</a>
        </div>
    </form>

</body>
</html>