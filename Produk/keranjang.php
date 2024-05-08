<?php include "../Home/header.php"; ?>

<div class="container mt-4">
    <h2 class="fw-bold mb-4">Keranjang Belanja</h2>

    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr style="background-color: #C3E956; color: #333; font-weight: bold;">
                        <th class="text-center">No</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_harga = 0;
                    foreach ($_SESSION['cart'] as $key_produk => $val_produk) :
                        $subtotal = $val_produk['harga'] * $val_produk['qty'];
                        $total_harga += $subtotal;
                    ?>
                        <tr>
                            <td class="text-center"><?= $key_produk + 1 ?></td>
                            <td><?= $val_produk['nama_produk'] ?></td>
                            <td><?= $val_produk['qty'] ?></td>
                            <td>Rp <?= number_format($val_produk['harga'], 0, ',', '.') ?></td>
                            <td>Rp <?= number_format($subtotal, 0, ',', '.') ?></td>
                            <td>
                                <a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><span style="font-weight: normal;">Hapus</span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" align="right"><strong>Total Harga:</strong></td>
                        <td><strong>Rp <?= number_format($total_harga, 0, ',', '.') ?></strong></td>
                        <td>
                            <a href="hapus_semua_cart.php" class="btn btn-outline-danger"><span style="font-weight: normal;">Hapus Semua</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <a href="checkout.php" class="btn btn-primary" style="background-color: #C3E956; border-color: #C3E956; color: #333; font-weight: normal; padding: 10px 20px; border-radius: 8px; transition: background-color 0.3s, border-color 0.3s, color 0.3s;">
            Checkout Sekarang
        </a>
        <style>
            .btn-primary:hover {
                background-color: #ADB64E !important;
                border-color: #ADB64E !important;
                color: #fff !important;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            table.table-striped th,
            table.table-striped td {
                border: 1px solid #dee2e6;
                padding: 8px
            }
        </style>
    <?php else : ?>
        <div class="alert alert-info" role="alert">
            Keranjang belanja Anda kosong.
        </div>
    <?php endif ?>
</div>

<?php include "../Home/footer.php"; ?>