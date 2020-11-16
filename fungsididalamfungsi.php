<?php

function hitung_luas_persegi($sisiA,$sisiB)
{
    $luas_persegi=($sisiA * $sisiB)/2;
    return $luas_persegi;
}

    function hitung_luas_jajar_genjang($alas,$tinggi)
    {
        $luas_jajar_genjang=($alas * $tinggi)/2;
        return $luas_jajar_genjang;
    }

$persegi = hitung_luas_persegi(10,10);
$jajar_genjang = hitung_luas_jajar_genjang(5,10);

echo "luas persegi : $persegi\n";
echo "luas jajar genjang : $jajar_genjang\n";


?>