<?php 
$bulan = date('D');
switch ($bulan) {
	case "Sun":
		echo "Hari Ini Hari MINGGU";
		break;
	case "Mon":
		echo "Hari Ini Hari SENIN";
		break;
	case "Tue":
		echo "Hari Ini Hari SELASA";
		break;
	case "Wed":
		echo "Hari Ini Hari RABU";
		break;
	case "Thu":
		echo "Hari Ini Hari KAMIS";
		break;
	case "Fri":
		echo "Hari Ini Hari JUMAT";
		break;
	case "Sat":
		echo "Hari Ini Hari SABTU";
		break;
	default:
		echo "Format Hari Tidak Ditemukan";
		break;
}

?>