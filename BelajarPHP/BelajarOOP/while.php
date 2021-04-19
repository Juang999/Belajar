<?php

// $loop = true;

while (true) {
    echo "ingin diulangi [y/n]? ";
    $pilih = trim(fgets(STDIN));
    if ($pilih == "n") {
        echo "terimakasih telah menggunakan tools ini :)";
        break;
    }
}

?>