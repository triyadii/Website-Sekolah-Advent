<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_sambutan;
use App\Models\Model_log;
use App\Models\Model_data;

class Sambutan_ extends BaseController
{
    use ResponseTrait;
    public function edit($id = null)
    {
        $session         = session();
        $modelSambutan   = new Model_sambutan();
        $modelLog        = new Model_log;
        $usernameAkses   = $session->get('username');
        $sambutan        = $this->request->getPost('sambutan');
        $data = [
            'sambutan'  => $sambutan,
            'author'    => $usernameAkses,
            'waktu'     => date('y-m-d  h:i:s a')
        ];
        $modelSambutan->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan sambutan "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan sambutan"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session                = session();
        $modelSambutan          = new Model_sambutan;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $usernameAkses          = $session->get('username');
        $gambar                 = $this->request->getFile('gambar');
        $pathGambar             = "sekolah_" . rand(0, 99999) . '.jpg';
        // Hapus gambar seblum nya
        $dataSambutan  = $modelData->cekSambutanById($id);
        unlink('uploads/sambutan/' . $dataSambutan[0]['gambar']);
        // Update gambar terbaru 
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/sambutan/', $pathGambar);
        }
        $data = [
            'gambar'      => $pathGambar
        ];
        $modelSambutan->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Foto Sambutan "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan merubah gambar sambutan"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
