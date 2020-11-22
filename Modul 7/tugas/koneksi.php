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
    <br>
    <?php
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    //$komentar = $_POST["komentar"];
    //$id_jur = $_POST["id_jur"];
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi gagal");
    mysqli_select_db($conn, "institut");
    $sqlstr = "insert into mahasiswa (nim,nama,alamat) values ('$nim','$nama','$alamat')";
    $hasil = mysqli_query($conn, $sqlstr);
    ?>

    <div class="container">
        <h2>Data Mahasiswa</h2>
        <div class="card" style="width:400px">
            <div class="card-body">
                <h4 class="card-title">Nama : <?= $nama ?></h4>
                <p class="card-title">NIM : <?= $nim ?></p>
                <p class="card-title">Alamat : <?= $alamat ?></p>
            </div>
        </div>
        <br>
        <a href="Data Mahasiswa.php"><button type="button" name="cari" class="btn btn-primary">back</button>
</body>

</html>