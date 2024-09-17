<?php
$a = 10;
$b = 5;

// operasi aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// output hasil operasi aritmatika
echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
echo "Hasil Perkalian: " . $hasilKali . "<br>";
echo "Hasil Pembagian: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Pangkat: " . $pangkat . "<br>";
echo "<br><br>";

// operasi perbandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Output hasil perbandingan
echo "Apakah \$a sama dengan \$b? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$a tidak sama dengan \$b? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$a lebih kecil dari \$b? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$a lebih besar dari \$b? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$a lebih kecil atau sama dengan \$b? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$a lebih besar atau sama dengan \$b? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";
echo "<br><br>";

// operasi logika
$hasilAnd = $a && $b;  // logika AND, hasil true jika kedua variabel bernilai true
$hasilOr = $a || $b;   // logika OR, hasil true jika salah satu variabel bernilai true
$hasilNotA = !$a;      // logika NOT pada variabel $a
$hasilNotB = !$b;      // logika NOT pada variabel $b

// output hasil operasi logika
echo "Hasil Logika AND antara \$a dan \$b: " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil Logika OR antara \$a dan \$b: " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil Logika NOT pada \$a: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil Logika NOT pada \$b: " . ($hasilNotB ? 'True' : 'False') . "<br>";
echo "<br><br>";

// operasi penugasan
$a += $b;  // $a = $a + $b
$a -= $b;  // $a = $a - $b
$a *= $b;  // $a = $a * $b
$a /= $b;  // $a = $a / $b
$a %= $b;  // $a = $a % $b

// output hasil operasi penugasan
echo "Hasil setelah operasi penugasan (a += b, a -= b, dst): " . $a . "<br>";
echo "<br><br>";

// operasi identitas
$hasilIdentik = $a === $b;  // apakah $a identik dengan $b (nilai dan tipe data sama)
$hasilTidakIdentik = $a !== $b;  // apakah $a tidak identik dengan $b (nilai atau tipe data berbeda)

// output hasil operasi identitas
echo "Apakah \$a identik dengan \$b? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah \$a tidak identik dengan \$b? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";
?>
