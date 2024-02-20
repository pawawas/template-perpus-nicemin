<?php
include '../koneksi.php';
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO user VALUES('','$username','$password','$email','$nama','$alamat')";
    $data = mysqli_query($koneksi, $query);

    echo "<script>alert('Berhasil Menambahkan Anggota!'); 
    document.location.href = 'anggota.php';</script>";
    header('location:anggota.php');
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

            <h5 class="card-title">Tambah Data Anggota</h5>

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
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="1234 Main St" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="anggota.php" class="btn btn-danger">Kembali</a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>


    <div class="footer">
        <?php include 'footer_admin.php'; ?>
    </div>
</body>

</html>