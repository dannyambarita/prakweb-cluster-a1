<!DOCTYPE html>
<html>

<head>
    <title>Latihan no. 1</title>

    <?php
    $bil1 = 20;
    $bil2 = 5;

    $tambah = $bil1 + $bil2;
    $kurang = $bil1 - $bil2;
    $bagi = $bil1 / $bil2;
    $kali = $bil1 * $bil2;
    $mod = $bil1 % $bil2;

    echo "bilangan 1 = " . $bil1 . "<br>";
    echo "bilangan 2 = " . $bil2 . "<br>";
    echo "<br>";
    echo "Berikut merupakan hasil dari seriap operasi<br>";
    echo "<br>";
    echo "PENJUMLAHAN<br>";
    echo "Operator<br>";
    echo "Hasil : " . $tambah . "<br>";
    echo "PENGURANGAN<br>";
    echo "Operator<br>";
    echo "Hasil : " . $kurang . "<br>";
    echo "PERKALIAN<br>";
    echo "Operator<br>";
    echo "Hasil : " . $kali . "<br>";
    echo "PEMBAGIAN<br>";
    echo "Operator<br>";
    echo "Hasil : " . $bagi . "<br>";
    echo "MODULUS<br>";
    echo "Operator<br>";
    echo "Hasil : " . $mod . "<br>";
    ?>