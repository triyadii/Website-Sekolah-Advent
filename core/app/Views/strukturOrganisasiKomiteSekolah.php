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
            <h1>Struktur Organisasi Komite Sekolah</h1>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url() ?>">Beranda</a></li>
          <li class="current">Struktur Organisasi Komite Sekolah</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Trainers Section -->
  <section id="trainers" class="section trainers">

    <div class="container">

      <div class="row gy-5">
        <?php
        foreach ($data as $d) { ?>
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="uploads/strukturOrganisasi/<?= $d['foto'] ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4><?= $d['nama'] ?></h4>
              <span><?= $d['jabatan'] ?></span>
            </div>
          </div><!-- End Team Member -->
        <?php
        }
        ?>

      </div>

    </div>

  </section><!-- /Trainers Section -->

</main>
<?php
include('nav/footer.php');
?>