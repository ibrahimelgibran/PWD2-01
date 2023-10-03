<?php

$nilai = 70;
$absen = 70;

if($nilai >= 70 && $absen >= 70){
    echo "Nilai anda A" . PHP_EOL;
} else if($nilai >= 60 && $absen >= 60){
    echo "Nilai anda B" . PHP_EOL;
} else if($nilai >= 50 && $absen >= 50){
    echo "Nilai anda C" . PHP_EOL;
}