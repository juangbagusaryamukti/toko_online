<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #333333;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
            font-weight: 500;
            text-transform: uppercase;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #C3E956;
        }

        .wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .card {
            background-color: #333333 !important;
            color: #fff !important;
            border: none !important;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
            color: #C3E956;
            font-size: 1.2rem;
        }

        .card-text {
            color: #ccc;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: #C3E956 !important;
            border-color: #C3E956 !important;
            color: #333333 !important;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
            padding: 8px 16px;
            font-size: 0.9rem;
        }

        .btn-primary:hover {
            background-color: #ADB64E;
            border-color: #ADB64E;
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .footer {
            background-color: #333333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .special-name {
            color: #C3E956;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include "header.php"; ?>

        <div class="container content">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="display-4 mb-4 fw-bold">Selamat datang, <span class="special-name"><?= $_SESSION["nama"] ?></span>!</h2>
                    <p class="lead mb-4">Terima kasih telah menggunakan layanan toko online kami. Di sini Anda dapat menemukan berbagai koleksi produk terbaru dan melakukan transaksi pembelian dengan mudah.</p>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Daftar Produk</h5>
                                    <p class="card-text fw-lighter">Jelajahi daftar lengkap produk-produk yang tersedia di toko online kami.</p>
                                    <a href="../produk/produk.php" class="btn btn-primary"><i class="fas fa-tag"></i> Lihat Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Riwayat Transaksi</h5>
                                    <p class="card-text">Pantau riwayat transaksi produk Anda dan detail transaksi.</p>
                                    <a href="../produk/histori_pembelian.php" class="btn btn-primary"><i class="fas fa-history"></i> Lihat Riwayat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>