<?php
include '../koneksi.php';
$id = $_GET['id'];




if (isset($_POST["submit"])) {
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $file = $_FILES["image"]["name"];
    $filesize = $_FILES["image"]["size"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $validextens = ['jpg', 'jpeg', 'png'];
    $imgextens = explode('.', $file);
    $imgextens = strtolower(end($imgextens));
    $newimg = uniqid();
    $newimg = '.' . $imgextens;

    move_uploaded_file($tmp_name, 'img/' . $newimg);


    $query = "UPDATE buku SET id_kategori = '$kategori', gambar = '$newimg', deskripsi = '$deskripsi' ,judul = '$judul', penulis = '$penulis', penerbit = '$penerbit' WHERE id_buku = '$id'";
    mysqli_query($koneksi, $query);

    echo "<script>alert('Data Berhasil Diupdate'); document.location = 'buku.php';</script>";
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
            <?php
            $sql = mysqli_query($koneksi, "SELECT id_buku, nama_kategori,gambar,deskripsi,judul,penulis,penerbit FROM buku INNER JOIN kategori_buku ON buku.id_kategori=kategori_buku.id_kategori WHERE id_buku ='$id'");
            while ($data = mysqli_fetch_array($sql)) {
                # code...

            ?>
                <form action="" method="post" class="row g-3">
                    <div class="col-12">
                        <label for="input4" class="form-label">Judul Buku</label>
                        <input type="text" name="judul_buku" value="<?= $data['judul'] ?>" class="form-control" id="Judul Buku">
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="kategori" id="floatingSelect" aria-label="State">
                            <?php
                            $result = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id_ktgr = $row['id_kategori'];
                                $nama_ktgr = $row['nama_kategori'];

                            ?>
                                <option selected value="<?= $id_ktgr; ?>"><?= $nama_ktgr; ?></option>
                                <option hidden selected value="<?= $data['nama_kategori']; ?>"><?= $data['nama_kategori']; ?></option>
                                <!-- <option value="romance">Romance</option>
                            <option value="aksi">Aksi</option> -->
                            <?php
                            }
                            ?>
                        </select>
                        <label for="floatingSelect">Kategori</label>
                    </div>
                    <div class="col-12">
                        <label for="input4" class="form-label">Gambar</label>
                        <input type="file" name="gambar" value="img/<?= $data['gambar'] ?>" class="form-control" id="gambar">
                    </div>
                    <div class="col-12">
                        <label for="input4" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" value="<?= $data['deskripsi'] ?>" class="form-control" id="deskripsi">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">penulis</label>
                        <input type="text" name="penulis" value="<?= $data['penulis'] ?>" class="form-control" id="penulis">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">penerbit</label>
                        <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" class="form-control" id="penerbit">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="buku.php" class="btn btn-danger">Kembali</a>
                    <?php } ?>
                    </div>
                </form><!-- Vertical Form -->


        </div>
    </div>


    <div class="footer">
        <?php include 'footer_admin.php'; ?>
    </div>
</body>

</html>