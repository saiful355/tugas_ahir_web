<?php
require 'function.php';
$pesan = "";
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        $pesan =  "Data jam berhasil ditambahkan";
        $klas = "alert alert-success";
    } else {
        $pesan = "Data jam gagal ditambahkan";
        $klas = "alert alert-danger";
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
                     TAMBAH DAFTAR JAM
                    <small>Anda bisa menambahkan daftar jam dengan mengisi form di bawah ini</small>
                </h2>
            </div>
            <div class="body">
                <div class="<?= $klas ?>">
                    <?= $pesan ?>
                </div>
                <form action="" method="POST">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Gambar" id="gambar" name="gambar" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="keterangan" name="keterangan" required/>
                                        </div>
                                       </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn bg-pink waves-effect m-b-15" name="submit" id="submit">TAMBAH</button>
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