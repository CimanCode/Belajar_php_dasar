<?php

$nilai = 70;
$absen = 90;

if($nilai >= 90 && $absen >= 90){
    echo "Selamat Nilai Anda A" . PHP_EOL;
} else if($nilai >= 80 && $absen >= 80){
    echo "Selamat Nilai Anda B" . PHP_EOL;
} else if($nilai >= 70 && $absen >= 70) {
    echo "Selamat Nilai Anda C" . PHP_EOL;
} else if($nilai >= 60 && $absen >= 60){
    echo "Nilai Anda D" > PHP_EOL;
} else {
    echo "Nilai Anda E";
}