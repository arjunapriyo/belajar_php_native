<?php
if ($_GET['id_peminjaman_buku']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($conn, "delete from buku where
        id_buku='" . $_GET['id_buku'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus siswa');location.href='histori_peminjaman.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus siswa');location.href='histori_peminjaman.php';</script>";
    }
}
?>