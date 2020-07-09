<?php
$id = $_GET["id"];
require 'function.php';

if (hapus($id)>0) {
    echo "
        <script>
        alert('Jam berhasil dihapus!');
        document.location.href = 'index1.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Jam gagal dihapus!');
        document.location.href = 'index1.php';
        </script>
        ";
}
?>