<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'header_admin.php';
    ?>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">PERPUSTAKAAN</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-heart"></i>
                    </a><!-- End Notification Icon -->





                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->


                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="anggota.php">
                    <i class="bi bi-people"></i>
                    <span>Anggota</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="buku.php">
                    <i class="bi bi-book"></i>
                    <span>Data Buku</span>
                </a>
            </li>End Contact Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="petugas.php">
                    <i class="bi bi-card-list"></i>
                    <span>Tambah Data Petugas</span>
                </a>
            </li>End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pinjam.php">
                    <i class="bi bi-card-list"></i>
                    <span>Peminjaman</span>
                </a>
            </li><!-- End Register Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="laporan.php">
                    <i class="bi bi-card-list"></i>
                    <span>Laporan</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php" onclick="alert('Logout Sekarang?');">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->


        </ul>

    </aside><!-- End Sidebar-->






</body>

</html>