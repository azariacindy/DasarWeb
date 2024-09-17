<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + 10;
$e = $d - $c;

echo "Varble a: {$a} <br>";
echo "Varble b: {$b} <br>";
echo "Varble c: {$c} <br>";
echo "Varble d: {$d} <br>";
echo "Varble e: {$e} <br>";

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