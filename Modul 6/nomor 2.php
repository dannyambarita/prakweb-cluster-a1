<?php
function bet($name, $color = "red")
{
    echo '<font color="' . $color . '">' . $name .  '</font>';
    $jumlah = strlen($name);
    if ($jumlah <= 10 && $jumlah >= 1) {
        $harga = $jumlah * 300;
        echo " $harga";
    } elseif ($jumlah <= 20 && $jumlah >= 11) {
        $harga = $jumlah * 500;
        echo " $harga";
    } else {
        $harga = $jumlah * 700;
        echo " $harga";
    }
}

$hasil = bet('Christio Danny Gratia Ambarita', 'black');
