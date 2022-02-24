<?php 

echo "Default Timezone: <br />";
echo date('l, d-m-Y');
echo "<br/>";
echo date('d / M / y');
echo "<br/>";
echo date('D - M - Y');
echo "<br/>";
 ?>

<?php 

echo "<br/>";
echo "Default Timezone: <br />";
echo date('H:i:s a');
 
echo "<br/>";
echo date('d-m-Y H:i:s a');
echo "<br/>";

echo "<br/>";
echo "Indonesian Timezone: <br />";
date_default_timezone_set('Asia/Jakarta');
echo date('d-m-Y H:i:s');
echo "<br/>";

 ?>

<?php
echo "<br/>";
echo "Format Tanggal Awal: <br />";
$today = date("d/m/Y");
echo $today;
?>