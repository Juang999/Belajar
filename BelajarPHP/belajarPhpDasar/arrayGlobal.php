<?php 

if (!empty($_POST['submit'])) {
    print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="nama">Nama</label><br>
    <input type="text" name="nama" id="nama"><br><br>
    <label for="alamat">ALamat</label><br>
    <input type="text" name="alamat" id="alamat"><br><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>