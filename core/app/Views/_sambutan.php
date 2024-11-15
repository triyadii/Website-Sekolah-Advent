<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Sambutan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Sambutan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Data Sambutan</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sambutan</th>
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
                                        <td><?= $d['sambutan'] ?></td>
                                        <td>
                                            <img src="<?= base_url() ?>uploads/sambutan/<?= $d['gambar'] ?>"
                                                style="width:70%; height:150px;">
                                        </td>
                                        <td>
                                            <a data-bs-toggle="modal" data-bs-target="#modalEdit<?= $d['idSambutan'] ?>"><i
                                                    class="bi bi-pencil"></i></a>&nbsp;
                                            <a data-bs-toggle="modal"
                                                data-bs-target="#modalGantiGambar<?= $d['idSambutan'] ?>"><i
                                                    class="bi bi-images"></i></a>&nbsp;
                                        </td>
                                    </tr>
                                    <!-- Modal Edit Data -->
                                    <div class="modal fade" id="modalEdit<?= $d['idSambutan'] ?>" tabindex="-1">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Profil</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="EditSambutan/<?= $d['idSambutan'] ?>"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="col-12">
                                                            <div class="main-container">
                                                                <textarea id="editor" name="sambutan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">
                                                            Edit Sambutan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Ganti Gambar -->
                                    <div class="modal fade" id="modalGantiGambar<?= $d['idSambutan'] ?>" tabindex="-1">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ganti Gambar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="GantiGambarLandingPage/<?= $d['idSambutan'] ?>"
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