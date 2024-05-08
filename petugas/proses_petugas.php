<?php
if ($_POST) {
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($nama_petugas)) {
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "../config/koneksi.php";
        $insert = mysqli_query($conn, "insert into petugas (nama_petugas, level, username, password, id_petugas) value ('" . $nama_petugas . "','" . $level . "','" . $username . "','" . $password . "','" . $id_petugas . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan petugas');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
}
