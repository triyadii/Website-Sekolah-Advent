<?php
$session        = session();
$namaSekolah    = $session->get('namaSekolah');
$alamatSekolah  = $session->get('alamatSekolah');
$nomorTelepon   = $session->get('nomorTelepon');
$instagram      = $session->get('instagram');
$youtube        = $session->get('youtube');
$facebook       = $session->get('facebook');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $namaSekolah ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="../assets/User/img/icon.png" rel="icon">
    <link href="../assets/User/img/icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/User/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/User/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/User/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/User/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/User/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="../assets/User/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="../assets/User/img/icon.png" alt="">
                <h1 class="sitename"><?= $namaSekolah ?></h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= base_url() ?>">Beranda<br></a></li>
                    <li class="dropdown"><a href="#"><span>Profil Sekolah</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="<?= base_url() ?>Sambutan">Sambutan Kepala Sekolah</a></li>
                            <li><a href="<?= base_url() ?>Sejarah">Sejarah</a></li>
                            <li><a href="<?= base_url() ?>VisiMisi">Visi Misi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Struktur Organisasi</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="<?= base_url() ?>StrukturOrganisasiSekolah">Sekolah</a></li>
                            <li><a href="<?= base_url() ?>StrukturOrganisasiKomiteSekolah">Komite Sekolah</a></li>
                            <li><a href="<?= base_url() ?>StrukturOrganisasiOsis">Osis</a></li>
                            <li><a href="<?= base_url() ?>StrukturOrganisasiTenagaPendidik">Tenaga Pendidik</a></li>
                            <li><a href="<?= base_url() ?>StrukturOrganisasiTenagaNonPendidik">Tenaga Non Pendidik</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Berita</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="<?= base_url() ?>BeritaTerbaru">Berita Terbaru</a></li>
                            <li><a href="<?= base_url() ?>Agenda">Agenda</a></li>
                            <li><a href="<?= base_url() ?>InfoSekolah">Info Sekolah</a></li>
                            <li><a href="<?= base_url() ?>Galeri">Galeri</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>Prestasi">Prestasi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>