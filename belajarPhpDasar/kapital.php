<?php

$nama = "bangkit juang raharjo";

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
    <h1>hallo nama saya, <?php echo ucwords($nama); ?></h1>
    <h1>hallo nama saya, <?php echo strtoupper($nama); ?></h1>
</body>
</html>