<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_tenaga_pendidik;
use App\Models\Model_log;
use App\Models\Model_data;

class OrganisasiPendidik_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session                = session();
        $modelPendidik          = new Model_tenaga_pendidik();
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        if ($usernameAkses == null) {
            $usernameAkses = $this->request->getPost('nama');
        }
        $nik                    = $this->request->getPost('nik');
        $nama                   = $this->request->getPost('nama');
        $jabatan                = $this->request->getPost('jabatan');
        $waktuBergabung         = $this->request->getPost('waktuBergabung');
        $dokumen                = $this->request->getFile('dokumen');
        $foto                   = $this->request->getFile('foto');
        $pathDokumen            = "dokumen_" . rand(0, 99999) . '.pdf';
        $pathFoto               = "pendidik_" . rand(0, 99999) . '.jpg';
        if (!$dokumen->hasMoved()) {
            $dokumen->move('uploads/dokumen/', $pathDokumen);
        }
        if (!$foto->hasMoved()) {
            $foto->move('uploads/strukturOrganisasi/', $pathFoto);
        }
        $data = [
            'nama'              => $nama,
            'nik'               => $nik,
            'jabatan'           => $jabatan,
            'waktuBergabung'    => $waktuBergabung,
            'dokumen'           => $pathDokumen,
            'foto'              => $pathFoto,
        ];
        $modelPendidik->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan Pendidik Sekolah"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan Pendidik Sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session                = session();
        $modelPendidik          = new Model_tenaga_pendidik;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $nama                   = $this->request->getPost('nama');
        $jabatan                = $this->request->getPost('jabatan');
        $data = [
            'nama'      => $nama,
            'jabatan'   => $jabatan
        ];
        $modelPendidik->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Struktur Organisasi Sekolah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan struktur organisasi Pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiFoto($id = null)
    {
        $session                = session();
        $modelPendidik          = new Model_tenaga_pendidik;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $foto                   = $this->request->getFile('foto');
        $pathFoto               = "pendidik_" . rand(0, 99999) . '.jpg';
        // Hapus Foto seblum nya
        $dataStukturOrganisasi  = $modelData->cekStrukturOrganisasiPendidikById($id);
        unlink('uploads/strukturOrganisasi/' . $dataStukturOrganisasi[0]['foto']);
        // Update Foto terbaru 
        if (!$foto->hasMoved()) {
            $foto->move('uploads/strukturOrganisasi/', $pathFoto);
        }
        $data = [
            'foto'      => $pathFoto
        ];
        $modelPendidik->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Foto Struktur Organisasi Sekolah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan struktur organisasi Pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiDokumen($id = null)
    {
        $session                = session();
        $modelPendidik          = new Model_tenaga_pendidik;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $dokumen                = $this->request->getFile('dokumen');
        $pathDokumen            = "dokumen_" . rand(0, 99999) . '.jpg';
        // Hapus Foto seblum nya
        $dataStukturOrganisasi  = $modelData->cekStrukturOrganisasiPendidikById($id);
        unlink('uploads/dokumen/' . $dataStukturOrganisasi[0]['dokumen']);
        // Update Foto terbaru 
        if (!$dokumen->hasMoved()) {
            $dokumen->move('uploads/strukturOrganisasi/', $pathDokumen);
        }
        $data = [
            'dokumen'      => $pathDokumen
        ];
        $modelPendidik->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Dokumen Struktur Organisasi Sekolah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan dokumen struktur organisasi Pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session                = session();
        $modelPendidik          = new Model_tenaga_pendidik;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $dataStukturOrganisasi  = $modelData->cekStrukturOrganisasiPendidikById($id);
        unlink('uploads/dokumen/' . $dataStukturOrganisasi[0]['dokumen']);
        unlink('uploads/strukturOrganisasi/' . $dataStukturOrganisasi[0]['foto']);
        $modelPendidik->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan Struktur Organisasi Pendidik"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan struktur organisasi Pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function DownloadDokumen($id = null)
    {
        $modelData  = new Model_data();
        $data       = $modelData->cekStrukturOrganisasiPendidikById($id);
        return $this->response->download('uploads/dokumen/' . $data[0]['dokumen'], null);
    }
}
