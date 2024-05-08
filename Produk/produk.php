<?php include "../Home/header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            padding-top: 70px;
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .card {
            background-color: #fff;
            color: #333;
            border: none !important;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-weight: bold;
            color: #333;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .card-text {
            color: #666;
            font-size: 0.9rem;
            height: 80px;
            overflow: hidden;
        }

        .btn-primary {
            background-color: #C3E956;
            border-color: #C3E956;
            color: #333;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
            padding: 8px 16px;
            font-size: 0.9rem;
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
    <div class="container mt-4">
        <h2 class="display-6 mb-4 fw-bold text-center">Daftar Produk</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            include "koneksi.php";
            $qry_produk = mysqli_query($conn, "SELECT * FROM produk");
            while ($dt_produk = mysqli_fetch_array($qry_produk)) {
            ?>
                <div class="col">
                    <div class="card">
                        <img src="../assets/foto_produk/<?= $dt_produk['foto_produk'] ?>" class="card-img-top" alt="<?= $dt_produk['nama_produk'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dt_produk['nama_produk'] ?></h5>
                            <p class="card-text"><?= substr($dt_produk['deskripsi'], 0, 100) ?>...</p>
                            <a href="beli_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-primary"><i class="fas fa-shopping-cart me-1"></i>Beli</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include "../Home/footer.php"; ?>