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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "institut";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $query = mysqli_query($conn, "SELECT nama_jur FROM jurusan");
    $data = mysqli_fetch_assoc($query);
    ?>
    <div class="container"><br>
        <center>
            <h1>Data Mahasiswa</h1>
        </center>
        <form action="koneksi.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>NIM : </label>
                <input type="number" name="nim" class="form-control" id="nim">
            </div>
            <div class="form-group">
                <label>Nama : </label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label>Alamat : </label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
            <div class="form-group">
                <label>Jurusan : </label>
                <select>
                    <?php
                    if (isset($data)) {
                        foreach ($data as $item) {
                            echo '<option value="' . $item . '">' . $item . '</option>';
                        }
                    } ?>
                </select>
            </div>
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <form action="search.php" method="POST" enctype="multipart/form-data">
            <center>
                <h1>Search</h1>
            </center>

            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>

            <button type="submit" value="cari" class="btn btn-primary">Cari</button>
        </form>

        <form action="hapus.php" method="POST" enctype="multipart/form-data">
            <center>
                <h1>Delete</h1>
            </center>

            <div class="form-group">
                <label>NIM:</label>
                <input type="number" name="nim" class="form-control" id="nim">
            </div>

            <button type="submit" class="btn btn-primary">Hapus</button>
        </form>
    </div>
</body>

</html>