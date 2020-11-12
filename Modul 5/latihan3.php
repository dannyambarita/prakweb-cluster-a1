<!DOCTYPE html>
<html>

<head>
    <title>Latihan no. 3</title>

    <?php

    for ($bilangan = 1; $bilangan <= 50; $bilangan++) {
        $nomor = 0;
        for ($angka = 1; $angka < $bilangan; $angka++) {
            if ($bilangan % $angka == 0) {
                $nomor++;
            }
        }
        if ($nomor == 2) {
            echo "angka " . $angka . "  bilangan prima<br>";
        } else {
            echo "angka " . $angka . "  bukan bilangan prima<br>";
        }
    }

    ?>