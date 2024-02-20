<?php
// session_start();
include '../koneksi.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header_admin.php'; ?>

</head>

<body>
    <div class="header">
        <?php include 'navbar_admin.php'; ?>
    </div>
    <!-- table -->
    <div class="card">
        <div class="card-body">
            <center>
                <h5 class="card-title">DAFTAR PETUGAS PERPUSTAKAAN</h5>
            </center>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM petugas");
            while ($row = mysqli_fetch_assoc($query)) {
                # code...


            ?>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">ID Petugas</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $row['id_petugas']; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td><?= $row['password']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><a href="ubah_petugas.php?id=<?= $row['id_petugas']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id_petugas=<?= $row['id_petugas']; ?>" onclick="alert('Hapus Data?')" name="hapuspetugas" class="btn btn-danger">Hapus</a>
                            </td>
                        <?php
                    }
                        ?>

                        </tr>
                    </tbody>
                </table>

                <!-- End Table with stripped rows -->

        </div>
        <div class="button" style="margin-left: 4rem; margin-bottom: 2rem;">

            <a type="button" class="btn btn-secondary" href="tambah_petugas.php">+ Tambah Petugas</a>
        </div>
    </div>

    <div class="footer">
        <?php include 'footer_admin.php'; ?>
    </div>
</body>

</html>