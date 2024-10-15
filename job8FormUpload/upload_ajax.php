<?php 
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpeg", "jpg", "png", "gif");
    $upload_directory = "images/";

    foreach ($_FILES['files']['name'] as $key => $file_name) {
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_ext = strtolower(end(explode('.', $file_name)));

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPEG, JPG, PNG, atau GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, $upload_directory.$file_name);
            echo "File " . $file_name . " berhasil diunggah.<br>";
        } else {
            echo implode("", $errors);
        }
    }
}
?>
