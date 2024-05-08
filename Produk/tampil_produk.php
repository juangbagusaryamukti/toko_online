<?php include "../petugas/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd;
        }

        .table th:first-child,
        .table td:first-child {
            border-left: 1px solid #ddd;
        }

        .table th {
            background-color: #C3E956;
            color: #333;
            font-weight: bold;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            padding: 6px 12px;
            font-size: 12px;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #C3E956;
            border-color: #C3E956;
            color: #333;
            font-weight: 400;
        }

        .btn-primary:hover {
            background-color: #ADB64E;
            border-color: #ADB64E;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .deskripsi {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Tampil Produk</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">ID Produk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_produk = mysqli_query($conn, "SELECT * FROM produk");
                $no = 0;
                while ($data_produk = mysqli_fetch_array($qry_produk)) {
                    $no++;
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data_produk['nama_produk'] ?></td>
                        <td><?= $data_produk['id_produk'] ?></td>
                        <td class="deskripsi"><?= $data_produk['deskripsi'] ?></td>
                        <td>Rp <?= number_format($data_produk['harga'], 0, ',', '.') ?></td>
                        <td>
                            <a href="ubah_produk.php?id_produk=<?= $data_produk['id_produk'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="hapus_produk.php?id_produk=<?= $data_produk['id_produk'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>