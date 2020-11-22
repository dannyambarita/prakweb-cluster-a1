<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $cari = $_POST['nama'];
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "institut");
    $hasil = mysqli_query($conn, "select * from mahasiswa where nama like '%$cari%'");
    $jumlah = mysqli_num_rows($hasil);
    ?>
    <br>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <div class="card" style="width:600px">
            <div class="card-body">
                <p>ditemukan : <?= $jumlah ?></p>
                <hr>
                <?php
                while ($baris = mysqli_fetch_array($hasil)) {
                    echo "<h4>Nama : $baris[1]</h4>";
                    echo "<p>NIM : $baris[0] </p>";
                    echo "<p>Alamat : $baris[2] </p>";
                    echo "<hr>";
                    //$nim = $_GET['nim'];
                    //$query = "DELETE from mahasiswa where nim='$nim'";
                }
                ?>
                <a href="Data Mahasiswa.php"><button type="button" name="cari" class="btn btn-primary">back</button>
            </div>
        </div>
</body>

</html>