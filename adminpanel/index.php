<?php
require "session.php";
require "../koneksi.php";

$queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

$queryProduk = mysqli_query($conn, "SELECT * FROM produk");
$jumlahProduk = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Safira</title>
    <link rel="icon" type="image/x-icon" href="../image/favicon.ico">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
    .box {
        border-radius: 10px;
    }

    .summary-kategori {
        background-color: #41ba52;
    }

    .summary-produk {
        background-color: #4287f5;
    }

    .large-icon {
        font-size: 5rem;
    }
</style>

<body class="bg-light">
    <?php
    require "navbar.php";
    ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="bi bi-house-door-fill me-1"></i>Home
                </li>
            </ol>
        </nav>
        <h2 class="fs-1">Selamat Datang <?php echo $_SESSION['username'] ?></h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box summary-kategori p-3">
                        <div class="row">
                            <div class="col-6">
                                <a href="kategori.php" class="text-black">
                                    <i class="bi bi-list-task large-icon"></i>
                                </a>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2">Kategori</h3>
                                <p class="fs-4"><?php echo $jumlahKategori; ?> Kategori</p>
                                <p><a href="kategori.php" class="text-white">Lihat detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box summary-produk p-3">
                        <div class="row">
                            <div class="col-6">
                                <a href="produk.php" class="text-black">
                                    <i class="bi bi-inboxes-fill large-icon"></i>
                                </a>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2">Produk</h3>
                                <p class="fs-4"><?php echo $jumlahProduk; ?> Produk</p>
                                <p><a href="produk.php" class="text-white">Lihat detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="my-4 container text-center d-flex justify-content-center">
            <div class="login-box px-5 pb-4 pt-4 shadow bg-white">
                <h2>Pesan!</h2>
                <p>Haloo mamaa! website ini dibuat khusus untuk admin yang berfungsi untuk mendata kategori dan produk yang dijual. Rakha harap dengan adanya website ini bisa memudahkan mama untuk mendata stok barang. Makasih yaa mamaaa❤️</p>
            </div>
        </div>
    </div> -->

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>