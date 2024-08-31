<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://www.example.com/library-background.jpg'); /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .table-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
        }
        .btn-success:hover {
            background-color: #1e8449;
            border-color: #1e8449;
        }
        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }
        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-4">Tampil Kelas</h3>
        <div class="table-container">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kelas</th>
                        <th>Expertise</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $query_kelas = mysqli_query($conn, "SELECT * FROM `kelas`");
                    $no = 0;
                    while ($data_kelas = mysqli_fetch_array($query_kelas)) {
                        $no++; ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data_kelas['nama_kelas'] ?></td>
                            <td><?= $data_kelas['kelompok'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="text-left mt-4">
            <a href="tambah_kelas.php" class="btn btn-primary">Tambah Kelas</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
