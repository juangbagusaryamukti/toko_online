<?php
if ($_POST) {
    $nama_petugas = $_POST['nama_petugas'];
    $id_petugas = $_POST['id_petugas'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    if (empty($nama_petugas)) {
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='petugas.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update petugas set nama_petugas='" . $nama_petugas . "',level='" . $level . "' where id_petugas = '" . $id_petugas . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update petugas');location.href='TampilPetugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='UbahPetugas.php?id_siswa=" . $id_petugas . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update petugas set nama_petugas='" . $nama_petugas . "',level='" . $level . "', password='" . $password . "' where id_petugas = '" . $id_petugas . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update petugas');location.href='TampilPetugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='UbahPetugas.php?id_petugas=" . $id_petugas . "';</script>";
            }
        }
    }
}
