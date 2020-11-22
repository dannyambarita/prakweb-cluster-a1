<?php
function faktorial($bilangan)
{
    if ($bilangan >= 1) {
        echo "faktorial $bilangan adalah = </br>";
        for ($i = 1; $i <= $bilangan; $i++) {
            $k = 1;

            echo $i . "! = ";

            for ($j = $i; $j > 0; $j--) {
                if ($j == 1) {
                    echo " 1 = " . $k;
                } else {
                    echo $j . " x ";
                };
                $k = $k * $j;
            }
            echo "</br>";
        }
    } else if ($bilangan == 0) {

        echo "0! = 1";
    } else {
        echo "Anda salah memasukkan bilangan.";
    }
}

$hasil = faktorial(10);
