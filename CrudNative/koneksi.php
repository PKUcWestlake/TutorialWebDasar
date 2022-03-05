<?php

function koneksiDB() {
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "crud";

    $conn = mysqli_connect($host, $username, $password, $db);
    
    if(!$conn) {
        die("Koneksi Database Gagal : " .mysqli_connect_error());
    } else {
        return $conn;
    }
}

function selectAllData() {
    $query = "SELECT * FROM tb_barang";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function selectDataDetail($kode) {
    $query = "SELECT * FROM tb_barang WHERE id_barang ='$kode'";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

function insertData($data) {
    $query = "INSERT INTO tb_barang VALUES ('".$data['id_barang']. "','" . $data['nama_barang'] . "',
        '" . $data['stok'] . "', '" . $data['harga'] . "') ";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}

function UpdateData($data) {
    $query = "UPDATE tb_barang SET
        nama_barang = '" . $data['nama_barang'] . "',
        stok = '" . $data['stok'] . "', 
        harga = '" . $data['harga'] . "'
        WHERE id_barang = '" . $data['id_barang'] . "'";

    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}

function deleteData($kode) {
    $query = "DELETE FROM tb_barang WHERE id_barang = '$kode'";
    $result = mysqli_query(koneksiDB(), $query);

    if (!$result) {
        return 0;
    } else {
        return 1;
    }
}


// echo "<pre>";
// print_r(mysqli_fetch_assoc(selectAllData()));
// echo "</pre>";

// echo "<pre>";
// print_r(koneksiDB());
// echo "</pre>";
?>