<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_galeri;
use App\Models\Model_log;
use App\Models\Model_data;

class Galeri_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session           = session();
        $modelInfoSekolah  = new Model_galeri();
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $keterangan        = $this->request->getPost('keterangan');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/galeri/', $pathgambar);
        }
        $data = [
            'keterangan'  => $keterangan,
            'author'      => $usernameAkses,
            'waktu'       => date('y-m-d  h:i:s a'),
            'gambar'      => $pathgambar,
        ];
        $modelInfoSekolah->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan galeri"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan Galeri"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_galeri;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $keterangan        = $this->request->getPost('keterangan');
        $data = [
            'keterangan'  => $keterangan,
            'author'      => $usernameAkses,
            'waktu'       => date('y-m-d  h:i:s a'),
        ];
        $modelInfoSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan galeri "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan Galeri"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_galeri;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        // Hapus gambar seblum nya
        $dataagenda  = $modelData->cekGaleriById($id);
        unlink('uploads/galeri/' . $dataagenda[0]['gambar']);
        // Update gambar terbaru 
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/galeri/', $pathgambar);
        }
        $data = [
            'gambar'      => $pathgambar
        ];
        $modelInfoSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan gambar agenda "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan gambar Galeri"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session                = session();
        $modelInfoSekolah       = new Model_galeri;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $dataagenda             = $modelData->cekGaleriById($id);
        $usernameAkses          = $session->get('username');
        unlink('uploads/galeri/' . $dataagenda[0]['gambar']);
        $modelInfoSekolah->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan galeri"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penghapusan Galeri"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
