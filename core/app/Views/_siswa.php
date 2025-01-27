<?php
include('navAdmin/header.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Siswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard_">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
        </nav>
        <a data-bs-toggle="modal" data-bs-target="#modalTambahUser"><button type="button" class="btn btn-primary"><i
                    class="bi bi-plus-circle"></i> Tambah
                Siswa</button></a>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Data Siswa</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Kelas</th>
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
                                        <td><?= $d['namaSiswa'] ?></td>
                                        <td><?= $d['kelas'] ?></td>
                                        <td>
                                            <img src="<?= base_url() ?>uploads/siswa/<?= $d['foto'] ?>"
                                                style="width:70%; height:150px;">
                                        </td>
                                        <td>
                                            <a data-bs-toggle="modal" data-bs-target="#modalEdit<?= $d['idSiswa'] ?>"><i
                                                    class="bi bi-pencil"></i></a>&nbsp;
                                            <a data-bs-toggle="modal"
                                                data-bs-target="#modalGantiGambar<?= $d['idSiswa'] ?>"><i
                                                    class="bi bi-images"></i></a>&nbsp;
                                            <a data-bs-toggle="modal"
                                                data-bs-target="#modalValidasiHapus<?= $d['idSiswa'] ?>"><i
                                                    class="bi bi-trash-fill"></i></a>&nbsp;
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modalEdit<?= $d['idSiswa'] ?>" tabindex="-1">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="EditSiswa/<?= $d['idSiswa'] ?>"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="form-label">Nama Siswa</label>
                                                                <div class="input-group has-validation">
                                                                    <input type="text" name="namaSiswa" class="form-control"
                                                                        value="<?= $d['namaSiswa'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Kelas</label>
                                                                <div class="input-group has-validation">
                                                                    <input type="text" name="kelas" class="form-control"
                                                                        value="<?= $d['kelas'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">
                                                            Edit Data Siswa</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Ganti Gambar -->
                                    <div class="modal fade" id="modalGantiGambar<?= $d['idSiswa'] ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ganti Foto</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="GantiGambarSiswa/<?= $d['idSiswa'] ?>"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="col-12">
                                                            <label class="form-label">Gambar</label>
                                                            <div class="input-group">
                                                                <input type="file" name="foto" id="upload"
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
                                    <div class="modal fade" id="modalValidasiHapus<?= $d['idSiswa'] ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Validasi Penghapusan Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-12">
                                                        <p>Apakah anda akan menghapus Siswa ini ? </p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?= base_url() ?>HapusSiswa/<?= $d['idSiswa'] ?>"><button
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="TambahSiswa" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Nama Siswa</label>
                            <div class="input-group has-validation">
                                <input type="text" name="namaSiswa" class="form-control" placeholder="Masukkan Nama"
                                    required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Kelas</label>
                            <div class="input-group has-validation">
                                <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas"
                                    required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Foto</label>
                            <div class="input-group">
                                <input type="file" name="foto" id="upload" onchange="readURL(this);" required>
                            </div>
                            <img id="image" style=" width:100%; height:300px; margin:0 auto; margin-top: 3%;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Tambah Siswa</button>
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
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font
    } from 'ckeditor5';
    ClassicEditor
        .create(document.querySelector('#editorSiswa'), {
            plugins: [Essentials, Paragraph, Bold, Italic, Font],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editorVisi'), {
            plugins: [Essentials, Paragraph, Bold, Italic, Font],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editorSiswaEdit'), {
            plugins: [Essentials, Paragraph, Bold, Italic, Font],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>