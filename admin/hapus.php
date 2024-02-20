<?php
include '../koneksi.php';
function hapus($id)
{
    global $koneksi;
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM user WHERE id_user ='$id'");
    return mysqli_affected_rows($koneksi);
}

if (hapus($id) > 0) {
    echo '<script>alert("data berhasil dihapus!);</script>';
    header('location:anggota.php');
}
// hapus buku
function hapusbuku($id_buku)
{
    global $koneksi;
    $id_buku = $_GET['id_buku'];
    mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id_buku'");
    return mysqli_affected_rows($koneksi);
}
if (hapusbuku($id_buku) > 0) {
    echo '<script>alert("data berhasil dihapus!);</script>';
    header('location:buku.php');
    # code...
}
function hapuspetugas($id_petugas)
{
    global $koneksi;
    $id_petugas = $_GET['id_$id_petugas'];
    mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas = '$id_petugas'");
    return mysqli_affected_rows($koneksi);
}
if (hapuspetugas($id_petugas) > 0) {
    echo '<script>alert("data berhasil dihapus!);</script>';
    header('location:petugas.php');
    # code...
}
