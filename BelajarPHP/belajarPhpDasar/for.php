<?php

    echo  "masukkan perkataan yang ingin diulang: ";
    $ulang1 = trim(fgets(STDIN));
    echo "masukkan berapa banyak perulangan: ";
    $ulang2 = trim(fgets(STDIN));

    for ($i=1; $i <= $ulang2 ; $i++) { 
        echo $i . ". " . $ulang1 . "\n";
    }

?>