<?php

echo "--=[ DAFTAR WARNA ]=--\n";

$daftar_warna = ['merah', 'kuning', 'hijau', 'biru'];

$nomor = 1;

foreach ($daftar_warna as $key) {
    echo $nomor++ . ". " . $key . "\n";
}

echo "tulis warna untuk dihitung dari dalam database: ";
$pilih = is_integer(trim(fgets(STDIN)));

var_dump($pilih);

die;

if (is_integer($pilih)) {
    echo "tulis namanya bego!!!\n";
    die;
}

die;

$warna = ['merah','kuning','hijau','biru','merah','kuning','hijau',
          'biru','merah','kuning','hijau','biru','merah','kuning'];

$total_warna = 0;

for ($i=0; $i < 14; $i++) { 
    if ($warna[$i] == $pilih) {
        $total_warna++;
    }
}

echo "jumlah warna ada merah ada $total_warna\n";