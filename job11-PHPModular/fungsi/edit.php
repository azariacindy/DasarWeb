<?php 
require '../config/koneksi.php';  
require '../fungsi/anti_injection.php'; 
require '../fungsi/pesan_kilat.php'; 

if (!empty($_GET['anggota'])) {
    $user_id = antiinjection($koneksi, $_POST['id']);
    $username = antiinjection($koneksi, $_POST['username']);
    $jabatan = antiinjection($koneksi, $_POST['jabatan']);
    $nama = antiinjection($koneksi, $_POST['nama']);
    $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
    $alamat = antiinjection($koneksi, $_POST['alamat']);
    $no_telp = antiinjection($koneksi, $_POST['no_telp']);
    
    $query_anggota = "UPDATE anggota SET 
        nama = '$nama', 
        jenis_kelamin = '$jenis_kelamin', 
        alamat = '$alamat', 
        no_telp = '$no_telp', 
        jabatan_id = '$jabatan' 
        WHERE user_id = '$user_id'";

    if (mysqli_query($koneksi, $query_anggota)) {
        if (!empty($_POST['password'])) {
            $password = $_POST['password'];
            $salt = bin2hex(random_bytes(16));
            $combined_password = $salt . $password;
            $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

            $query_user = "UPDATE user SET 
                username = '$username', 
                password = '$hashed_password', 
                salt = '$salt' 
                WHERE id = '$user_id'";
        } else {
            $query_user = "UPDATE user SET 
                username = '$username' 
                WHERE id = '$user_id'";
        }

        if (mysqli_query($koneksi, $query_user)) {
            pesan('success', 'Anggota Telah Diubah.');
        } else {
            pesan('warning', 'Data Anggota Berhasil Diubah, Tetapi Data Login Gagal Diubah Karena: ' . mysqli_error($koneksi));
        }
    } else {
        pesan('danger', 'Mengubah Anggota Karena: ' . mysqli_error($koneksi));
    }

    header("Location: ../index.php?page=anggota");
    exit;
}
?>