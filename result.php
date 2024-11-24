<?php
session_start();
if (!isset($_SESSION['formData'])) {
    die("Tidak ada data untuk ditampilkan.");
}

$data = $_SESSION['formData'];

// Menampilkan informasi browser dan sistem operasi
$userAgent = $_SERVER['HTTP_USER_AGENT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
    <h1>Hasil Pendaftaran</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($data['name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($data['email']) ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?= htmlspecialchars($data['birthdate']) ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= htmlspecialchars($data['gender']) ?></td>
        </tr>
    </table>

    <h2>Isi File</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Konten</th>
        </tr>
        <?php foreach ($data['fileContent'] as $index => $line): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($line) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <footer>
        <p>Browser dan Sistem Operasi: <?= htmlspecialchars($userAgent) ?></p>
    </footer>
</body>
</html>
