<?php

class property
{
    public $boolean = "True";
}

$property = new property;

echo "masukkan nilai boolean : ";
$value = trim(fgets(STDIN));

if ($value == $property->boolean) {
    echo "identifikasi property berhasil\n";
} else {
    echo "identifikasi gagal\n";
}

?>