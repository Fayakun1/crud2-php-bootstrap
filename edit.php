<?php
include('koneksi.php');

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$user = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $age   = $_POST['age'];

    $conn->query("UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Pengguna</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="<?= $user['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Usia</label>
            <input type="number" name="age" class="form-control" value="<?= $user['age'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
