<?php
include('nav/header.php')
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Visi dan Misi<br></h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li class="current">Visi Misi<br></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- About Us Section -->
    <section id="about-us" class="section about-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Visi Sekolah</h3>
                    <p class="fst-italic">
                        <?= $data[0]['visi'] ?>
                    </p>
                </div>

                <div class="col-lg-12 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Misi Sekolah</h3>
                    <p class="fst-italic">
                        <?= $data[0]['misi'] ?>
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /About Us Section -->

</main>

<?php
include('nav/footer.php')
?>

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