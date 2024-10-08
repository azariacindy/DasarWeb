<?php

    $nama = "John";
    if (isset($nama)) {
        echo "Variable 'nama' telah teridentifikan!";
    } else {
        echo "Variable 'nama' belum teridentifikan atau null!";
    }
    
    echo "<br><br>";

    $age;
    if (isset($age) && $age >= 18) {
        echo "Anda sudah dewasa";
    } else {
        echo "Anda belum dewasa atau variabel 'age' tidak ditemukan";
    }

    echo "<br><br>";

    $data = array("nama" => "Jane", "usia" => 25);
    if (isset($data["nama"])) {
        echo "Nama: " . $data["nama"];
    } else {
        echo "Variabel 'nama' tidak ditemukan dalam array.";
    }
?>
