<?php
include '../koneksi.php';
if (isset($_POST["submit"])) {
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $query = "INSERT INTO buku VALUES('','$kategori','$judul','$penulis','$penerbit')";
    mysqli_query($koneksi, $query);

    echo "<script>alert('Data Berhasil Ditambahkan'); document.location = 'buku.php';</script>";
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

            <h5 class="card-title">Tambah Data Anggota</h5>


            <!-- Vertical Form -->
            <form action="" method="post" class="row g-3">
                <div class="form-floating mb-3">
                    <select class="form-select" name="kategori" id="floatingSelect" aria-label="State">
                        <?php
                        $result = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id_ktgr = $row['id_kategori'];
                            $nama_ktgr = $row['nama_kategori'];

                        ?>
                            <option selected value="<?= $id_ktgr; ?>"><?= $_ktgr; ?></option>
                            <!-- <option value="romance">Romance</option>
                            <option value="aksi">Aksi</option> -->
                        <?php
                        }
                        ?>
                    </select>
                    <label for="floatingSelect">Kategori</label>
                </div>

                <div class="col-12">
                    <label for="input4" class="form-label">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="Judul Buku">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">penulis</label>
                    <input type="text" name="penulis" class="form-control" id="penulis">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="buku.php" class="btn btn-danger">Kembali</a>
                </div>
            </form><!-- Vertical Form -->


        </div>
    </div>


    <div class="footer">
        <?php include 'footer_admin.php'; ?>
    </div>
</body>

</html>