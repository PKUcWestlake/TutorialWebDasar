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
						include "php-qrcode/qrlib.php"; 
						/*create folder*/
						$tempdir="qr_tmp/";
						if (!file_exists($tempdir)) mkdir($tempdir, 0755);
						$file_name=date("Ymd")."_".$code.".png";	
						$file_path = $tempdir.$file_name;
						
						QRcode::png($code, $file_path, "H", 6, 4);
						echo "<center><img alt='testing' src='".$file_path."'/></center>";
					}
				?>
			</div>
		</form>
	</div>
</body>
</html>