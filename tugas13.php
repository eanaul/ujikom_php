<?php

function cuy(){
    $a= 2;
    $b= 3;
    $c = 4;

    $tambah = $a + $b + $c;
    echo "hasil pertambahan $tambah";
    $kurang = $a - $b - $c;
    echo "hasil pengurangan $kurang";
    $kali = $a * $b * $c;
    echo "hasil perkalian $kali";
    $bagi = $a / $b / $c;
    echo "hasil pembagian $bagi";
    $modulus = $a % $b % $c;
    echo "hasil modulus $modulus";
}

echo cuy();

?>