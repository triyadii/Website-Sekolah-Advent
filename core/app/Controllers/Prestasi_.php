<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_prestasi;
use App\Models\Model_log;
use App\Models\Model_data;

class Prestasi_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session           = session();
        $modelInfoSekolah  = new Model_prestasi();
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulPrestasi     = $this->request->getPost('judulPrestasi');
        $keterangan        = $this->request->getPost('keterangan');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/prestasi/', $pathgambar);
        }
        $data = [
            'judulPrestasi'  => $judulPrestasi,
            'keterangan'     => $keterangan,
            'author'         => $usernameAkses,
            'waktu'          => date('y-m-d  h:i:s a'),
            'gambar'         => $pathgambar,
        ];
        $modelInfoSekolah->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan prestasi"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan Prestasi"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_prestasi;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulPrestasi     = $this->request->getPost('judulPrestasi');
        $keterangan        = $this->request->getPost('keterangan');
        $data = [
            'judulPrestasi'  => $judulPrestasi,
            'keterangan'     => $keterangan,
            'author'         => $usernameAkses,
            'waktu'          => date('y-m-d  h:i:s a'),
        ];
        $modelInfoSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan prestasi "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan Prestasi"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_prestasi;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        // Hapus gambar seblum nya
        $dataagenda  = $modelData->cekprestasiById($id);
        unlink('uploads/prestasi/' . $dataagenda[0]['gambar']);
        // Update gambar terbaru 
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/prestasi/', $pathgambar);
        }
        $data = [
            'gambar'      => $pathgambar
        ];
        $modelInfoSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan gambar prestasi "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan gambar Prestasi"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session                = session();
        $modelInfoSekolah       = new Model_prestasi;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $dataagenda             = $modelData->cekprestasiById($id);
        unlink('uploads/prestasi/' . $dataagenda[0]['gambar']);
        $modelInfoSekolah->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan prestasi"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penghapusan Prestasi"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
