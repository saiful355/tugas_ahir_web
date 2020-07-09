<?php
//koneksi DBMS
require "functions.php";

$jam = query("SELECT * FROM catalog_jam WHERE id=$_GET[id]");

//cek apakah tombol submit sudah ditekan atau belum?
if(isset($_POST["submit"])){
    if(count($jam) == 0){
        echo "
        <script>
        alert('Data jam Tidak Ada');
        document.location.href = 'index.php';
        </script>
        ";
    }
    //cek apakah data berhasil ditambahkan atau tidak?
    if (edit($_POST["Id"]) > 0){
        echo "
        <script>
        alert('Data Berhasil Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diperbarui!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data jam</h1>
    <form action="" method="POST">
    <input type="hidden" name="Id" value="<?= $jam[0]['Id'];?>">
        <ul>
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $jam[0]['Nama'];?>" >
            </li>
            <li>
                <label for="Merek">Merek :</label>
                <input type="text" name="Merek" id="Merek" required value="<?= $jam[0]['Merek'];?>">
            </li>
            <li>
                <label for="Harga">Harga :</label>
                <input type="text" name="Harga" id="Harga" required value="<?= $jam[0]['Haraga'];?>">
            </li>
           
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $jam[0]['Gambar'];?>">
            </li>
            <br>
            <br>
            <li>
            <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>


</body>
</html>