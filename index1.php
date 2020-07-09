<?php
require 'function.php';
$jam = query("SELECT * FROM jam");

include 'header.php';
?>
<body>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DAFTAR JAM
                    <small>Berikut ini adalah daftar jam</small>
                </h2>
            </div>
            <div class="body">
            <a class="btn bg-pink waves-effect m-b-15" role="button" data-toggle="collapse" href="tambah.php" aria-expanded="false"
                               aria-controls="collapseExample">
                                TAMBAH DAFTAR JAM
                            </a>
                <div class="row">
                    <?php foreach ($jam as $row): ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="img/<?= $row["gambar"] ?>">
                            <div class="caption">
                            <h3><?= $row["nama"] ?> (<?= $row["gambar"] ?>)</h3>
                            <h6>keterangan : <?= $row["keterangan"] ?></h6>
                            <p>
                                <a href="update.php?id=<?= $row["id"] ?>" class="btn btn-primary waves-effect" role="button">EDIT</a>
                                <a href="hapus.php?id=<?= $row["id"] ?>" class="btn btn-primary waves-effect" role="button">HAPUS</a>
                            </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>