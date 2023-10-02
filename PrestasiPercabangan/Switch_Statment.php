<?php

$nilai = "A";

switch($nilai){
    case "A":
        echo "Selamat anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
    default;
        echo "Coba Lagi" . PHP_EOL;
} 