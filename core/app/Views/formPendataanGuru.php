<?php
$session = session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Formulir | Pendataan Guru</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/User/img/logo.png" rel="icon">
    <link href="assets/User/img/logo.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/Admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/Admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/Admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/Admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/Admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/Admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/Admin/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/Admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <link rel="stylesheet" href="assets/Admin/signature/styles.css">
</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <img src="assets/User/img/logo.png" style="height:150px;"><br>
                            </div><!-- End Logo -->
                            <h4 align="center">
                                Formulir Pendataan Guru
                            </h4>
                            <h4 align="center"><b>Sekolah SD / SMP Advent Lubuk Pakam</b><br> </h4>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="">
                                        <h5 class="card-title text-center pb-0 fs-4"></h5>
                                    </div>
                                    <form class="row g-3 needs-validation" method="POST"
                                        action="<?= base_url() ?>TambahOrganisasiPendidik"
                                        enctype="multipart/form-data">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Nomor Induk Kependudukan
                                                Peserta</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="nik" class="form-control" id="yourUsername"
                                                    placeholder="Masukkan Nomor Induk Kependudukan" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Nama</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="nama" class="form-control" id="yourUsername"
                                                    placeholder="Masukkan Nama Anda" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Jabatan / Pengajar</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="jabatan" class="form-control" id="yourUsername"
                                                    placeholder="Masukkan Jabatan / Pengajar" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Tanggal Bergabung</label>
                                            <div class="input-group has-validation">
                                                <input type="date" name="waktuBergabung" class="form-control"
                                                    id="yourUsername" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Dokumen</label>
                                            <span style="color: red; font-size:10px;">* Dokumen yang diperlukan
                                                KTP,Ijazah. Seluruh Dokumen dijadikan menjadi satu file</span>
                                            <div class="input-group">
                                                <input type="file" name="dokumen" id="upload" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Foto Profil</label>
                                            <div class="input-group">
                                                <input type="file" name="foto" id="upload" onchange="readURL(this);"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <img id="image"
                                                style=" width:100%; height:300px; margin:0 auto; margin-top: 3%;">
                                            <br>
                                        </div>
                                        <div class="col-12">
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="text-align: center;">
                                                <button class="btn btn-primary w-50" type="submit">Proses
                                                    Pendataan</button><br>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </main><!-- End #main -->
    <!-- Scr -->
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

    <!-- Vendor JS Files -->
    <script src="assets/Admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/Admin/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/Admin/vendor/echarts/echarts.min.js"></script>
    <script src="assets/Admin/vendor/quill/quill.min.js"></script>
    <script src="assets/Admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/Admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/Admin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/Admin/js/main.js"></script>
    <!-- Sweet Alert -->
    <script script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php
    $dataSession = $session->get('status');
    $dataKeterangan = $session->get('keterangan');
    if ($dataSession == "Berhasil") {
    ?>
        <script>
            swal("Selamat ! ", "<?= $dataKeterangan; ?>", "success");
        </script>
    <?php
        $arraySession = ['status', 'keterangan'];
        $session->remove($arraySession);
    } else if ($dataSession == "Gagal") {
    ?>
        <script>
            swal("Gagal ! ", "<?= $dataKeterangan; ?>", "error");
        </script>
    <?php
        $arraySession = ['status', 'keterangan'];
        $session->remove($arraySession);
    }
    ?>
</body>

</html>