<?php
$id = $_GET["id"];
require 'function.php';

$jam = query("SELECT * FROM jam WHERE id=$id")[0];
if (isset($_POST["submit"])) {
    if (update($id)>0) {
        echo "
            <script>
            alert('jam berhasil diupdate!');
            document.location.href = 'index1.php';
            </script>
            ";
    } else {
        echo "
            <script>
            alert('jam gagal diupdate!');
            document.location.href = 'index1.php';
            </script>
            ";
    }
}

include 'header.php';
?>
<body>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                     TAMBAH DAFTAR JAM TANGAN
                    <small>Sampean bisa menambahkan jam di form bawah ini</small>
                </h2>
            </div>
            <div class="body">
                <form action="" method="POST">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <input type="hidden" class="form-control" placeholder="id" id="id" name="id" required value="<?= $jam["id"] ?>"/>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama" id="Nama" name="Nama" required value="<?= $jam["nama"] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Gambar</label>
                                            <input type="text" class="form-control" placeholder="Gambar" id="gambar" name="gambar" required value="<?= $jam["gambar"] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Keterangan" id="keterangan" name="keterangan" required value="<?= $jam["keterangan"] ?>"/>
                                        </div>
                                                                    
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn bg-pink waves-effect m-b-15" name="submit" id="submit">UPDATE</button>
                                        <a class="btn bg-cyan waves-effect m-b-15" role="button" data-toggle="collapse" href="index1.php" aria-expanded="false" aria-controls="collapseExample">
                                        KEMBALI KE HALAMAN DEPAN
                                        </a>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>