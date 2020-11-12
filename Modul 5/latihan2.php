<!DOCTYPE html>
<html>

<head>
    <title>Latihan no. 2</title>

    <?php
    $word = ["lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "html", "php", "css"];
    sort($word);
    for ($i = 0; $i < count($word); $i++) {
        echo $word[$i] . "<br>";
    }
    ?>