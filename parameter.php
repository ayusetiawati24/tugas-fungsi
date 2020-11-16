<?php

function hitung_tinggi_badan($tinggi_badan_dulu, $tinggi_badan_sekarang){
    $tinggi_badan = $tinggi_badan_sekarang - $tinggi_badan_dulu;
    return $tinggi_badan;
}

echo "tinggi badan Mila naik ". hitung_tinggi_badan(155, 160) ."cm\n";
echo "tinggi badan Astawa naik ". hitung_tinggi_badan(158, 170) ."cm\n";
echo "tinggi badan Andika naik ". hitung_tinggi_badan(160, 174) ."cm\n";

?>