<?php
include "header.php";
?>

<div class="container mt-5">
    <h2>Keranjang Belanja Anda</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $total = 0;
            foreach (@$_SESSION['cart'] as $key_produk => $val_produk):
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $val_produk['nama_buku'] ?></td>
                    <td><?= $val_produk['qty'] ?></td>
                    <td><a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <a href="checkout.php" class="btn btn-primary btn-block">Checkout</a>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>