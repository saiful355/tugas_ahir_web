<?php
require 'functions.php';
$jam = query("SELECT * FROM catalog_jam");

//tombol cari ditekan
if(isset($_POST["cari"])){
    $jam = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Jam</h1>
    <a href="tambah.php">Tambah Data jam</a>
    <br></br>

<form action= "" method="POST">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan kata kunci pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
</form>
<br>

    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id.</th>
            <th>Nama</th>
            <th>Merek</th>
            <th>Garga</th>
            <th>Gambar</th>
               
        </tr>
        
        <?php $i = 1;?>
        <?php foreach ($jam as $row) { ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row['Id']; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row['Id']; ?>">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['Gambar']?>" width="50">
            </td>
            <td><?= $row['Nama']?></td>
            <td><?= $row['Merek']?></td>
            <td><?= $row['Harga']?></td>
            <td><?= $row['Gambar']?></td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    
</body>
</html>