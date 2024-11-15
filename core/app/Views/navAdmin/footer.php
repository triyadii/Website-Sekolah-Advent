<!-- ======= CK Editor ======= -->
<script type="importmap">
    {
				"imports": {
					"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.js",
					"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.3.1/"
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
        .create(document.querySelector('#editor'), {
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
        .create(document.querySelector('#editorMisi'), {
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

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>School</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
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