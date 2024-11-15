<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_info_sekolah;
use App\Models\Model_log;
use App\Models\Model_data;

class InfoSekolah_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session           = session();
        $modelInfoSekolah  = new Model_info_sekolah();
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulInfo         = $this->request->getPost('judulInfo');
        $informasi         = $this->request->getPost('informasi');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/informasi/', $pathgambar);
        }
        $data = [
            'judulInfo'   => $judulInfo,
            'informasi'   => $informasi,
            'author'      => $usernameAkses,
            'waktu'       => date('y-m-d  h:i:s a'),
            'gambar'      => $pathgambar,
        ];
        $modelInfoSekolah->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan informasi"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan Informasi Sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_info_sekolah;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulInfo         = $this->request->getPost('judulInfo');
        $informasi         = $this->request->getPost('informasi');
        $data = [
            'judulInfo'   => $judulInfo,
            'informasi'   => $informasi,
            'author'      => $usernameAkses,
            'waktu'       => date('y-m-d  h:i:s a'),
        ];
        $modelInfoSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan informasi "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan Informasi Sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_info_sekolah;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        // Hapus gambar seblum nya
        $datainformasi  = $modelData->cekInformasiSekolahById($id);
        unlink('uploads/informasi/' . $datainformasi[0]['gambar']);
        // Update gambar terbaru 
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/informasi/', $pathgambar);
        }
        $data = [
            'gambar'      => $pathgambar
        ];
        $modelInfoSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan gambar informasi "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan gambar Informasi Sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session                = session();
        $modelInfoSekolah       = new Model_info_sekolah;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $datainformasi          = $modelData->cekInformasiSekolahById($id);
        unlink('uploads/informasi/' . $datainformasi[0]['gambar']);
        $modelInfoSekolah->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan informasi"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penghapusan Informasi Sekolah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
