<!DOCTYPE html>
<html>
<head>
	<title>Barcode Generator PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="text/css" media="screen">
		body {
			background: #F2F2F2;
		}

		.content {
			width: 550px;
			height: 450px;
			border: 1px solid white;
			margin: 100px auto;
			padding: 10px;
			border-radius: 10px;
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="content">
		<h3 class="text-primary" style="text-align: center;">QR Code Generator pada PHP</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST">
			<div class="form-group">
				<label>Masukkan Kode QR Code :</label>
				<input type="text" class="form-control" name="text_code" required />
				<br />
				<center><button class="btn btn-primary" name="generate">Generate</button></center>
				<br />
				<?php
					if(isset($_POST['generate'])){
						$code = $_POST['text_code'];
						echo "<center><img alt='testing' src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=$code&choe=UTF-8'/></center>";
					}
				?>
			</div>
		</form>
	</div>
</body>
</html>