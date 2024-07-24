<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Coffee Mayeng</title>
</head>
<body>
    <h2>COFFEE MAYENG</h2>

    <div class="container">
        <form action="table.php" method="post">

            <label for="coffeeName">Nama Kopi</label>
            <input type="text" name="coffeeName" required>

            <label for="coffeeType">Tipe Kopi</label>
            <input type="text" name="coffeeType" required>

            <label for="coffeePrice">Harga</label>
            <input type="text" name="coffeePrice" required>

            <input type="submit" value="Simpan">
        
        </form>
    </div>
</body>
</html>