<?php
// $pesan = "Saya arek malang";
// echo strrev($pesan) . "<br>";

$pesan = "saya arek malang";
// Split the string into an array of words
$pesanPerKata = explode(" ", $pesan);
// Reverse each word in the array
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
// Combine the array back into a string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>