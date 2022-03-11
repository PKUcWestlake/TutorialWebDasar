<!DOCTYPE html>
<html>
<head>
	<title>Upload dan Download File PDF Dengan PHP Dan MySQL</title>
</head>
<body style="width: 800px; margin: auto; padding: 10px;">
	<h2 style="text-align: center;">Tabel Upload/Download File (PDF)</h2>
	<button onclick="document.location='halaman_upload.php'">Tambah Data</button>
	<br /><br />

	<table border="1" style="width: 100%; border-collapse: collapse;">
		<thead>
			<tr>
				<th style="width: 30px">No</th>
				<th style="width: 100px">Kode</th>
				<th>Nama</th>
				<th style="width: 100px">Type</th>
				<th style="width: 100px">Ukuran</th>
				<th style="width: 100px">Aksi</th>
			</tr>
		</thead>
		<tbody style="text-align: center;">
			<?php
		        include 'Koneksi.php';
		        $nomor_urut = 0;
		        $result = selectAllData();
		        $countData = mysqli_num_rows($result);

		        if ($countData < 1) { 
	        ?>	
			        <tr>
		                <td colspan="5" style="text-align: center; font-weight: bold; font-size: 12px; padding: 5px; color: red">TIDAK ADA DATA</td>
		            </tr>

            <?php
	        	} else {
		            while ($row = mysqli_fetch_assoc($result)) {
		                $nomor_urut = $nomor_urut + 1;
            ?>
						<tr>
							<td><?php echo $nomor_urut; ?></td>
							<td><?php echo $row['kode_buku']; ?></td>
							<td><?php echo $row['nama_buku']; ?></td>
							<td><?php echo strtoupper($row['ekstensi']) ?></td>
							<td><?php echo number_format($row['size']/(1024*1024), 2) ?>MB</td>
							<td><a href="DownloadFile.php?url=<?php echo $row['berkas']; ?>">Download</a></td>
						</tr>
			<?php 
					}
        		} 
        	?>
		</tbody>
	</table>
	
</body>
</html>