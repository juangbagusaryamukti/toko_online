<?php
session_start();
if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
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
            font-weight: 400;
            font-size: 14px;
            text-transform: capitalize;
            transition: color 0.3s;
        }

        .navbar-brand {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: #C3E956;
            transform: translateY(-3px);
        }

        .navbar-nav .nav-link.active {
            font-weight: 585;
        }

        .card {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-store"></i> TokoOnline</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'active' : ''; ?>" href="../home/home.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'produk.php') ? 'active' : ''; ?>" href="../produk/produk.php"><i class="fas fa-tag"></i> Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '../produk/histori_pembelian.php') ? 'active' : ''; ?>" href="../produk/histori_pembelian.php"><i class="fas fa-history"></i> Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == '../produk/logout.php') ? 'active' : ''; ?>" href="../produk/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
    </div>
</body>

</html>