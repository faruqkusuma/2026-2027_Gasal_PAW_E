<?php include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
</head>
<body>
    <h1>Data Master Supplier</h1>
    <a href="tambah.php" class="btn-green">Tambah Data</a>
    <table style="border-collapse: collapse;">
        <tr>
            <th bgcolor="aqua">No</th>
            <th bgcolor="aqua">Nama</th>
            <th bgcolor="aqua">Telp</th>
            <th bgcolor="aqua">Alamat</th>
            <th bgcolor="aqua">Tindakan</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM supplier ORDER BY id ASC");
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr >
            <td style="border: 2px solid black;"><?= $no++ ?></td>
            <td style="border: 2px solid black;"><?= $row['nama'] ?></td>
            <td style="border: 2px solid black;"><?= $row['telp'] ?></td>
            <td style="border: 2px solid black;"><?= $row['alamat'] ?></td>
            <td style="border: 2px solid black;">
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Anda yakin akan menghapus supplier ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
