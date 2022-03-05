<?php
    include 'koneksi.php';

    $id_barang = $_GET["kode"];
    // echo $id_barang;

    if (deleteData($id_barang) == 1) {
        // echo "Hapus Data Berhasil";
        header("Location: index.php", true, 301);
        exit();
    } else {
        // echo "Gagal Delete Data";
        header("Location: index.php", true, 301);
        exit();
    }
?>