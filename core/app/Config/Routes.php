<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Halaman User
$routes->get('/', 'Page::landingPage');
$routes->get('/Sambutan', 'Page::sambutan');
$routes->get('/Sejarah', 'Page::sejarah');
$routes->get('/VisiMisi', 'Page::visiMisi');
$routes->get('/StrukturOrganisasiSekolah', 'Page::strukturOrganisasiSekolah');
$routes->get('/StrukturOrganisasiKomiteSekolah', 'Page::strukturOrganisasiKomiteSekolah');
$routes->get('/StrukturOrganisasiOsis', 'Page::strukturOrganisasiOsis');
$routes->get('/StrukturOrganisasiTenagaPendidik', 'Page::strukturOrganisasiTenagaPendidik');
$routes->get('/StrukturOrganisasiTenagaNonPendidik', 'Page::strukturOrganisasiTenagaNonPendidik');
$routes->get('/BeritaTerbaru', 'Page::beritaTerbaru');
$routes->get('/BeritaTerbaruDetail/(:num)', 'Page::beritaTerbaruDetail/$1');
$routes->get('/InfoSekolah', 'Page::infoSekolah');
$routes->get('/InfoSekolahDetail/(:num)', 'Page::infoSekolahDetail/$1');
$routes->get('/Agenda', 'Page::agenda');
$routes->get('/AgendaDetail/(:num)', 'Page::agendaDetail/$1');
$routes->get('/Galeri', 'Page::galeri');
$routes->get('/Prestasi', 'Page::prestasi');
$routes->get('/PrestasiDetail/(:num)', 'Page::prestasiDetail/$1');

// Halaman Admin
$routes->get('/Login_', 'Page::login_');
$routes->get('/Dashboard_', 'Page::dashboard_');
$routes->get('/User_', 'Page::user_');
$routes->get('/MasterProfil_', 'Page::masterProfil_');
$routes->get('/Sejarah_', 'Page::sejarah_');
$routes->get('/VisiMisi_', 'Page::visiMisi_');
$routes->get('/Sambutan_', 'Page::sambutan_');
$routes->get('/Sekolah_', 'Page::sekolah_');
$routes->get('/KomiteSekolah_', 'Page::komiteSekolah_');
$routes->get('/Osis_', 'Page::osis_');
$routes->get('/TenagaPendidik_', 'Page::tenagaPendidik_');
$routes->get('/TenagaNonPendidik_', 'Page::tenagaNonPendidik_');
$routes->get('/BeritaTerbaru_', 'Page::beritaTerbaru_');
$routes->get('/InfoSekolah_', 'Page::infoSekolah_');
$routes->get('/Agenda_', 'Page::agenda_');
$routes->get('/Galeri_', 'Page::galeri_');
$routes->get('/Agenda_', 'Page::agenda_');
$routes->get('/Prestasi_', 'Page::prestasi_');

// Proses Data
// User
$routes->post('/Login', 'User_::login');
$routes->post('/TambahUser', 'User_::create');
$routes->post('/EditUser/(:num)', 'User_::edit/$1');
$routes->post('/GantiPassword/(:num)', 'User_::gantiPassword/$1');
$routes->get('/HapusUser/(:num)', 'User_::hapus/$1');
$routes->get('/Keluar', 'User_::keluar');

// Master Profil
$routes->post('/EditProfil/(:num)', 'MasterProfil_::edit/$1');
$routes->post('/GantiGambarLandingPage/(:num)', 'MasterProfil_::gantiGambar/$1');

// Master Sejarah
$routes->post('/EditSejarah/(:num)', 'Sejarah_::edit/$1');

// Master Visi Misi
$routes->post('/EditVisiMisi/(:num)', 'VisiMisi_::edit/$1');

// Master Sambutan
$routes->post('/EditSambutan/(:num)', 'Sambutan_::edit/$1');
$routes->post('/GantiGambarSambutan/(:num)', 'Sambutan_::gantiGambar/$1');

// Organisasi Sekolah
$routes->post('/TambahOrganisasiSekolah', 'OrganisasiSekolah_::create');
$routes->post('/EditOrganisasiSekolah/(:num)', 'OrganisasiSekolah_::edit/$1');
$routes->post('/GantiFotoOrganisasiSekolah/(:num)', 'OrganisasiSekolah_::gantiFoto/$1');
$routes->get('/HapusOrganisasiSekolah/(:num)', 'OrganisasiSekolah_::hapus/$1');

