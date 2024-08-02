<?php
// // Memulai session
session_start();
// Mengecek apakah session sudah ada isinya atau belum

// Jika ada session dengan nama 'tmpMartabak' maka tampung dalam variabel 'tmpNamaMartabak'
if (isset($_SESSION['tmpNamaMartabak'])) {
    $namaMartabak = $_SESSION['tmpNamaMartabak'];
}

if (isset($_SESSION['tmpVarianMartabak'])) {
    $varianMartabak = $_SESSION['tmpVarianMartabak'];
}

if (isset($_SESSION['tmpPorsiMartabak'])) {
    $porsiMartabak = $_SESSION['tmpPorsiMartabak'];
}

if (isset($_SESSION['tmpHargaMartabak'])) {
    $hargaMartabak = $_SESSION['tmpHargaMartabak'];
}

$namaMartabak[] = $_GET['namaMartabak'];
$varianMartabak[] = $_GET['varianMartabak'];
$porsiMartabak[] = $_GET['porsiMartabak'];
$hargaMartabak[] = $_GET['hargaMartabak'];

$_SESSION['tmpNamaMartabak'] = $namaMartabak;
$_SESSION['tmpVarianMartabak'] = $varianMartabak;
$_SESSION['tmpPorsiMartabak'] = $porsiMartabak;
$_SESSION['tmpHargaMartabak'] = $hargaMartabak;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>Martabak</title>
</head>
<body>
    <h1>Martabak Guacor</h1>
    <table>
        <tr>
            <th>Pesanan</th>
            <th>Nama Martabak</th>
            <th>Varian Martabak</th>
            <th>Porsi Martabak</th>
            <th>Harga Martabak</th>
        </tr>
        <?php for ($i=1; $i < count($namaMartabak) ; $i++) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $namaMartabak[$i] ?></td>
            <td><?= $varianMartabak[$i] ?></td>
            <td><?= $porsiMartabak[$i] ?></td>
            <td><?= $hargaMartabak[$i] ?></td>
        </tr>
        <?php endfor; ?>
    </table>
    <a href="index.php">Kembali</a>
</body>
</html>