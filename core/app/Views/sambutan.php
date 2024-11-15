<?php
include('nav/header.php')
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Kata Sambutan Kepala Sekolah<br></h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li class="current">Kata Sambutan<br></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- About Us Section -->
    <section id="about-us" class="section about-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="uploads/sambutan/<?= $data[0]['gambar'] ?>" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Sambutan Kepala Sekolah</h3>
                    <p class="fst-italic">
                        <?= $data[0]['sambutan'] ?>
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /About Us Section -->

</main>

<?php
include('nav/footer.php')
?>