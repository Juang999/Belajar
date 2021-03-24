<?php

$siswa = [
    ['nama' => 'juang', 'kelas' => '6TMI', 'gol.darah' => 'B'],
    ['nama' => 'Ilahaka', 'kelas' => '6TMI', 'gol.darah' => 'X'],
    ['nama' => 'Fadil', 'kelas' => '6TMI', 'gol.darah' => 'AB'],
    ['nama' => 'Genta', 'kelas' => '3SMA', 'gol.darah' => 'A'],
    ['nama' => 'Nasrul', 'kelas' => '6TMI', 'gol.darah' => 'O'],
    ['nama' => 'Dzul', 'kelas' => '6TMI', 'gol.darah' => 'E'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Gol. Darah</th>
        </tr>

        <?php foreach ($siswa as $key => $value): ?>
            <tr>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['kelas']; ?></td>
                <td><?php echo $value['gol.darah']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>