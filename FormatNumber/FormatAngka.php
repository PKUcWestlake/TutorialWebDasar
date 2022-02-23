<?php 

function FormatAngkaPertama($angka){
	$hasil = number_format($angka,2);
	return $hasil;
}

function FormatAngkaKedua($angka){
	$hasil = number_format($angka,2,".",",");
	return $hasil;
}

function FormatAngkaKetiga($angka){
	$hasil = number_format($angka,2,",",".");
	return $hasil;
}


echo "Format Pertama : ". FormatAngkaPertama(75000) ."<br />";
echo "Format Kedua : ". FormatAngkaKedua(150000) ."<br />";
echo "Format Ketiga : ". FormatAngkaKetiga(250000) ."<br />";
 ?>