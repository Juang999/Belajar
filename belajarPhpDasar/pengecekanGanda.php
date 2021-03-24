<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengecekan ganda</title>
</head>
<body>
    <form action="" method="POST">
    <label for="ukuran">Ukuran baju</label>
    <input type="text" name=ukuran id="ukuran"><br>
    <label for="warna">Warna baju</label>
    <input type="text" name="warna" id="warna"><br>
    <button type="submit">submit</button>
    </form>
</body>
</html>


<?php

if (!empty($_POST)) {
       
    $ukuran = strtoupper($_POST['ukuran']);
    $warna = ucwords($_POST['warna']);
    
    $biaya = 25000;
    $biaya_tambahan = 10000;
    
    if ($ukuran == "XXL" && $warna == "Putih") {
        echo "total harga belanjaan adalah: " . ($biaya + $biaya_tambahan) . "\n";
    } else {
        echo "total harga belanjaan adalah: " . $biaya;
    }
    
}
?>