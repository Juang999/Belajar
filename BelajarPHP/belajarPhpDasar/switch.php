<?php

echo "masukkan nilai hasil ujian kamu: ";
$nilai = trim(fgets(STDIN));

switch ($nilai) {
    case 'A':
        echo "nilai anda sangat memuaskah\n";
        break;
    case 'B':
        echo "nilai anda memuaskan\n";
        break;
    case 'C':
        echo "nilai anda cukup\n";
        break;
    case 'D':
        echo "nilai anda kurang\n";
        break;
    default:
        echo "maaf, anda tidak lulus\n";
        break;
}

?>