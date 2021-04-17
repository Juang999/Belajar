<?php
 echo "masukkan nilai anda: ";
 $nilai = trim(fgets(STDIN));

 echo ($nilai == 80) ? "anda lulus\n" : "anda tidak lulus\n";

?>