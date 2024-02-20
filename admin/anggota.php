<!DOCTYPE html>
<?php
include '../koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM user");

?>
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
        <h5 class="card-title">DAFTAR ANGGOTA PERPUSTAKAAN</h5>
      </center>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>

            <th scope="col">Email</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <!-- s -->
              <form action="" method="post">
                <td><?= $row['email']; ?></td>
                <td><?= $row['nama_lengkap']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><a href="ubah_anggota.php?id=<?= $row['id_user']; ?>" class="btn btn-warning" name="ubah">Edit</a>
                  <a href="hapus.php?id=<?= $row['id_user']; ?>" onclick="alert('Hapus Data?');" class="btn btn-danger" name="hapus">Hapus</a>
                </td>



            </tr>
          <?php }


          ?>
          </form>
        </tbody>
      </table>

      <!-- End Table with stripped rows -->

    </div>
    <div class="button" style="margin-left: 4rem; margin-bottom: 2rem;">

      <a type="button" class="btn btn-secondary" href="tambah_anggota.php">Tambah Anggota</a>
    </div>
  </div>

  <div class="footer">
    <?php include 'footer_admin.php'; ?>
  </div>
</body>

</html>