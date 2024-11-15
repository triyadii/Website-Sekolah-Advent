<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Berita</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Berita</li>
      </ol>
    </nav>
    <a data-bs-toggle="modal" data-bs-target="#modalTambahUser"><button type="button" class="btn btn-primary"><i
          class="bi bi-plus-circle"></i> Tambah
        Berita</button></a>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Table Data Berita</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Judul Berita</th>
                  <th scope="col">Berita</th>
                  <th scope="col">Author</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">Gambar</th>
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
                    <td><?= $d['judulBerita'] ?></td>
                    <td><?= $d['berita'] ?></td>
                    <td><?= $d['author'] ?></td>
                    <td><?= $d['waktu'] ?></td>
                    <td>
                      <img src="<?= base_url() ?>uploads/berita/<?= $d['gambar'] ?>"
                        style="width:70%; height:150px;">
                    </td>
                    <td>
                      <a data-bs-toggle="modal" data-bs-target="#modalEdit<?= $d['idBerita'] ?>"><i
                          class="bi bi-pencil"></i></a>&nbsp;
                      <a data-bs-toggle="modal"
                        data-bs-target="#modalGantiGambar<?= $d['idBerita'] ?>"><i
                          class="bi bi-images"></i></a>&nbsp;
                      <a data-bs-toggle="modal"
                        data-bs-target="#modalValidasiHapus<?= $d['idBerita'] ?>"><i
                          class="bi bi-trash-fill"></i></a>&nbsp;
                    </td>
                  </tr>
                  <!-- Modal Edit Data -->
                  <div class="modal fade" id="modalEdit<?= $d['idBerita'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <form method="POST" action="EditBerita/<?= $d['idBerita'] ?>"
                          enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="col-12">
                              <label class="form-label">Judul Berita</label>
                              <div class="input-group has-validation">
                                <input type="text" name="judulBerita" class="form-control"
                                  value="<?= $d['judulBerita'] ?>" required>
                              </div>
                            </div>
                            <div class="col-12">
                              <label class="form-label">Berita</label>
                              <div class="input-group has-validation">
                                <input type="text" name="berita" class="form-control"
                                  value="<?= $d['berita'] ?>" required>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                              Edit Data</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Ganti Gambar -->
                  <div class="modal fade" id="modalGantiGambar<?= $d['idBerita'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Ganti gambar</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <form method="POST" action="GantiGambarBerita/<?= $d['idBerita'] ?>"
                          enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="col-12">
                              <label class="form-label">Gambar</label>
                              <div class="input-group     ">
                                <input type="file" name="gambar" id="upload"
                                  onchange="readURL(this);" required>
                              </div>
                            </div>
                            <img id="image"
                              style=" width:100%; height:300px; margin:0 auto; margin-top: 3%;">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                              Ganti gambar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Validasi Hapus Data -->
                  <div class="modal fade" id="modalValidasiHapus<?= $d['idBerita'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Validasi Penghapusan Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col-12">
                            <p>Apakah anda akan menghapus berita ini ? </p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="<?= base_url() ?>HapusBerita/<?= $d['idBerita'] ?>"><button
                              class="btn btn-primary"
                              style="width:100%; border-color:red; background-color : red;">
                              Hapus User</button></a>
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

          </div>
        </div>

      </div>
    </div>
  </section>
</main><!-- End #main -->

<!-- Modal Tambah User -->
<div class="modal fade" id="modalTambahUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="TambahBerita" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="col-12">
            <label class="form-label">Judul Berita</label>
            <div class="input-group has-validation">
              <input type="text" name="judulBerita" class="form-control" placeholder="Masukkan Nama"
                required>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label">Berita</label>
            <div class="input-group has-validation">
              <input type="text" name="berita" class="form-control" placeholder="Masukkan Username"
                required>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label">Gambar</label>
            <div class="input-group">
              <input type="file" name="gambar" id="upload" onchange="readURL(this);" required>
            </div>
          </div>
          <img id="image" style=" width:100%; height:300px; margin:0 auto; margin-top: 3%;">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            Tambah User</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
include('navAdmin/footer.php');
?>

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#image').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>