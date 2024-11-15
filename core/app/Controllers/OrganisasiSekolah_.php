<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_sekolah;
use App\Models\Model_log;
use App\Models\Model_data;

class OrganisasiSekolah_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session         = session();
        $modelSekolah    = new Model_sekolah;
        $modelLog        = new Model_log;
        $modelData       = new Model_data;
        $usernameAkses   = $session->get('username');
        $nama            = $this->request->getPost('nama');
        $jabatan         = $this->request->getPost('jabatan');
        $foto            = $this->request->getFile('foto');
        $pathFoto        = "sekolah_" . rand(0, 99999) . '.jpg';
        if (!$foto->hasMoved()) {
            $foto->move('uploads/strukturOrganisasi/', $pathFoto);
        }
        $data = [
            'jabatan'   => $jabatan,
            'nama'      => $nama,
            'foto'      => $pathFoto,
        ];
        $modelSekolah->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan Struktur Organisasi Sekolah"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan struktur organisasi sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session         = session();
        $modelSekolah    = new Model_sekolah;
        $modelLog        = new Model_log;
        $modelData       = new Model_data;
        $usernameAkses   = $session->get('username');
        $nama            = $this->request->getPost('nama');
        $jabatan         = $this->request->getPost('jabatan');
        $data = [
            'nama'      => $nama,
            'jabatan'   => $jabatan
        ];
        $modelSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Struktur Organisasi Sekolah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan merubah struktur organisasi sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiFoto($id = null)
    {
        $session                = session();
        $modelSekolah           = new Model_sekolah;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $foto                   = $this->request->getFile('foto');
        $pathFoto               = "sekolah_" . rand(0, 99999) . '.jpg';
        // Hapus Foto seblum nya
        $dataStukturOrganisasi  = $modelData->cekStrukturOrganisasiSekolahById($id);
        unlink('uploads/strukturOrganisasi/' . $dataStukturOrganisasi[0]['foto']);
        // Update Foto terbaru 
        if (!$foto->hasMoved()) {
            $foto->move('uploads/strukturOrganisasi/', $pathFoto);
        }
        $data = [
            'foto'      => $pathFoto
        ];
        $modelSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Foto Struktur Organisasi Sekolah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan merubah gambar struktur organisasi sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session               = session();
        $modelSekolah          = new Model_sekolah;
        $modelLog              = new Model_log;
        $modelData             = new Model_data;
        $usernameAkses         = $session->get('username');
        $dataStukturOrganisasi = $modelData->cekStrukturOrganisasiSekolahById($id);
        unlink('uploads/strukturOrganisasi/' . $dataStukturOrganisasi[0]['foto']);
        $modelSekolah->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan Struktur OPRganisasi Sekolah"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan menghapus struktur organisasi sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
