<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Struktur Organisasi Tenaga Non Pendidik</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Struktur Organisasi Tenaga Non Pendidik</li>
      </ol>
      <a data-bs-toggle="modal" data-bs-target="#modalTambahUser"><button type="button" class="btn btn-primary"><i
            class="bi bi-plus-circle"></i> Tambah
          Struktur Organisasi Non Pendidik</button></a>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Table Data Struktur Organisasi Tenaga Non Pendidik</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Foto</th>
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
                    <td><?= $d['nama'] ?></td>
                    <td><?= $d['jabatan'] ?></td>
                    <td>
                      <img src="<?= base_url() ?>uploads/strukturOrganisasi/<?= $d['foto'] ?>"
                        style="width:70%; height:150px;">
                    </td>
                    <td>
                      <a data-bs-toggle="modal"
                        data-bs-target="#modalEdit<?= $d['idTenagaNonPendidik'] ?>"><i
                          class="bi bi-pencil"></i></a>&nbsp;
                      <a data-bs-toggle="modal"
                        data-bs-target="#modalGantiFoto<?= $d['idTenagaNonPendidik'] ?>"><i
                          class="bi bi-images"></i></a>&nbsp;
                      <a data-bs-toggle="modal"
                        data-bs-target="#modalValidasiHapus<?= $d['idTenagaNonPendidik'] ?>"><i
                          class="bi bi-trash-fill"></i></a>&nbsp;
                    </td>
                  </tr>
                  <!-- Modal Edit Data -->
                  <div class="modal fade" id="modalEdit<?= $d['idTenagaNonPendidik'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <form method="POST"
                          action="EditOrganisasiNonpendidik/<?= $d['idTenagaNonPendidik'] ?>"
                          enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="col-12">
                              <label class="form-label">Nama</label>
                              <div class="input-group has-validation">
                                <input type="text" name="nama" class="form-control"
                                  value="<?= $d['nama'] ?>" required>
                              </div>
                            </div>
                            <div class="col-12">
                              <label class="form-label">Jabatan</label>
                              <div class="input-group has-validation">
                                <input type="text" name="jabatan" class="form-control"
                                  value="<?= $d['jabatan'] ?>" required>
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
                  <div class="modal fade" id="modalGantiFoto<?= $d['idTenagaNonPendidik'] ?>"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Ganti Foto</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <form method="POST"
                          action="GantiFotoOrganisasiNonpendidik/<?= $d['idTenagaNonPendidik'] ?>"
                          enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="col-12">
                              <label class="form-label">Foto</label>
                              <div class="input-group     ">
                                <input type="file" name="foto" id="upload"
                                  onchange="readURL(this);" required>
                              </div>
                            </div>
                            <img id="image"
                              style=" width:100%; height:300px; margin:0 auto; margin-top: 3%;">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                              Ganti Foto</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Validasi Hapus Data -->
                  <div class="modal fade" id="modalValidasiHapus<?= $d['idTenagaNonPendidik'] ?>"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Validasi Penghapusan Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col-12">
                            <p>Apakah anda akan menghapus struktur Organisasi Pendidk ini ? </p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a
                            href="<?= base_url() ?>HapusOrganisasiNonpendidik/<?= $d['idTenagaNonPendidik'] ?>"><button
                              class="btn btn-primary"
                              style="width:100%; border-color:red; background-color : red;">
                              Hapus Struktur Organisasi Pendidik</button></a>
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
      <form method="POST" action="TambahOrganisasiNonpendidik" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="col-12">
            <label class="form-label">Nama</label>
            <div class="input-group has-validation">
              <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label">Jabatan</label>
            <div class="input-group has-validation">
              <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Username"
                required>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label">Foto</label>
            <div class="input-group     ">
              <input type="file" name="foto" id="upload" onchange="readURL(this);" required>
            </div>
          </div>
          <img id="image" style=" width:100%; height:300px; margin:0 auto; margin-top: 3%;">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            Tambah Struktur Organisasi Pendidik</button>
        </div>
      </form>
    </div>
  </div>
</div>

</main><!-- End #main -->
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