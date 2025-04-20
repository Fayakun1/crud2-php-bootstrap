<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Pengguna</h2>
    <a href="create.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th><th>Nama</th><th>Email</th><th>Usia</th><th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['age']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
