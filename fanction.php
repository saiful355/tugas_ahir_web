<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_jam");
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $koneksi;
    $nama = $data["nama"];
    $gambar = $data["gambar"];
    $keterangan = $data["keterangan"];
    

    $query = "INSERT INTO jam VALUES ('','$nama','$gambar','$keterangan')";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM jam WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function update($data) {
    global $koneksi;
    $id = $data["id"];
    $nama = $data["nama"];
    $gambar = $data["gambar"];
    $keterangan = $data["keterangan"];
   
    $query = "UPDATE film SET
                nama = '$nama',
                gambar = '$nama',
                keterangan = '$nama',                         
                WHERE id = $id
                ";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi); 
}
?>