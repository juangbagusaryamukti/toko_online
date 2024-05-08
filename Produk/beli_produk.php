<?php
include "../home/header.php";
include "koneksi.php";

$id_produk = $_GET['id_produk'];
$qry_detail_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
$dt_produk = mysqli_fetch_array($qry_detail_produk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli <?= $dt_produk['nama_produk'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 70px;
            background-color: #f8f9fa;
            color: #333;
        }

        h2 {
            font-size: 2rem;
            font-weight: bold;
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card-img-top {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #C3E956;
            border-color: #C3E956;
            color: #333;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 8px;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        }

        .btn-primary:hover {
            background-color: #ADB64E;
            border-color: #ADB64E;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="mb-4">Beli <?= $dt_produk['nama_produk'] ?></h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="../assets/foto_produk/<?= $dt_produk['foto_produk'] ?>" class="card-img-top" alt="<?= $dt_produk['nama_produk'] ?>">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dt_produk['nama_produk'] ?></h5>
                        <p class="card-text"><?= $dt_produk['deskripsi'] ?></p>
                        <p class="card-text">Harga: Rp <?= number_format($dt_produk['harga'], 0, ',', '.') ?></p>
                        <form action="masukkankeranjang.php?id_produk=<?= $dt_produk['id_produk'] ?>" method="post">
                            <div class="mb-3">
                                <label for="jumlah_beli" class="form-label">Jumlah Beli</label>
                                <input type="number" class="form-control" id="jumlah_beli" name="jumlah_beli" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-shopping-cart me-2"></i> Beli
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>