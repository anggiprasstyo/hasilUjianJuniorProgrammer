<?php

echo "Program Perhitungan Bilangan Faktorial PHP <br>";

$a = 1;
$faktorial = $a;
$angka = 3;

while ($a <= $angka) {
    $faktorial = $faktorial * $a;
    $a++;
}

echo "Angka Faktorial : ";
echo $angka;
echo "<br>";

echo "Hasil Perhitungan Faktorial adalah : ";
echo $faktorial;

echo "<br> ----------------------------------------------- <br>";

$a = 1;
$faktorial = $a;
$angka = 8;

while ($a <= $angka) {
    $faktorial = $faktorial * $a;
    $a++;
}

echo "Angka Faktorial : ";
echo $angka;
echo "<br>";

echo "Hasil Perhitungan Faktorial adalah : ";
echo $faktorial;
