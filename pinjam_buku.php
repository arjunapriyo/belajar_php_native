<?php
include "header.php";
include "koneksi.php";
$qry_detail_buku = mysqli_query($conn, "select * from buku where id_buku = '" . $_GET['id_buku'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pinjam Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 600px;
            /* Sesuaikan tinggi gambar */
            object-fit: cover;
        }

        .table {
            border: none;
        }

        .table td {
            border-top: none;
            vertical-align: top;
        }

        .btn-success {
            background-color: #28a745;
            /* Warna hijau standar Bootstrap */
            border: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Pinjam Buku</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="assets/foto_produk/<?= $dt_buku['foto'] ?>" class="card-img-top">
            </div>
            <div class="col-md-8">
                <form action="masukkankeranjang.php?id_buku=<?= $dt_buku['id_buku'] ?>" method="post">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong>Nama Buku</strong></td>
                                <td><?= $dt_buku['nama_buku'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Deskripsi</strong></td>
                                <td><?= $dt_buku['deskripsi'] ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah Pinjam</strong></td>
                                <td><input type="number" name="jumlah_pinjam" value="1" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button class="btn btn-success" type="submit">PINJAM</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>