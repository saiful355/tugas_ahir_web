<?php
//koneksi ke database
$koneksi= mysqli_connect("localhost", "root", "", "jam");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $Nama = htmlspecialchars($data ["Nama"]);
    $Merek =  htmlspecialchars($data ["Merek"]);
    $Harga=  htmlspecialchars($data ["Harga"]);
    $Gambar =  htmlspecialchars($data ["Gambar"]);

    
    //query insert ke database
    $query = "INSERT INTO catalog_jam
                VALUES
                ('', '$Nama', '$Merek','$Harga','$Gambar')
                ";

    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM catalog_jam WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function edit($id)
{
    global $koneksi;
    mysqli_query($koneksi, "UPDATE catalog_jam SET Nama = '$_POST[Nama]',Merek = '$_POST[Merek]',Harga = '$_POST[Harga]',Gambar = '$_POST[Gambar]' WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
        $query = "SELECT * FROM catalog_jam
                    WHERE
                        Nama LIKE '%$keyword%' OR
                        Merek LIKE '%$keyword%' OR
                        Harga LIKE '%$keyword%' OR
                        Gambar LIKE '%$keyword%' 
      ";

      return query($query);
}