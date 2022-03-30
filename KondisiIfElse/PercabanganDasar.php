<?php 

// IF STATEMENT ------------------------------------------------------------------------------
$nilaiMhs = 80;

if($nilaiMhs > 70){
    echo "Anda LULUS";
}

?>


<?php

// IF ELSE STATEMENT -------------------------------------------------------------------------
$nilaiMhs = 50;

if ($nilaiMhs > 70){
    echo "Anda LULUS";
} else {
    echo "Anda TIDAK LULUS";
}

?>

<?php
// IF ELSE BERTINGKAT -------------------------------------------------------------------------
$nilai = 88;

if($nilai > 90){
    $grade = "SANGAT BAIK";
} elseif($nilai > 75){
    $grade = "BAIK";
} elseif($nilai > 60){
    $grade = "CUKUP";
} else {
    $grade = "GAGAL";
}

echo "Nilai Anda: ". $nilai ."<br>";
echo "Grade: " .$grade;

 ?>