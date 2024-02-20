<?php

include '../koneksi.php';
if (!isset($_SESSION['petugas'])) {
    header('location:login.php');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Admin</title>

        <?php include 'header_admin.php'; ?>
    </head>

    <body>


        <div class="header">
            <?php include 'navbar_admin.php'; ?>
        </div>
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-8">
                        <div class="row">

                            <!-- Sales Card -->
                            <div class="col-xxl-3 col-md-5">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Anggota</h5>
                                        <a href="anggota.php">

                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <h6>145</h6>
                                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                            <div class="col-xxl-3 col-md-5">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Buku</h5>
                                        <a href="anggota.php">

                                            <div class="d-flex align-items-center">
                                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <h6>145</h6>
                                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                        </div>
                    </div>
                </div>
            </section>
        </main>


        <div class="footer">
            <?php include 'footer_admin.php'; ?>
        </div>

    <?php } ?>

    </body>

    </html>