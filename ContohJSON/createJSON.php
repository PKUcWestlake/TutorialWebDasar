<?php 
	include "koneksi.php";
	$sql = mysqli_query($konek, "select * from tb_mahasiswa");

	if (mysqli_num_rows($sql) > 0) {
		$dataJson["status"] = "1";
		$dataJson["data"] = [];
		while ($row = mysqli_fetch_array($sql)) {
			$h['nim'] = $row["nim"];
		    $h['nama'] = $row["nama"];
		    $h['jurusan'] = $row["jurusan"];
			array_push($dataJson["data"], $h);
		}
		echo json_encode($dataJson);
	} else {
		$dataJson["status"] = "0";
		echo json_encode($dataJson);
	}
?>