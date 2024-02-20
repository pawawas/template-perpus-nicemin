<?php
include '../koneksi.php';
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    mysqli_query($koneksi, "UPDATE petugas SET username='$username',password = '$password', nama='$nama' WHERE id_petugas ='$id'");

    echo '<script>alert("Data Berhasil Diubah"); document.location.href ="petugas.php";</script>';
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

            <h5 class="card-title">Ubah Data Petugas</h5>
            <?php
            $result = mysqli_query($koneksi, "SELECT*FROM petugas where id_petugas='$id'");
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
                        <label for="inputPassword4" class="form-label">Nama</label>
                        <input type="text" name="nama" value="<?= $row['nama']; ?>" class="form-control"></input>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="petugas.php" class="btn btn-danger">Kembali</a>
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