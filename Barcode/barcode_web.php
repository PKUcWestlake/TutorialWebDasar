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
			height: 350px;
			border: 1px solid white;
			margin: 160px auto;
			padding: 10px;
			border-radius: 10px;
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="content">
		<h3 class="text-primary" style="text-align: center;">Barcode Generator pada PHP</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST">
			<div class="form-group">
				<label>Masukkan Kode Barcode :</label>
				<input type="text" class="form-control" name="barcode" required />
				<br />
				<center><button class="btn btn-primary" name="generate">Generate</button></center>
				<br />
				<?php
					if(ISSET($_POST['generate'])){
						$code=$_POST['barcode'];
						echo "<center><img alt='testing' src='php-barcode-master/barcode.php?codetype=code39&size=50&text=".$code."&print=true'/></center>";
					}
				?>
			</div>
		</form>
	</div>
</body>
</html>