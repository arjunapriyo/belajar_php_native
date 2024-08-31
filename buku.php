<?php
include "header.php";
?>
<h2>Daftar Buku</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($dt_buku = mysqli_fetch_array($qry_buku)) {
        ?>
        <div class="col-md-3">
            <div class="card mt-3" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <img src="assets/foto_produk/<?= $dt_buku['foto'] ?>" class="card-img-top"
                    alt="<?= $dt_buku['nama_buku'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $dt_buku['nama_buku'] ?></h5>
                    <p class="card-text"><?= substr($dt_buku['deskripsi'], 0, 30) ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="pinjam_buku.php?id_buku=<?= $dt_buku['id_buku'] ?>" class="btn btn-primary">Pinjam</a>
                        <div class="rating">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div>
    <br>
    <a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>
</div>
<?php
include "footer.php";
?>