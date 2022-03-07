<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Utama</title>
    <style type="text/css">
        .page_link {
            border: 1px solid black; 
            padding: 5px 10px; 
            margin-right: 5px;
            font-weight: bold;
            display: inline-block;
        }

        .page_link a {
            text-decoration: none;
        }

        .selected_item {
            background-color: #C5C5C5;
        }
    </style>
</head>

<body style="width: 700px; margin: auto; padding: 10px;">
    <h2 style="text-align: center;">DATA PERSEDIAAN BARANG</h2>
    <table border="1" style="border-collapse: collapse; margin-top: 10px; width: 100%;">
        <tr style="text-align: center; font-weight: bold; background-color: #C8C6C6; height: 40px;">
            <td>No</td>
            <td>Nama Barang</td>
            <td>Stok</td>
            <td>Harga (Rp)</td>
        </tr>
        <?php

        include 'Koneksi.php';
        $nomor_urut = 0;
        $dataALL = selectAllData();
        $countData = mysqli_num_rows($dataALL);

        $batas = 20;
        $hal = isset($_GET['p'])?(int)$_GET['p'] : 1;
        $hal_awal = ($hal>1) ? ($hal * $batas) - $batas : 0;
        $totalHalaman = ceil($countData / $batas);

        $prev = $hal - 1;
        $next = $hal + 1;

        $result = selectPageData($hal_awal, $batas);

        if ($countData < 1) { 
        ?>
            <tr>
                <td colspan="5" style="text-align: center; font-weight: bold; font-size: 12px; padding: 5px;">TIDAK ADA DATA</td>
            </tr>

            <?php
        } else {
            $nomor_urut = $hal_awal + 1;
            while ($row = mysqli_fetch_assoc($result)) {?>

                <tr style="text-align: center;">
                    <td><?php echo $nomor_urut++; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td>Rp. <?php echo number_format($row['harga']); ?></td>
                </tr>

        <?php }
        } ?>
    </table>

    <div style="margin-top: 5px; text-align: center;">
        <!-- Fungsi Tombol Previous -->
        <p class="page_link">
            <a <?php if ($hal > 1) echo "href='?p=$prev'" ?> >
                &laquo; Previous
            </a>
        </p>

        <!-- Fungsi Tombol Halaman Data -->
        <?php for ($i = 1; $i <= $totalHalaman; $i++) {?>
            <p class="page_link <?php if ($hal == $i) echo "selected_item" ?>">
                <a href="?p=<?php echo $i ?>">
                    <?= $i ?>
                </a>
            </p>
        <?php } ?>

        <!-- Fungsi Tombol Next -->
        <p class="page_link">
            <a <?php if ($hal < $totalHalaman) echo "href='?p=$next'" ?> >
                Next &raquo;
            </a>
        </p>
    </div>

</body>

</html>