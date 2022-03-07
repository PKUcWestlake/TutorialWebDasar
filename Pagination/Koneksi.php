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

function selectPageData($awal, $batas) {
    $query = "SELECT * FROM tb_barang limit $awal, $batas";
    $result = mysqli_query(koneksiDB(), $query);
    return $result;
}

 ?>