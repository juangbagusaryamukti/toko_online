<?php
session_start();
include "koneksi.php";
$cart = @$_SESSION['cart'];
if (count($cart) > 0) {
    $total_harga = 0;
    foreach ($cart as $key_produk => $val_produk) {
        $subtotal = $val_produk['harga'] * $val_produk['qty'];
        $total_harga += $subtotal;
    }

    $insert_pembelian = mysqli_query($conn, "INSERT INTO pembelian_produk (id_pelanggan, id_produk, nama_produk, tgl_pembelian, total_harga, qty) VALUES ('" . $_SESSION['id_pelanggan'] . "', '" . $val_produk['id_produk'] . "', '" . $_SESSION['nama_produk'] . "', '" . date('Y-m-d') . "', " . $total_harga . ", '" . $val_produk['qty'] . "')");

    if ($insert_pembelian) {
        $id_pembelian = mysqli_insert_id($conn);

        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn, "INSERT INTO detail_pembelian_produk (id_pembelian_produk, id_produk, qty) VALUES ('" . $id_pembelian . "', '" . $val_produk['id_produk'] . "', '" . $val_produk['qty'] . "')");
        }

        unset($_SESSION['cart']);

        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
