<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_siswa;
use App\Models\Model_log;
use App\Models\Model_data;

class Siswa_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session           = session();
        $modelSiswa        = new Model_siswa();
        $modelLog          = new Model_log;
        $usernameAkses     = $session->get('username');
        $namaSiswa         = $this->request->getPost('namaSiswa');
        $kelas             = $this->request->getPost('kelas');
        $foto              = $this->request->getFile('foto');
        $pathFoto          = "siswa_" . rand(0, 99999) . '.jpg';
        if (!$foto->hasMoved()) {
            $foto->move('uploads/siswa/', $pathFoto);
        }
        $data = [
            'namaSiswa'   => $namaSiswa,
            'kelas'       => $kelas,
            'foto'      => $pathFoto,
        ];
        $modelSiswa->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan Siswa"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan siswa"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session           = session();
        $modelSiswa        = new Model_siswa;
        $modelLog          = new Model_log;
        $usernameAkses     = $session->get('username');
        $kelas             = $this->request->getPost('kelas');
        $namaSiswa         = $this->request->getPost('judulBerita');
        $data = [
            'kelas'         => $kelas,
            'namaSiswa'     => $namaSiswa,
        ];
        $modelSiswa->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Data Siswa "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan Data Siswa"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session           = session();
        $modelSiswa       = new Model_siswa;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $foto              = $this->request->getFile('foto');
        $pathFoto          = "foto_" . rand(0, 99999) . '.jpg';
        // Hapus gambar seblum nya
        $dataSiswa  = $modelData->cekSiswaById($id);
        unlink('uploads/siswa/' . $dataSiswa[0]['foto']);
        if (!$foto->hasMoved()) {
            $foto->move('uploads/siswa/', $pathFoto);
        }
        $data = [
            'foto'      => $pathFoto
        ];
        $modelSiswa->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Foto Siswa "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan foto siswa"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session = session();
        $modelSiswa         = new Model_siswa;
        $modelLog           = new Model_log;
        $modelData          = new Model_data;
        $usernameAkses      = $session->get('username');
        $dataBerita         = $modelData->cekSiswaById($id);
        unlink('uploads/siswa/' . $dataBerita[0]['foto']);
        $modelSiswa->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan Siswa"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penghapusan Siswa"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
