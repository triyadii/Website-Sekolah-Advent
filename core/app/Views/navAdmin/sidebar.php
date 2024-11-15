<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() ?>Dashboard_">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#master_nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-database"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="master_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url() ?>User_">
                        <i class="bi bi-circle"></i><span>User</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>MasterProfil_">
                        <i class="bi bi-circle"></i><span>Profil</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#profil-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-bounding-box"></i><span>Profil</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="profil-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url() ?>Sambutan_">
                        <i class="bi bi-circle"></i><span>Sambutan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Sejarah_">
                        <i class="bi bi-circle"></i><span>Sejarah</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>VisiMisi_">
                        <i class="bi bi-circle"></i><span>Visi Misi</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#struktur-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Struktur Organisasi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="struktur-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url() ?>Sekolah_">
                        <i class="bi bi-circle"></i><span>Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>KomiteSekolah_">
                        <i class="bi bi-circle"></i><span>Komite Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Osis_">
                        <i class="bi bi-circle"></i><span>Osis</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>TenagaPendidik_">
                        <i class="bi bi-circle"></i><span>Tenaga Pendidik</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>TenagaNonPendidik_">
                        <i class="bi bi-circle"></i><span>Tenaga Non Pendidik</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#berita-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-newspaper"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="berita-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url() ?>BeritaTerbaru_">
                        <i class="bi bi-circle"></i><span>Berita Terbaru</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>InfoSekolah_">
                        <i class="bi bi-circle"></i><span>Info Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Agenda_">
                        <i class="bi bi-circle"></i><span>Agenda</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() ?>Galeri_">
                <i class="bi  bi-card-image"></i>
                <span>Galeri</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() ?>Prestasi_">
                <i class="bi bi-award-fill"></i>
                <span>Prestasi</span>
            </a>
        </li>


    </ul>

</aside><!-- End Sidebar-->