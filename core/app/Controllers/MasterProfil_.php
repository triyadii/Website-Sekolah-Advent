<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_profil;
use App\Models\Model_log;
use App\Models\Model_data;


class MasterProfil_ extends BaseController
{
    use ResponseTrait;
    public function edit($id = null)
    {
        $session         = session();
        $modelProfil     = new Model_profil;
        $modelLog        = new Model_log;
        $usernameAkses   = $session->get('username');
        $nama            = $this->request->getPost('nama');
        $nomorTelepon    = $this->request->getPost('nomorTelepon');
        $alamat          = $this->request->getPost('alamat');
        $tentang         = $this->request->getPost('tentang');
        $pengantar       = $this->request->getPost('pengantar');
        $instagram       = $this->request->getPost('instagram');
        $youtube         = $this->request->getPost('youtube');
        $facebook        = $this->request->getPost('facebook');
        $data = [
            'nama'          => $nama,
            'nomorTelepon'  => $nomorTelepon,
            'alamat'        => $alamat,
            'tentang'       => $tentang,
            'pengantar'     => $pengantar,
            'instagram'     => $instagram,
            'youtube'       => $youtube,
            'facebook'      => $facebook
        ];

        $modelProfil->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Data Profil "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan data Profil"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session         = session();
        $modelProfil     = new Model_profil;
        $modelLog        = new Model_log;
        $modelData       = new Model_data;
        $usernameAkses   = $session->get('username');
        $gambar          = $this->request->getFile('gambar');
        $pathGambar      = "profil_" . rand(0, 99999) . '.jpg';
        $dataProfil      = $modelData->cekProfilById($id);
        unlink('uploads/profil/' . $dataProfil[0]['gambar']);
        // Update Foto terbaru 
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/profil/', $pathGambar);
        }
        $data = [
            'gambar'      => $pathGambar
        ];
        $modelProfil->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Data Profil "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan data Profil"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
