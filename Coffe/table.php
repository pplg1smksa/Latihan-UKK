<?php
session_start();

if (isset($_SESSION['coffeeName'])) {
    $coffeeName = $_SESSION['coffeeName'];
}

if (isset($_SESSION['coffeeType'])) {
    $coffeeType = $_SESSION['coffeeType'];
}

if (isset($_SESSION['coffeePrice'])) {
    $coffeePrice = $_SESSION['coffeePrice'];
}

$coffeeName[] = $_POST['coffeeName'];
$coffeeType[] = $_POST['coffeeType'];
$coffeePrice[] = $_POST['coffeePrice'];

$_SESSION['coffeeName'] = $coffeeName;
$_SESSION['coffeeType'] = $coffeeType;
$_SESSION['coffeePrice'] = $coffeePrice;

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border="1px" cellpadding="5px">
        <tr>
            <th>Nama Kopi</th>
            <th>Tipe Kopi</th>
            <th>Harga Kopi</th>
        </tr>
        <?php for ($i=0; $i < count($coffeeName) ; $i++) : ?>
        <tr>
            <td><?= $coffeeName[$i]; ?></td>
            <td><?= $coffeeType[$i]; ?></td>
            <td><?= $coffeePrice[$i]; ?></td>
        </tr>
        <?php endfor; ?>
    </table>
    <a href="input.php" class="linkhome">Kembali Ke Halaman Utama</a>
</body>
</html>