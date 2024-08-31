<?php
include "header.php";
?>

<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat datang, <?= $_SESSION['nama_siswa'] ?>!</h1>
        <p class="lead">Anda berada di website Perpustakaan Online.</p>
        <hr class="my-4">
        <p>Temukan berbagai buku menarik di sini.</p>
        <a class="btn btn-primary btn-lg" href="buku.php" role="button">Jelajahi Buku</a>
    </div>
</div>

<?php
include "footer.php";
?>