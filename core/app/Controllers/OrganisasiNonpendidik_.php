<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_tenaga_nonpendidik;
use App\Models\Model_log;
use App\Models\Model_data;

class OrganisasiNonpendidik_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session                = session();
        $modelNonPendidik       = new Model_tenaga_nonpendidik();
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $nama                   = $this->request->getPost('nama');
        $jabatan                = $this->request->getPost('jabatan');
        $foto                   = $this->request->getFile('foto');
        $pathFoto               = "Nonpendidik_" . rand(0, 99999) . '.jpg';
        if (!$foto->hasMoved()) {
            $foto->move('uploads/strukturOrganisasi/', $pathFoto);
        }
        $data = [
            'jabatan'   => $jabatan,
            'nama'      => $nama,
            'foto'      => $pathFoto,
        ];
        $modelNonPendidik->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan Struktur Organisasi Sekolah"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan struktur organisasi non pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session                = session();
        $modelNonPendidik       = new Model_tenaga_nonpendidik;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $nama                   = $this->request->getPost('nama');
        $jabatan                = $this->request->getPost('jabatan');
        $data = [
            'nama'      => $nama,
            'jabatan'   => $jabatan
        ];
        $modelNonPendidik->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Struktur Organisasi Sekolah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan struktur organisasi non pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiFoto($id = null)
    {
        $session                = session();
        $modelNonPendidik       = new Model_tenaga_nonpendidik;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $foto                   = $this->request->getFile('foto');
        $pathFoto               = "Nonpendidik_" . rand(0, 99999) . '.jpg';
        // Hapus Foto seblum nya
        $dataStukturOrganisasi  = $modelData->cekStrukturOrganisasiNonpendidikById($id);
        unlink('uploads/strukturOrganisasi/' . $dataStukturOrganisasi[0]['foto']);
        // Update Foto terbaru 
        if (!$foto->hasMoved()) {
            $foto->move('uploads/strukturOrganisasi/', $pathFoto);
        }
        $data = [
            'foto'      => $pathFoto
        ];
        $modelNonPendidik->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Foto Struktur Organisasi Sekolah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan foto struktur organisasi non pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session                = session();
        $modelNonPendidik       = new Model_tenaga_nonpendidik;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $dataStukturOrganisasi  = $modelData->cekStrukturOrganisasiNonpendidikById($id);
        unlink('uploads/strukturOrganisasi/' . $dataStukturOrganisasi[0]['foto']);
        $modelNonPendidik->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan Struktur Organsisasi non pendidik"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penghapusas struktur organisasi non pendidik"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
