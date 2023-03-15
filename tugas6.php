<?php
$nilai = 85;

if($nilai >= 90 && $nilai <=100){
    echo "A";
} else if($nilai <= 90 && $nilai >= 80){
    echo "B";
} else if ($nilai <= 80 && $nilai >= 70){
    echo "C";
} else{
    echo "D";
}
?>