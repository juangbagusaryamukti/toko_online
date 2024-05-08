<?php include "../Home/header.php"; ?>

<div class="container mt-4">
    <h2 class="mb-4 fw-bold">Histori Pembelian Produk</h2>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="background-color: #C3E956; color: #333;">No</th>
                    <th style="background-color: #C3E956; color: #333;">Tanggal Pembelian</th>
                    <th style="background-color: #C3E956; color: #333;">Nama Produk</th>
                    <th style="background-color: #C3E956; color: #333;">Harga</th>
                    <th style="background-color: #C3E956; color: #333;">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_histori = mysqli_query($conn, "SELECT * FROM pembelian_produk ORDER BY id_pembelian_produk DESC");

                if (!$qry_histori) {
                    die("Kesalahan pada kueri: " . mysqli_error($conn));
                }

                $no = 0;
                while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                    $no++;
                    $qry_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '" . $dt_histori['id_produk'] . "'");
                    $dt_produk = mysqli_fetch_array($qry_produk);

                    if ($dt_produk) {
                        $nama_produk = $dt_produk['nama_produk'];
                        $total_harga = $dt_histori['total_harga'];

                        $status_pembelian = "<span class='badge bg-success text-light' style='font-weight: normal;'>Sukses</span>";
                ?>
                        <tr>
                            <td class="text-center"><?= $no ?></td>
                            <td><?= $dt_histori['tgl_pembelian'] ?></td>
                            <td><?= $nama_produk ?></td>
                            <td>Rp <?= number_format($total_harga, 0, ',', '.') ?></td>
                            <td><?= $status_pembelian ?></td>
                        </tr>
                    <?php
                    } else {
                    ?>
                        <tr>
                            <td class="text-center"><?= $no ?></td>
                            <td><?= $dt_histori['tgl_pembelian'] ?></td>
                            <td colspan="3">Produk Tidak Ditemukan</td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "../Home/footer.php"; ?>