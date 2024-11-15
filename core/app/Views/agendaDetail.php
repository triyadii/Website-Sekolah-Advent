<?php
include('nav/headerDetail.php');
?>
<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Agenda <?= $data[0]['judulAgenda'] ?></h1>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?= base_url() ?>">Beranda</a></li>
          <li class="current">Detail Agenda</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Courses Course Details Section -->
  <section id="courses-course-details" class="courses-course-details section">

    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-12">
          <div style="text-align: center;">
            <img src="../uploads/agenda/<?= $data[0]['gambar'] ?>" class="img-fluid" alt="">
          </div>

          <h3><?= $data[0]['judulAgenda'] ?></h3>
          <p>
            <?= $data[0]['agenda'] ?>
          </p>
        </div>
      </div>

    </div>

  </section><!-- /Courses Course Details Section -->
</main>

<?php
include('nav/footerDetail.php')
?>