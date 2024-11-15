<?php

namespace App\Controllers;

use App\Models\Model_data;

class page extends BaseController
{
    // Halaman User
    // ====================================================================
    public function landingPage()
    {
        $session                 = session();
        $modelData               = new model_data;
        $data                    = $modelData->tampilProfil();
        $dataBerita              = $modelData->tampilBeritaLimit(3);
        $jumlahBerita            = $modelData->jumlahBerita();
        $dataOrganisasiSekolah   = $modelData->tampilOrganisasiSekolahLimit(3);
        $ses_data = [
            'namaSekolah'   => $data[0]['nama'],
            'alamatSekolah' => $data[0]['alamat'],
            'nomorTelepon'  => $data[0]['nomorTelepon'],
            'instagram'     => $data[0]['instagram'],
            'youtube'       => $data[0]['youtube'],
            'facebook'      => $data[0]['facebook']
        ];
        $session->set($ses_data);
        return view('landingPage', compact('data', 'dataBerita', 'jumlahBerita', 'dataOrganisasiSekolah'));
    }
    public function sambutan()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');

        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilSambutan();
        return view('sambutan', compact('data'));
    }
    public function sejarah()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilSejarah();
        return view('sejarah', compact('data'));
    }
    public function visiMisi()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilVisiMisi();
        return view('visiMisi', compact('data'));
    }
    public function strukturOrganisasiSekolah()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilOrganisasiSekolah();
        return view('strukturOrganisasiSekolah', compact('data'));
    }
    public function strukturOrganisasiKomiteSekolah()
    {
        $session = session();
        $namaSekolah = $session->get('namaSekolah');
        $modelData = new Model_data;
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilOrganisasiKomiteSekolah();
        return view('strukturOrganisasiKomiteSekolah', compact('data'));
    }
    public function strukturOrganisasiOsis()
    {
        $session = session();
        $namaSekolah = $session->get('namaSekolah');
        $modelData = new Model_data;
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilOrganisasiOsis();
        return view('strukturOrganisasiOsis', compact('data'));
    }
    public function strukturOrganisasiTenagaPendidik()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilOrganisasiPendidik();
        return view('strukturOrganisasiTenagaPendidik', compact('data'));
    }
    public function strukturOrganisasiTenagaNonPendidik()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilOrganisasiNonpendidik();
        return view('strukturOrganisasiTenagaNonPendidik', compact('data'));
    }
    public function infoSekolah()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilInformasiSekolah();
        return view('infoSekolah', compact('data'));
    }
    public function infoSekolahDetail($id)
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->cekInformasiSekolahById($id);
        return view('infoSekolahDetail', compact('data'));
    }
    public function galeri()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilGaleri();
        return view('galeri', compact('data'));
    }
    public function beritaTerbaru()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilBerita();
        return view('berita', compact('data'));
    }
    public function beritaTerbaruDetail($id)
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->cekBeritaById($id);
        return view('beritaDetail', compact('data'));
    }
    public function agenda()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilAgenda();
        return view('agenda', compact('data'));
    }
    public function beritaAgendaDetail($id)
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->cekAgendaById($id);
        return view('agendaDetail', compact('data'));
    }
    public function prestasi()
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->tampilPrestasi();
        return view('prestasi', compact('data'));
    }
    public function prestasiDetail($id)
    {
        $session = session();
        $modelData = new Model_data;
        $namaSekolah = $session->get('namaSekolah');
        if ($namaSekolah == null) {
            return redirect()->to(base_url());
        }
        $data   = $modelData->cekPrestasiById($id);
        return view('prestasiDetail', compact('data'));
    }
    // Halaman Admin
    // ====================================================================
    public function login_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 1) {
            return redirect()->to(base_url() . 'Dashboard_');
        }
        return view('_login');
    }
    public function dashboard_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        return view('_dashboard');
    }
    public function user_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data      = $modelData->tampilUser();
        return view('_user', compact('data'));
    }
    public function masterProfil_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilProfil();
        return view('_masterProfil', compact('data'));
    }
    public function sejarah_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilSejarah();
        return view('_sejarah', compact('data'));
    }
    public function visiMisi_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilVisiMisi();
        return view('_visiMisi', compact('data'));
    }
    public function sambutan_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilSambutan();
        return view('_sambutan', compact('data'));
    }
    public function sekolah_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilOrganisasiSekolah();
        return view('_sekolah', compact('data'));
    }
    public function komiteSekolah_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilOrganisasiKomiteSekolah();
        return view('_komiteSekolah', compact('data'));
    }
    public function osis_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilOrganisasiOsis();
        return view('_osis', compact('data'));
    }
    public function tenagaPendidik_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilOrganisasiPendidik();
        return view('_tenagaPendidik', compact('data'));
    }
    public function tenagaNonPendidik_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilOrganisasiNonpendidik();
        return view('_tenagaNonPendidik', compact('data'));
    }
    public function beritaTerbaru_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilBerita();
        return view('_beritaTerbaru', compact('data'));
    }
    public function infoSekolah_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilInformasiSekolah();
        return view('_infoSekolah', compact('data'));
    }
    public function agenda_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilAgenda();
        return view('_agenda', compact('data'));
    }
    public function galeri_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilGaleri();
        return view('_galeri', compact('data'));
    }
    public function prestasi_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data = $modelData->tampilPrestasi();
        return view('_prestasi', compact('data'));
    }
}
