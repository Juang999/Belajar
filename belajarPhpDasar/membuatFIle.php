<?php 

    // echo "tulis nama file: ";
    // $file = trim(fgets(STDIN));
    // echo "masukkan kata yang ingin anda simpan: ";
    // $word = trim(fgets(STDIN));

    $kata = [
        ["nama" => "juang", "kelas" => "6TMI"],
        ["nama" => "juang", "kelas" => "6TMI"],
        ["nama" => "juang", "kelas" => "6TMI"],
        ["nama" => "juang", "kelas" => "6TMI"],
        ["nama" => "juang", "kelas" => "6TMI"],
    ];

    $word = serialize($kata);

    try {
        $data = file_put_contents("hello.txt", "$word\n");
        echo "data berhasil disimpan\n";
    } catch (Throwable $th) {
        echo "data gagal disimpan\n";
    }

?>