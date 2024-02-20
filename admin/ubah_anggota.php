<?php
include '../koneksi.php';
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE user SET username='$username',password = '$password', email='$email', nama_lengkap='$nama', alamat='$alamat' WHERE id_user ='$id'");

    echo '<script>alert("Data Berhasil Diubah"); document.location.href ="anggota.php";</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header_admin.php'; ?>

</head>

<body>


    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Ubah Data Anggota</h5>
            <?php
            $result = mysqli_query($koneksi, "SELECT*FROM user where id_user='$id'");
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <!-- Vertical Form -->
                <form action="" method="post" class="row g-3">
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" value="<?= $row['username']; ?>" required></input>
                    </div>
                    <div class="col-12">
                        <label for="input4" class="form-label">Password</label>
                        <input type="text" name="password" value="<?= $row['password']; ?>" class="form-control" id="password"></input>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control" id="email"></input>
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Nama</label>
                        <input type="text" name="nama" value="<?= $row['nama_lengkap']; ?>" class="form-control"></input>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Alamat</label>
                        <input type="text" name="alamat" value="<?= $row['alamat']; ?>" class="form-control" id="alamat" placeholder="1234 Main St" required></input>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="anggota.php" class="btn btn-danger">Kembali</a>
                    </div>
                </form><!-- Vertical Form -->
            <?php } ?>
        </div>
    </div>


    <div class="footer">
        <?php include 'footer_admin.php'; ?>
    </div>
</body>

</html>