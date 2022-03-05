<?php
    include 'koneksi.php';

    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $stok = $_POST["stok"];
    $harga = $_POST["harga"];

    $dataArr = array(
        'id_barang' => $id_barang, 
        'nama_barang' => $nama_barang,
        'stok' => $stok, 
        'harga' => $harga, 
    );

    if (insertData($dataArr) == 1) {
        header("Location: index.php", true, 301);
        exit();
    } else {
        // echo "Gagal Insert Data";
        header("Location: halaman_input.php", true, 301);
        exit();
    }

?>