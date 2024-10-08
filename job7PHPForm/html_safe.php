<?php
// Periksa apakah form telah dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Memeriksa apakah input ada
    if (isset($_POST['input'])) {
        // Mengamankan input dengan htmlspecialchars
        $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
        echo "Input yang aman: " . $input . "<br>";
    } else {
        echo "Input tidak ditemukan.<br>";
    }

    // Memeriksa apakah email ada
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        
        // Validasi format email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "<br>";
            // Lanjutkan dengan pengolahan email yang aman
        } else {
            echo "Email tidak valid.<br>";
        }
    } else {
        echo "Email tidak ditemukan.<br>";
    }
}
?>
