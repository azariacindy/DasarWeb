<?php
// jumlah total kursi dan kursi yang terisi
$total_seats = 45;
$occupied_seats = 28;

// menghitung angka kursi kosong
$empty_seats = $total_seats - $occupied_seats;

// menghitung persentase
$percentage_empty = ($empty_seats / $total_seats) * 100;

// output
echo "Percentage of empty seats: " . number_format($percentage_empty, 2) . "%";
?>
