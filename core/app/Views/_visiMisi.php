<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Visi dan Misi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Visi dan Misi</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Table Data Visi dan Misi</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Visi</th>
                  <th scope="col">Misi</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($data as $d) {
                  $no++;
                ?>
                  <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $d['visi'] ?></td>
                    <td><?= $d['misi'] ?></td>
                    <td> <a data-bs-toggle="modal" data-bs-target="#modalEdit<?= $d['idVisiMisi'] ?>"><i
                          class="bi bi-pencil"></i></a>&nbsp;</td>
                  </tr>
                  <!-- Modal Edit Data -->
                  <div class="modal fade" id="modalEdit<?= $d['idVisiMisi'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit Visi Misi</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <form method="POST" action="EditVisiMisi/<?= $d['idVisiMisi'] ?>"
                          enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="col-12">
                              <div class="main-container">
                                <label class="form-label">Visi</label>
                                <textarea id="editorVisi"
                                  name="visi"><?= $d['visi'] ?></textarea>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="main-container">
                                <label class="form-label">Misi</label>
                                <textarea id="editorMisi"
                                  name="misi"><?= $d['misi'] ?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                              Edit Visi Misi</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
<?php
include('navAdmin/footer.php');
?>