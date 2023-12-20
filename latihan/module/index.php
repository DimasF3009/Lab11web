<?php
require '../class/function.php';
$result = query('SELECT * FROM Biodata');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Mahasiswa</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 900px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.main {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 2px solid #ddd;
}

th {
    background-color: #3498db;
    color: #fff;
}

td {
    background-color: #ecf0f1;
}

td img {
    max-width: 50px;
    max-height: 50px;
    border-radius: 4px;
    display: block;
    margin: auto;
}

td a {
    display: block;
    text-align: center;
    padding: 4px;
    background-color: #2ecc71;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
}

td a:hover {
    background-color: #27ae60;
}
</style>
<?php require('../templates/header_modul.php')?>
    <div class="container">
        <h1>Mahasiswa</h1>
        <a href="artikel/tambah.php"> Tambah Data</a>
        <a href="../home.php">Kembali</a>
        <div class="main">
            <table>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php foreach($result as $row): ?>
            <tr>
                <td><?= $row['Nim'];?></td>
                <td><?= $row['Nama'];?></td>
                <td><?= $row['Kelas'];?></td>
                <td><a href="artikel/ubah.php?id=<?= $row['id']; ?>">ubah</a>
                <a href="artikel/hapus.php?id=<?= $row['id']; ?>">hapus</a></td>
            </td>
            </tr>
            <?php endforeach; else: ?>
            <tr>
                <td colspan="1">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>