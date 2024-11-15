<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Profil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Profil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Data Profil</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Sekolah</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Alamat</th>
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
                                    <td><?= $d['nama'] ?></td>
                                    <td><?= $d['nomorTelepon'] ?></td>
                                    <td><?= $d['alamat'] ?></td>
                                    <td>
                                        <img src="<?= base_url() ?>uploads/profil/<?= $d['gambar'] ?>"
                                            style="width:70%; height:150px;">
                                    </td>
                                    <td> <a data-bs-toggle="modal" data-bs-target="#modalEdit<?= $d['idProfil'] ?>"><i
                                                class="bi bi-pencil"></i></a>&nbsp;
                                        <a data-bs-toggle="modal" data-bs-target="#modalDetail<?= $d['idProfil'] ?>"><i
                                                class="bi bi-eye"></i></a>&nbsp;
                                        <a data-bs-toggle="modal"
                                            data-bs-target="#modalGantiGambar<?= $d['idProfil'] ?>"><i
                                                class="bi bi-images"></i></a>&nbsp;
                                    </td>
                                </tr>
                                <!-- Modal Edit Data -->
                                <div class="modal fade" id="modalEdit<?= $d['idProfil'] ?>" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Profil</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="EditProfil/<?= $d['idProfil'] ?>"
                                                enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label class="form-label">Nama Sekolah</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" name="nama" class="form-control"
                                                                    value="<?= $d['nama'] ?>">
                                                            </div>
                                                            <label class="form-label">Nomor Telepon</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" name="nomorTelepon"
                                                                    class="form-control"
                                                                    value="<?= $d['nomorTelepon'] ?>">
                                                            </div>
                                                            <label class="form-label">Alamat</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" name="alamat" class="form-control"
                                                                    value="<?= $d['alamat'] ?>">
                                                            </div>
                                                            <label class="form-label">Tentang</label>
                                                            <div class="input-group has-validation">
                                                                <textarea name="tentang"
                                                                    class="form-control"><?= $d['tentang'] ?></textarea>
                                                            </div>
                                                            <label class="form-label">Pengantar</label>
                                                            <div class="input-group has-validation">
                                                                <textarea name="pengantar"
                                                                    class="form-control"><?= $d['pengantar'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label">Instagram</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" name="instagram" class="form-control"
                                                                    value="<?= $d['instagram'] ?>">
                                                            </div>
                                                            <label class="form-label">Youtube</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" name="youtube" class="form-control"
                                                                    value="<?= $d['youtube'] ?>">
                                                            </div>
                                                            <label class="form-label">Facebook</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" name="facebook" class="form-control"
                                                                    value="<?= $d['facebook'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">
                                                        Edit Profil</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ganti Gambar -->
                                <div class="modal fade" id="modalGantiGambar<?= $d['idProfil'] ?>" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ganti Gambar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="GantiGambarLandingPage/<?= $d['idProfil'] ?>"
                                                enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="row">
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
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">
                                                        Ganti Gambar Landing Page</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Detail -->
                                <div class="modal fade" id="modalDetail<?= $d['idProfil'] ?>" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Profil</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label class="form-label">Nama Sekolah</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" class="form-control"
                                                                value="<?= $d['nama'] ?>" disabled>
                                                        </div>
                                                        <label class="form-label">Nomor Telepon</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" class="form-control"
                                                                value="<?= $d['nomorTelepon'] ?>" disabled>
                                                        </div>
                                                        <label class="form-label">Alamat</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="alamat" class="form-control"
                                                                value="<?= $d['alamat'] ?>" disabled>
                                                        </div>
                                                        <label class="form-label">Tentang</label>
                                                        <div class="input-group has-validation">
                                                            <textarea class="form-control"
                                                                disabled><?= $d['tentang'] ?></textarea>
                                                        </div>
                                                        <label class="form-label">Pengantar</label>
                                                        <div class="input-group has-validation">
                                                            <textarea class="form-control"
                                                                disabled><?= $d['pengantar'] ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label">Instagram</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" class="form-control"
                                                                value="<?= $d['instagram'] ?>" disabled>
                                                        </div>
                                                        <label class="form-label">Youtube</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" class="form-control"
                                                                value="<?= $d['youtube'] ?>" disabled>
                                                        </div>
                                                        <label class="form-label">Facebook</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" class="form-control"
                                                                value="<?= $d['facebook'] ?>" disabled>
                                                        </div>
                                                        <label class="form-label">Gambar</label>
                                                        <div class="input-group has-validation">
                                                            <img src="<?= base_url() ?>uploads/profil/<?= $d['gambar'] ?>"
                                                                style="width:70%; height:150px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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