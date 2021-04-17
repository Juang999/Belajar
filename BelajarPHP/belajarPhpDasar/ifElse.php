<?php

echo "masukkan nama anda: ";
$nama = trim(fgets(STDIN));

if ($nama == "juang") {
    echo "selamat datang $nama";
} else {
    echo "maaf nama anda tidak terdaftar\n";
}