<?php
include('nav/header.php')
?>
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="uploads/profil/<?= $data[0]['gambar'] ?>" alt="" data-aos="fade-in">

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100"><?= $data[0]['pengantar'] ?></h2>
            </p>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="uploads/profil/<?= $data[0]['gambar'] ?>" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Tentang Sekolah <?= $namaSekolah ?> </h3>
                    <p class="fst-italic">
                        <?= $data[0]['tentang'] ?>
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Berita</h2>
            <p>Berita Ter Update Saat INi</p>
        </div><!-- End Section Title -->

        <div class="container">

            <?php
            if ($jumlahBerita >= 3) { ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="uploads/berita/<?= $dataBerita[0]['gambar'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">

                                <h3><a href="course-details.html"><?= $dataBerita[0]['judulBerita'] ?></a></h3>
                                <p class="description"><?= $dataBerita[0]['judulBerita'] ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <a href="" class="trainer-link"><?= $dataBerita[0]['author'] ?></a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <p><?= $dataBerita[0]['waktu'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="course-item">
                            <img src="uploads/berita/<?= $dataBerita[1]['gambar'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">

                                <h3><a href="course-details.html"><?= $dataBerita[1]['judulBerita'] ?></a></h3>
                                <p class="description"><?= $dataBerita[1]['judulBerita'] ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <a href="" class="trainer-link"><?= $dataBerita[1]['author'] ?></a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <p><?= $dataBerita[1]['waktu'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="course-item">
                            <img src="uploads/berita/<?= $dataBerita[2]['gambar'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">

                                <h3><a href="course-details.html"><?= $dataBerita[2]['judulBerita'] ?></a></h3>
                                <p class="description"><?= $dataBerita[2]['judulBerita'] ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <a href="" class="trainer-link"><?= $dataBerita[2]['author'] ?></a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <p><?= $dataBerita[2]['waktu'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                </div>
            <?php
            } else if ($jumlahBerita >= 2) { ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="uploads/berita/<?= $dataBerita[0]['gambar'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">

                                <h3><a href="course-details.html"><?= $dataBerita[0]['judulBerita'] ?></a></h3>
                                <p class="description"><?= $dataBerita[0]['judulBerita'] ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <a href="" class="trainer-link"><?= $dataBerita[0]['author'] ?></a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <p><?= $dataBerita[0]['waktu'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="course-item">
                            <img src="uploads/berita/<?= $dataBerita[1]['gambar'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">

                                <h3><a href="course-details.html"><?= $dataBerita[1]['judulBerita'] ?></a></h3>
                                <p class="description"><?= $dataBerita[1]['judulBerita'] ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <a href="" class="trainer-link"><?= $dataBerita[1]['author'] ?></a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <p><?= $dataBerita[1]['waktu'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                </div>
            <?php
            } else if ($jumlahBerita >= 1) { ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="uploads/berita/<?= $dataBerita[0]['gambar'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">

                                <h3><a href="course-details.html"><?= $dataBerita[0]['judulBerita'] ?></a></h3>
                                <p class="description"><?= $dataBerita[0]['judulBerita'] ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <a href="" class="trainer-link"><?= $dataBerita[0]['author'] ?></a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <p><?= $dataBerita[0]['waktu'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                </div>
            <?php
            }
            ?>
        </div>

        </div>

    </section><!-- /Courses Section -->

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

        <div class="container">
            <div class="row">
                <?php
                foreach ($dataOrganisasiSekolah as $dos) { ?>
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="uploads/strukturOrganisasi/<?= $dos['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-content">
                                <h4><?= $dos['nama'] ?></h4>
                                <span><?= $dos['jabatan'] ?></span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                <?php
                }
                ?>
            </div>

        </div>

    </section><!-- /Trainers Index Section -->

</main>
<?php
include('nav/footer.php');
?>