// Organisasi Komite Sekolah
$routes->post('/TambahOrganisasiKomiteSekolah', 'OrganisasiKomiteSekolah_::create');
$routes->post('/EditOrganisasiKomiteSekolah/(:num)', 'OrganisasiKomiteSekolah_::edit/$1');
$routes->post('/GantiFotoOrganisasiKomiteSekolah/(:num)', 'OrganisasiKomiteSekolah_::gantiFoto/$1');
$routes->get('/HapusOrganisasiKomiteSekolah/(:num)', 'OrganisasiKomiteSekolah_::hapus/$1');

// Organisasi Osis
$routes->post('/TambahOrganisasiOsis', 'OrganisasiOsis_::create');
$routes->post('/EditOrganisasiOsis/(:num)', 'OrganisasiOsis_::edit/$1');
$routes->post('/GantiFotoOrganisasiOsis/(:num)', 'OrganisasiOsis_::gantiFoto/$1');
$routes->get('/HapusOrganisasiOsis/(:num)', 'OrganisasiOsis_::hapus/$1');

// Organisasi Pendidik
$routes->post('/TambahOrganisasiPendidik', 'OrganisasiPendidik_::create');
$routes->post('/EditOrganisasiPendidik/(:num)', 'OrganisasiPendidik_::edit/$1');
$routes->post('/GantiFotoOrganisasiPendidik/(:num)', 'OrganisasiPendidik_::gantiFoto/$1');
$routes->get('/HapusOrganisasiPendidik/(:num)', 'OrganisasiPendidik_::hapus/$1');

// Organisasi Non Pendidik
$routes->post('/TambahOrganisasiNonpendidik', 'OrganisasiNonpendidik_::create');
$routes->post('/EditOrganisasiNonpendidik/(:num)', 'OrganisasiNonpendidik_::edit/$1');
$routes->post('/GantiFotoOrganisasiNonpendidik/(:num)', 'OrganisasiNonpendidik_::gantiFoto/$1');
$routes->get('/HapusOrganisasiNonpendidik/(:num)', 'OrganisasiNonpendidik_::hapus/$1');

// Berita
$routes->post('/TambahBerita', 'Berita_::create');
$routes->post('/EditBerita/(:num)', 'Berita_::edit/$1');
$routes->post('/GantiGambarBerita/(:num)', 'Berita_::gantiGambar/$1');
$routes->get('/HapusBerita/(:num)', 'Berita_::hapus/$1');

// Info Sekolah
$routes->post('/TambahInfoSekolah', 'InfoSekolah_::create');
$routes->post('/EditInfoSekolah/(:num)', 'InfoSekolah_::edit/$1');
$routes->post('/GantiGambarInfoSekolah/(:num)', 'InfoSekolah_::gantiGambar/$1');
$routes->get('/HapusInfoSekolah/(:num)', 'InfoSekolah_::hapus/$1');

// Agenda
$routes->post('/TambahAgenda', 'Agenda_::create');
$routes->post('/EditAgenda/(:num)', 'Agenda_::edit/$1');
$routes->post('/GantiGambarAgenda/(:num)', 'Agenda_::gantiGambar/$1');
$routes->get('/HapusAgenda/(:num)', 'Agenda_::hapus/$1');

// Galeri
$routes->post('/TambahGaleri', 'Galeri_::create');
$routes->post('/EditGaleri/(:num)', 'Galeri_::edit/$1');
$routes->post('/GantiGambarGaleri/(:num)', 'Galeri_::gantiGambar/$1');
$routes->get('/HapusGaleri/(:num)', 'Galeri_::hapus/$1');

// Prestasi
$routes->post('/TambahPrestasi', 'Prestasi_::create');
$routes->post('/EditPrestasi/(:num)', 'Prestasi_::edit/$1');
$routes->post('/GantiGambarPrestasi/(:num)', 'Prestasi_::gantiGambar/$1');
$routes->get('/HapusPrestasi/(:num)', 'Prestasi_::hapus/$1');
