<?php
// Memulai session
session_start();

// Mengecek apakah session sudah ada isinya atau belum

// Jika ada session dengan nama 'tmpMartabak' maka tampung dalam variabel 'tmpNamaMartabak'
if (isset($_SESSION['tmpNamaMartabak'])) {
    $tmpNamaMartabak = $_SESSION['tmpNamaMartabak'];
}

if (isset($_SESSION['tmpVarianMartabak'])) {
    $tmpVarianMartabak = $_SESSION['tmpVarianMartabak'];
}

if (isset($_SESSION['tmpPorsiMartabak'])) {
    $tmpPorsiMartabak = $_SESSION['tmpPorsiMartabak'];
}

if (isset($_SESSION['tmpHargaMartabak'])) {
    $tmpHargaMartabak = $_SESSION['tmpHargaMartabak'];
}

$namaMartabak = $_GET['namaMartabak'];
$varianMartabak = $_GET['varianMartabak'];
$porsiMartabak = $_GET['porsiMartabak'];
$hargaMartabak = $_GET['hargaMartabak'];

$_SESSION['namaMartabak'] = $namaMartabak;
$_SESSION['varianMartabak'] = $varianMartabak;
$_SESSION['porsiMartabak'] = $porsiMartabak;
$_SESSION['hargaMartabak'] = $hargaMartabak;

echo "Nama " . $_SESSION['namaMartabak'] . "<br>";
echo "Varian " . $_SESSION['varianMartabak'] . "<br>";
echo "Porsi " . $_SESSION['porsiMartabak'] . "<br>";
echo "Harga " . $_SESSION['hargaMartabak'] . "<br>";

?>