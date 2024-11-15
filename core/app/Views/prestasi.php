<?php
include('nav/header.php');
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Prestasi</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Prestasi</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

        <div class="container">

            <div class="row gy-5">
                <?php
                foreach ($data as $d) { ?>
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="course-item">
                            <img src="uploads/prestasi/<?= $d['gambar'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">

                                <h3><a
                                        href="<?= base_url() ?>PrestasiDetail/<?= $d['idPrestasi'] ?>"><?= $d['judulPrestasi'] ?></a>
                                </h3>
                                <p class="description"><?= $d['keterangan'] ?></p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <a href="" class="trainer-link"><?= $d['author'] ?></a>
                                    </div>
                                    <div class="trainer-rank d-flex align-items-center">
                                        <p><?= $d['waktu'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                <?php
                }
                ?>
            </div>

        </div>

    </section><!-- /Courses Section -->

</main>
<?php
include('nav/footer.php')
?>