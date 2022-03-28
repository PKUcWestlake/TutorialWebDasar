<?php 

$Bilangan_A = 100;
$Bilangan_B = 25;

echo "Bilangan A : ". $Bilangan_A ."<br />";
echo "Bilangan B : ". $Bilangan_B ."<br />";
echo "--------------------------------------------------------------- <br>";

// OPERATOR PENJUMLAHAN
$penjumlahan = $Bilangan_A + $Bilangan_B;
echo "Hasil Penjumlahan : ". $penjumlahan ."<br />";
echo "--------------------------------------------------------------- <br>";

// OPERATOR PENGURANGAN
$pengurangan = $Bilangan_A - $Bilangan_B;
echo "Hasil pengurangan : ". $pengurangan ."<br />";
echo "--------------------------------------------------------------- <br>";

// OPERATOR PERKALIAN
$perkalian = $Bilangan_A * $Bilangan_B;
echo "Hasil perkalian : ". $perkalian ."<br />";
echo "--------------------------------------------------------------- <br>";

// OPERATOR PEMBAGIAN
$pembagian = $Bilangan_A / $Bilangan_B;
echo "Hasil pembagian : ". $pembagian ."<br />";
echo "--------------------------------------------------------------- <br>";

// OPERATOR MODULUS
$modulus = $Bilangan_B % 6;
echo "Hasil modulus : ". $modulus ."<br />";
echo "--------------------------------------------------------------- <br>";

// OPERATOR PANGKAT
$pangkatPertama = $Bilangan_B ** 2;
$pangkatKedua = pow($Bilangan_B, 2);
echo "Hasil Pangkat Pertama : ". $pangkatPertama ."<br />";
echo "Hasil Pangkat Kedua : ". $pangkatKedua ."<br />";
echo "--------------------------------------------------------------- <br>";

// OPERATOR AKAR
$akar = sqrt($Bilangan_A);
echo "Hasil akar : ". $akar ."<br />";
echo "--------------------------------------------------------------- <br>";



 ?>