<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_berita;
use App\Models\Model_log;
use App\Models\Model_data;

class Berita_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session           = session();
        $modelBerita       = new Model_berita();
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulBerita       = $this->request->getPost('judulBerita');
        $berita            = $this->request->getPost('berita');
        $gambar            = $this->request->getFile('gambar');
        $pathGambar        = "berita_" . rand(0, 99999) . '.jpg';
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/berita/', $pathGambar);
        }
        $data = [
            'judulBerita'   => $judulBerita,
            'berita'        => $berita,
            'author'        => $usernameAkses,
            'waktu'         => date('y-m-d  h:i:s a'),
            'gambar'        => $pathGambar,
        ];
        $modelBerita->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan Berita"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan berita"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session           = session();
        $modelBerita       = new Model_berita;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulBerita       = $this->request->getPost('judulBerita');
        $berita            = $this->request->getPost('berita');
        $data = [
            'judulBerita'   => $judulBerita,
            'berita'        => $berita,
            'author'        => $usernameAkses,
            'waktu'         => date('y-m-d  h:i:s a'),
        ];
        $modelBerita->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Berita "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan berita"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session           = session();
        $modelBerita       = new Model_berita;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $gambar            = $this->request->getFile('gambar');
        $pathGambar        = "berita_" . rand(0, 99999) . '.jpg';
        // Hapus gambar seblum nya
        $dataBerita  = $modelData->cekBeritaById($id);
        unlink('uploads/berita/' . $dataBerita[0]['gambar']);
        // Update gambar terbaru 
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/berita/', $pathGambar);
        }
        $data = [
            'gambar'      => $pathGambar
        ];
        $modelBerita->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan gambar berita "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan gambar berita"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session = session();
        $modelBerita       = new Model_berita;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses     = $session->get('username');
        $dataBerita  = $modelData->cekBeritaById($id);
        unlink('uploads/berita/' . $dataBerita[0]['gambar']);
        $modelBerita->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan Berita"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penghapusan berita"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
