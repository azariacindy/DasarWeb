<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + 10;
$e = $d - $c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>";
echo "Variable d: {$d} <br>";
echo "Variable e: {$e} <br>";

// var_dump() untuk menmpilkan informasi satu atau lebih variable
var_dump($e);
echo "<br><br>";

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);
echo "<br><br>";

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br><br>";

$namaDepan = "Ibnu";
$namaBelakang = "Hakim";

$namaLengkap = "{$namaDepan } {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: {$namaBelakang} <br>";

echo $namaLengkap;
echo "<br><br>";

$listMhs = ["Whid Abdullah", "Azaria Cindy", "Lendis Fabri"];
echo $listMhs[1];
?>