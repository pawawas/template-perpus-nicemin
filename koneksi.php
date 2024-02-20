<?php
session_start();

$koneksi = mysqli_connect('localhost', 'root', '', 'perpustakaan');

// function query($query)
// {
//     global $koneksi;
//     $result = mysqli_query($koneksi, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row;
//     }
//     return $koneksi;
// }
