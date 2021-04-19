<?php

    class calculator
    {
        public function pertambahan(){
            echo "masukkan nilai pertama : ";
            $nilai1 = trim(fgets(STDIN));
            echo "masukkan nilai kedua : ";
            $nilai2 = trim(fgets(STDIN));

            $hasil = $nilai1 + $nilai2;

            echo "\nhasil dari $nilai1 + $nilai2 = $hasil \n";
        }

        public function pengurangan(){
            echo "masukkan nilai pertama : ";
            $nilai1 = trim(fgets(STDIN));
            echo "masukkan nilai kedua : ";
            $nilai2 = trim(fgets(STDIN));

            $hasil = $nilai1 - $nilai2;

            echo "\nhasil dari $nilai1 - $nilai2 = $hasil\n";

        }

        public function perkalian(){
            echo "masukkan nilai pertama : ";
            $nilai1 = trim(fgets(STDIN));
            echo "masukkan nilai kedua : ";
            $nilai2 = trim(fgets(STDIN));

            $hasil = $nilai1 * $nilai2;

            echo "\nhasil dari $nilai1 * $nilai2 = $hasil\n";
        }

        public function pembagian(){
            echo "masukkan nilai pertama : ";
            $nilai1 = trim(fgets(STDIN));
            echo "masukkan nilai kedua : ";
            $nilai2 = trim(fgets(STDIN));

            $hasil = $nilai1 / $nilai2;

            echo "\nhasil dari $nilai1 / $nilai2 = $hasil\n";
        }
    }

?>