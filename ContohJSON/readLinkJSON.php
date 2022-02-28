<?php
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$linkAPI = "https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi";
$response = file_get_contents($linkAPI, false, stream_context_create($arrContextOptions));

// Mendecode prov.json
$data = json_decode($response, true);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Covid-19 INDONESIA</title>
</head>
<body>
<h1>Data Covid-19 Indonesia</h1>
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
		<?php foreach ($data as $row): ?>
			<tr>
				<td><?= $row["provinsi"] ?></td>
				<td><?= $row["kasus"] ?></td>
				<td><?= $row["dirawat"] ?></td>
				<td><?= $row["sembuh"] ?></td>
				<td><?= $row["meninggal"] ?></td>
			</tr>
		<?php endforeach ?>

	</tbody>
</table>
</body>
</html>