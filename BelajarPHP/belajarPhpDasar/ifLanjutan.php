<?php
echo "masukkan nama anda: ";
$nama = ucwords(trim(fgets(STDIN)));

echo "berapakah nilai test anda? ";
$nilaiTest = trim(fgets(STDIN));
echo "berapa nilai wawancara anda? ";
$wawancara = trim(fgets(STDIN));

if ($nilaiTest >= 70 && $wawancara == 'A') {
    echo "selamat kepada saudara $nama, anda lulus untuk seleksi kali ini\n";
} else {
    echo "maaf kepada saudara $nama anda tidak lulus untuk seleksi kali ini\n";
}

?>