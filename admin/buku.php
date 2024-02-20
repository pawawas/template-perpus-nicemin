<?php
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
    <div class="card">
        <div class="card-body">
            <center>
                <h3 class="card-title">DATA BUKU</h3>
            </center>

            <table class="table table-bordered border-primary">
                <thead>
                    <tr>

                        <th scope="col">ID buku</th>
                        <th scope="col">Kategori</th>
                        <!-- <th scope="col">Deskripsi</th> -->
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    $result = mysqli_query($koneksi, "SELECT id_buku, nama_kategori,judul,penulis,penerbit,gambar FROM buku INNER JOIN kategori_buku on buku.id_kategori = kategori_buku.id_kategori");
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?= $row['id_buku']; ?> </td>
                            <td><?= $row['nama_kategori']; ?></td>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $row['penulis']; ?></td>
                            <td><?= $row['penerbit']; ?></td>
                            <td><img src="img/<?= $row['gambar']; ?>" width="30"></td>
                            <td><a href="edit_buku.php?id=<?= $row['id_buku']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id_buku=<?= $row['id_buku']; ?>" onclick="alert('Hapus Data Ini?');" name="hapusbuku" class="btn btn-danger">Hapus</a>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="button" style="margin-left: 4rem; margin-bottom: 2rem;">

            <a type="button" class="btn btn-secondary" href="tambah_buku.php">Tambah Buku</a>
        </div>

    </div>


    <div class="footer">
        <?php include 'footer_admin.php'; ?>
    </div>
</body>

</html>