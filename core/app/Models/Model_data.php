<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_data extends Model
{
    // Data User
    // ==========================================
    public function tampilUser()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('*');
        $builder->orderBy('idUser', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekUsername($username)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('*');
        $builder->Where('username', $username);
        return $builder->get()->getResultArray();
    }
    public function tampilDetailUser($idUser)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_user');
        $builder->select('*');
        $builder->Where('idUser', $idUser);
        return $builder->get()->getResultArray();
    }
    // Data Profil
    // ==========================================
    public function tampilProfil()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_profil');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }
    public function cekProfilById($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_profil');
        $builder->select('*');
        $builder->where('idProfil', $id);
        return $builder->get()->getResultArray();
    }
    // Data Sejarah
    // ==========================================
    public function tampilSejarah()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_sejarah');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }
    // Data Visi Misi
    // ==========================================
    public function tampilVisiMisi()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_visi_misi');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }
    // Data Sambutan
    // ==========================================
    public function tampilSambutan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_sambutan');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }
    // Data Organisasi Sekolah
    // ==========================================
    public function tampilOrganisasiSekolah()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_sekolah');
        $builder->select('*');
        $builder->orderBy('idSekolah', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekStrukturOrganisasiSekolahById($idSekolah)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_sekolah');
        $builder->select('*');
        $builder->where('idSekolah', $idSekolah);
        return $builder->get()->getResultArray();
    }
    public function tampilOrganisasiSekolahLimit($limit)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_sekolah');
        $builder->select('*');
        $builder->orderBy('idSekolah', 'DESC');
        $builder->LIMIT($limit);
        return $builder->get()->getResultArray();
    }
    // Data Organisasi Komite Sekolah
    // ==========================================
    public function tampilOrganisasiKomiteSekolah()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_komite_sekolah');
        $builder->select('*');
        $builder->orderBy('idKomiteSekolah', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekStrukturOrganisasiKomiteSekolahById($idKomiteSekolah)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_komite_sekolah');
        $builder->select('*');
        $builder->where('idKomiteSekolah', $idKomiteSekolah);
        return $builder->get()->getResultArray();
    }
    // Data Organisasi Osis
    // ==========================================
    public function tampilOrganisasiOsis()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_osis');
        $builder->select('*');
        $builder->orderBy('idOsis', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekStrukturOrganisasiOsisById($idOsis)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_osis');
        $builder->select('*');
        $builder->where('idOsis', $idOsis);
        return $builder->get()->getResultArray();
    }
    // Data Organisasi Pendidik
    // ==========================================
    public function tampilOrganisasiPendidik()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_tenaga_pendidik');
        $builder->select('*');
        $builder->orderBy('idTenagaPendidik', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekStrukturOrganisasiPendidikById($idPendidik)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_tenaga_pendidik');
        $builder->select('*');
        $builder->where('idTenagaPendidik', $idPendidik);
        return $builder->get()->getResultArray();
    }
    // Data Organisasi Non Pendidik
    // ==========================================
    public function tampilOrganisasiNonpendidik()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_tenaga_nonpendidik');
        $builder->select('*');
        $builder->orderBy('idTenagaNonpendidik', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekStrukturOrganisasiNonpendidikById($idNonpendidik)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_tenaga_nonpendidik');
        $builder->select('*');
        $builder->where('idTenagaNonpendidik', $idNonpendidik);
        return $builder->get()->getResultArray();
    }
    // Data Berita
    // ==========================================
    public function tampilBerita()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_berita');
        $builder->select('*');
        $builder->orderBy('idBerita', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function tampilBeritaLimit($limit)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_berita');
        $builder->select('*');
        $builder->orderBy('idBerita', 'DESC');
        $builder->LIMIT($limit);
        return $builder->get()->getResultArray();
    }
    public function cekBeritaById($idBerita)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_berita');
        $builder->select('*');
        $builder->where('idBerita', $idBerita);
        return $builder->get()->getResultArray();
    }
    public function jumlahBerita()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_berita');
        $builder->select('*');
        return $builder->countAllResults();
    }
    // Data Agenda
    // ==========================================
    public function tampilAgenda()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_agenda');
        $builder->select('*');
        $builder->orderBy('idAgenda', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekAgendaById($idAgenda)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_agenda');
        $builder->select('*');
        $builder->where('idAgenda', $idAgenda);
        return $builder->get()->getResultArray();
    }
    // Data galeri
    // ==========================================
    public function tampilGaleri()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_galeri');
        $builder->select('*');
        $builder->orderBy('idGaleri', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekGaleriById($idGaleri)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_galeri');
        $builder->select('*');
        $builder->where('idGaleri', $idGaleri);
        return $builder->get()->getResultArray();
    }
    // Data Informasi Sekolah
    // ==========================================
    public function tampilInformasiSekolah()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_info_sekolah');
        $builder->select('*');
        $builder->orderBy('idInfoSekolah', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekInformasiSekolahById($idGaleri)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_info_sekolah');
        $builder->select('*');
        $builder->where('idInfoSekolah', $idGaleri);
        return $builder->get()->getResultArray();
    }
    // Data prestasi
    // ==========================================
    public function tampilPrestasi()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_prestasi');
        $builder->select('*');
        $builder->orderBy('idPrestasi', 'DESC');
        return $builder->get()->getResultArray();
    }
    public function cekPrestasiById($idPrestasi)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_prestasi');
        $builder->select('*');
        $builder->where('idPrestasi', $idPrestasi);
        return $builder->get()->getResultArray();
    }
}
