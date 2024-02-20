<?php
include '../koneksi.php';
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $query = "INSERT INTO petugas VALUES('','$username','$password','$nama')";
    $data = mysqli_query($koneksi, $query);

    echo "<script>alert('Berhasil Menambahkan Petugas!'); 
    document.location.href = 'petugas.php';</script>";
    header('location:petugas.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header_admin.php'; ?>

</head>

<body>
    <?php

    ?>

    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Tambah Data Petugas</h5>

            <!-- Vertical Form -->
            <form action="" method="post" class="row g-3">
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="col-12">
                    <label for="input4" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="password">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="petugas.php" class="btn btn-danger">Kembali</a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>


    <div class="footer">
        <?php include 'footer_admin.php'; ?>
    </div>
</body>

</html>