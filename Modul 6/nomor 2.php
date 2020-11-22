<?php
function bet($name, $color = "red")
{
    echo '<font color="' . $color . '">' . $name .  '</font>';
    $jumlah = strlen($name);
    if ($jumlah <= 10 && $jumlah >= 1) {
        $harga = $jumlah * 300;
        echo '<font color="' . $color . '"> ' . $harga .  '</font>';
    } elseif ($jumlah <= 20 && $jumlah >= 11) {
        $harga = $jumlah * 500;
        echo '<font color="' . $color . '"> ' . $harga .  '</font>';
    } else {
        $harga = $jumlah * 700;
        echo '<font color="' . $color . '"> ' . $harga .  '</font>';
    }
    echo "</br>";
}

$hasil = bet('Christio Danny Gratia Ambarita', 'black');
$hasil = bet('Danny Ambarita', 'grey');
$hasil = bet('Christio');
