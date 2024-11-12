<?php
require_once 'Crud.php';  // Ensure the class name matches exactly
$crud = new Crud();

// Make sure 'id' is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tampil = $crud->readById($id);

    // Check if data is found for the given ID
    if (!$tampil) {
        echo "Position not found!";
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $position = $_POST['position'];
        $keterangan = $_POST['keterangan'];

        // Update the data in the database
        $crud->update($id, $position, $keterangan);

        // Redirect to the main page after updating
        header("Location: index.php");
        exit();
    }
} else {
    echo "No ID specified!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Position</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Position</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="<?php echo htmlspecialchars($tampil['jabatan']); ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan" cols="30" rows="10" required><?php echo htmlspecialchars($tampil['keterangan']); ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
