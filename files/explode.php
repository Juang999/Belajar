<?php

echo "masukkan nomor telepon anda : ";

$isi = trim(fgets(STDIN));

$data = explode("8", $isi, 2);

print_r($data);

echo "\n";

$data = implode("000", $data);

print_r($data);

echo "\n"; 
