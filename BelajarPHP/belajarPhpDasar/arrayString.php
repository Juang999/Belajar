<?php 

    $siswa = [
        ['nama' => 'Juang', 'kelas' => '6'],
        ['nama' => 'genta', 'kelas' => '6'],
        ['nama' => 'ilahaka', 'kelas' => '6'],
        ['nama' => 'ilahana', 'kelas' => '6'],
        ['nama' => 'nasrul', 'kelas' => '6'],
    ];

    $data = serialize($siswa) . "\n";
    $cek = file_put_contents("jkl.txt", $data);

    var_dump($cek);
    die;

?>