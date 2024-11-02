<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?? '' ?>">
    <title>Data Anggota</title>
    
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php" style="color: #fff;">CRUD dengan Ajax</a>
</nav>
<div class="container">
    <div align="center" style="margin: 30px;">Data Anggota</div>
    <form method="post" id="form-data">
        <div class="form-group row">
            <label for="id" class="col-sm-3 col-form-label">ID</label>
            <div class="col-sm-9">
                <input type="number" name="id" id="id" class="form-control" required="true">
                <p class="text-danger" id="err_id"></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" name="nama" id="nama" class="form-control" required="true">
                <p class="text-danger" id="err_nama"></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
                <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required="true"> Laki-Laki
                <input type="radio" name="jenis_kelamin" id="jenkel2" value="P"> Perempuan
                <p class="text-danger" id="err_jenis_kelamin"></p>
            </div>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
            <p class="text-danger" id="err_alamat"></p>
        </div>
        <div class="form-group">
            <label>No Telp</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
            <p class="text-danger" id="err_no_telp"></p>
        </div>
        <div class="form-group">
            <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </form>
    <div class="data"></div>
</div>

<div class="text-center">© <?= date('Y'); ?> Copyright:
    <a href="https://google.com"> Desain Dan Pemrograman Web</a>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    // Mengatur header untuk keamanan
    $.ajaxSetup({
        headers: {
            'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.data').load('data.php');

    // Function to validate the form fields
    $('#simpan').click(function() {
        let isValid = true;

        // Clear previous error messages
        $('.text-danger').text('');

        // Validate ID
        if ($('#id').val() === '') {
            $('#err_id').text('ID tidak boleh kosong.');
            isValid = false;
        }

        // Validate Nama
        if ($('#nama').val().trim() === '') {
            $('#err_nama').text('Nama tidak boleh kosong.');
            isValid = false;
        }

        // Validate Jenis Kelamin
        if (!$('input[name="jenis_kelamin"]:checked').val()) {
            $('#err_jenis_kelamin').text('Jenis Kelamin harus dipilih.');
            isValid = false;
        }

        // Validate Alamat
        if ($('#alamat').val().trim() === '') {
            $('#err_alamat').text('Alamat tidak boleh kosong.');
            isValid = false;
        }

        // Validate No Telp
        if ($('#no_telp').val().trim() === '') {
            $('#err_no_telp').text('No Telp tidak boleh kosong.');
            isValid = false;
        }

        // If all validations pass, submit the form via AJAX or any other method
        if (isValid) {
            // Your AJAX form submission logic here
            alert("Form submitted successfully!"); // Placeholder for form submission
        }
    });
});
</script>
</body>
</html>
