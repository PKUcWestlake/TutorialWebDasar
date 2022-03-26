<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<style type="text/css" media="screen">
		body {
			background: #F2F2F2;
		}

		.kal {
			width: 350px;
			height: 490px;
			border: 1px solid black;
			margin: 80px auto;
			padding: 10px;
			border-radius: 10px;
			background-color: black;
		}

		h1 {
			text-align: center;
			color: white;
		}

		.FormInput {
			padding: 10px;
			display: block;
			width: 94%;
			font-size: 15px;
			border-radius: 5px;
			border: none;
		}

		.FormSelect {
			padding: 10px;
			display: block;
			width: 100%;
			font-size: 15px;
			border-radius: 5px;
			border: none;
			font-weight: bold;
		}

		.FormHasil {
			margin-top: 10px;
			padding: 30px 10px;
			display: block;
			width: 94%;
			font-size: 30px;
			border-radius: 5px;
			border: none;
		}

		button {
			padding: 10px;
			font-weight: bold;
			margin-top: 10px;
			width: 100%;
			font-size: 20px;
			background-color: red;
			color: white;
			border: none;
			cursor: pointer;
		}

		p {
			font-weight: bold;
			margin-bottom: 5px;
			color: white;
		}
	</style>
</head>
<body>
	<?php 
		if (isset($_POST['kirim'])) {
			$bil1 = $_POST['bil1'];
			$bil2 = $_POST['bil2'];
			$aksi = $_POST['aksi'];

			switch ($aksi) {
				case 'tambah':
					$output = $bil1 + $bil2;
					break;
				case 'kurang':
					$output = $bil1 - $bil2;
					break;
				case 'kali':
					$output = $bil1 * $bil2;
					break;
				case 'bagi':
					$output = $bil1 / $bil2;
					break;			
			}
		}
	?>

	<form method="POST">
		<div class="kal">
		<h1>Kalkulator Sederhana</h1>
		<hr>
		<p>Bilangan Pertama :</p>
		<input class="FormInput" type="number" name="bil1" value="0">
		<p>Bilangan Kedua :</p>
		<input class="FormInput" type="number" name="bil2" value="0">
		<p>Aksi</p>
		<select class="FormSelect" name="aksi">
			<option value="tambah">Tambah (+)</option>
			<option value="kurang">Kurang (-)</option>
			<option value="kali">Kali (X)</option>
			<option value="bagi">Bagi (/)</option>
		</select>
		<button type="submit" name="kirim">Hitung</button>
		<?php 
			if (empty($output)) {
				$hasil = 0;
			} else {
				$hasil = $output;
			}
		 ?>
		<input class="FormHasil" type="number" value="<?= $hasil ?>" readonly>
	</div>
	</form>
</body>
</html>

