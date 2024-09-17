<?php
// array of students with their names and grades
$nilaiMhs = [
    ['nama' => 'Alice', 'grade' => 85],
    ['nama' => 'Bob', 'grade' => 92],
    ['nama' => 'Charlie', 'grade' => 78],
    ['nama' => 'David', 'grade' => 64],
    ['nama' => 'Eva', 'grade' => 90],
];

// calculate the class average
$nilaiTotal = 0;
$numMhs = count($nilaiMhs);

foreach ($nilaiMhs as $mhs) {
    $nilaiTotal += $mhs['grade'];
}

$nilaiRataRata = $nilaiTotal / $numMhs;

// display students who scored above the class average
echo "Class average grade: $nilaiRataRata<br>";
echo "Students who scored above the average:<br>";

foreach ($nilaiMhs as $mhs) {
    if ($mhs['grade'] > $nilaiRataRata) {
        echo "nama: {$mhs['nama']}, Grade: {$mhs['grade']}<br>";
    }
}
?>