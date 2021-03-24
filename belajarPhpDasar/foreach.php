<?php

    $warna = ['merah','kuning','hijau','biru','merah','kuning','hijau','biru',
              'merah','kuning','hijau','biru','merah','kuning','hijau','biru','abu-abu'];

    $jumlah_warna = 0;

    echo "masukkan nama warna: ";
    $pilih = trim(fgets(STDIN));

    foreach ($warna as $key => $value) {
        echo "warna ke-$key adalah $value\n";

        if ($value == $pilih) {
            $jumlah_warna++;
        }
    }

    echo "jumlah warna merah ada $jumlah_warna\n";

?>