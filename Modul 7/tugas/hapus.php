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
    <br>
    <div class="container">
        <div class="card" style="width:600px">
            <div class="card-body">
                <?php
                $nim = $_POST['nim'];
                $conn = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn, "institut");
                $sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
                if ($conn->query($sql) === TRUE) {
                    echo "Data telah berhasil dihapus";
                } else {
                    echo "Data tidak ditemukan" . mysqli_error($conn);
                }
                ?>
            </div>
        </div>
        <br>
        <a href="Data Mahasiswa.php"><button type="button" name="cari" class="btn btn-primary">back</button>
    </div>