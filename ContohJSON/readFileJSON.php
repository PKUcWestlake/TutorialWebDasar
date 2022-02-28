<?php 
// File json yang akan dibaca
$file = "prov.json";

// Mendapatkan file json
$dataAPI = file_get_contents($file);

// Mendecode prov.json
$data = json_decode($dataAPI, true);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Covid-19 INDONESIA</title>
</head>
<body>
<h1>Data Covid-19 Indonesia</h1>
<h3>Last Update : <?= $data['last_date'] ?></h3>
<table border="1" style="width: 100%">
	<thead>
		<tr>
			<th>Provinsi</th>
			<th>Kasus</th>
			<th>Dirawat</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data["list_data"] as $row): ?>
			<tr>
				<td><?= $row["key"] ?></td>
				<td><?= $row["jumlah_kasus"] ?></td>
				<td><?= $row["jumlah_sembuh"] ?></td>
				<td><?= $row["jumlah_meninggal"] ?></td>
				<td><?= $row["jumlah_dirawat"] ?></td>
			</tr>
		<?php endforeach ?>

	</tbody>
</table>
</body>
</html>