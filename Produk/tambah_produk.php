<?php include "../petugas/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            padding: 70px;
            font-family: 'Poppins', sans-serif;
        }

        h3 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        label {
            font-weight: 400;
            color: #333;
        }

        .form-control {
            border-color: #C3E956;
        }

        .btn-primary {
            background-color: #C3E956;
            border-color: #C3E956;
            color: #333;
            font-weight: 400;
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
        <h3 class="mb-4">Tambah Produk</h3>
        <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" id="nama_produk" required>
            </div>
            <div class="mb-3">
                <label for="id_produk">ID Produk</label>
                <input type="text" name="id_produk" class="form-control" id="id_produk" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" id="harga" required>
            </div>
            <div class="mb-3">
                <label for="foto_produk">Foto Produk</label>
                <input type="file" name="foto_produk" class="form-control" id="foto_produk" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Tambah Produk</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>