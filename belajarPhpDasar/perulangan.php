<?php

echo "beri nama file berformat txt: ";
$file = trim(fgets(STDIN));
echo "\n";
echo "masukkan angka perulangan: ";
$ulang = trim(fgets(STDIN));
echo "\n";

for ($i=0; $i < $ulang; $i++) { 
    echo "masukkan password bruteforce: ";
    $password = trim(fgets(STDIN));
    try {

    file_put_contents("$file.txt", "$password\n", FILE_APPEND);
    echo "status: password berhasil diinputkan!\n\n";
    
    } catch (Throwable $th) {
        echo "status: input gagal" . $th->getMessage();
    }
}

echo "============================\n";
echo "= LIST PASSWORD BRUTEFORCE =\n";
echo "============================\n\n";

echo file_get_contents("$file.txt");