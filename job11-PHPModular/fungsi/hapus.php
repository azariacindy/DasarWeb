elseif (!empty($_GET['anggota'])) {
    $id = antiinjection($koneksi, $_GET['id']);
    $query = "DELETE FROM user WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        $query2 = "DELETE FROM anggota WHERE user_id = '$id'";
        
        if (mysqli_query($koneksi, $query2)) {
            pesan('success', 'Anggota Telah Terhapus.');
        } else {
            pesan('warning', 'Data Login Terhapus Tetapi Data Anggota Tidak Terhapus Karena: ' . mysqli_error($koneksi));
        }
    } else {
        pesan('danger', 'Anggota Tidak Terhapus Karena: ' . mysqli_error($koneksi));
    }

    header("Location: ../index.php?page=anggota");
    exit;
}
