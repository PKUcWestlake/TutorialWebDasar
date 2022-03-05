<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Tambah</title>
</head>

<body style="width: 700px; margin: auto; padding: 10px;">
    <h2 style="text-align: center;">FORM EDIT BARANG</h2>
    <button onclick="document.location='index.php'"> Kembali </button>

    <?php
    include 'koneksi.php';
    $nomor_urut = 0;
    $result = selectDataDetail($_GET['kode']);
    $dataArr = mysqli_fetch_assoc($result);
    ?>

    <form action="aksiEdit.php" method="POST">
        <table style="margin-top: 10px; width: 100%;">
            <tr style="font-weight: bold;">
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="id_barang" style="width: 98%; border: none;" 
                    value="<?php echo $_GET['kode'] ?>" readonly></td>
            </tr>
            <tr style="font-weight: bold;">
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" style="width: 98%;" value="<?php echo $dataArr['nama_barang'] ?>"></td>
            </tr>
            <tr style="font-weight: bold;">
                <td>Stok</td>
                <td>:</td>
                <td><input type="number" name="stok" style="width: 98%;" value="<?php echo $dataArr['stok'] ?>"></td>
            </tr>
            <tr style="font-weight: bold;">
                <td>Harga Satuan</td>
                <td>:</td>
                <td><input type="number" name="harga" style="width: 98%;" value="<?php echo $dataArr['harga'] ?>"></td>
            </tr>
            <tr style="font-weight: bold;">
                <td colspan="3" style="text-align: right;"><button style="padding: 10px; margin-top: 10px;">Simpan Data</button></td>
            </tr>
        </table>
    </form>
</body>

</html>