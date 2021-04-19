<?php

include("calfunc.php");

$calculator = new calculator;

while (true) {
    
    system("clear");
    echo "--=[ CALCULATOR BASIC ]=--\n";
    echo "\n";
    echo "1. Pertambahan\n";
    echo "2. Pengurangan\n";
    echo "3. Perkalian\n";
    echo "4. Pembagian\n";
    echo "\n";
    echo "pilihan > ";
    $pilihan = trim(fgets(STDIN));
    echo "\n";
    if ($pilihan == 1) {
        $calculator->pertambahan();
    } elseif ($pilihan == 2) {
        $calculator->pengurangan();
    } elseif ($pilihan == 3) {
        $calculator->perkalian();
    } elseif ($pilihan == 4) {
        $calculator->pembagian();
    } else {
        echo "maaf pilihan tidak ada!!\n";
        exit();
    }

    echo "\ningin diulangi [y/n]? ";
    $jawab = trim(fgets(STDIN));
    if ($jawab == "n") {
        echo "\nterimakasih telah menggunakan tools ini :)\n";
        break;
    }
}

?>