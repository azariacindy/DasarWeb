<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";

// Sanitize and retrieve username and password from POST request
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

// Prepare SQL query to prevent SQL injection
$query = "SELECT username, level, salt, password as hashed_password FROM user WHERE username = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    // Close the database connection
    mysqli_close($koneksi);

    if ($salt !== null && $hashed_password !== null) {
        $combined_password = $salt . $password;

        // Verify the hashed password
        if (password_verify($combined_password, $hashed_password)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            header("Location: index.php");
            exit; // Stop further execution after redirect
        } else {
            pesan('danger', "Login gagal. Password Anda Salah.");
            header("Location: login.php");
            exit;
        }
    } else {
        pesan('warning', "Username tidak ditemukan.");
        header("Location: login.php");
        exit;
    }
} else {
    // Handle case where the username is not found in the database
    mysqli_close($koneksi); // Ensure the connection is closed
    pesan('warning', "Username tidak ditemukan.");
    header("Location: login.php");
    exit;
}
?>
