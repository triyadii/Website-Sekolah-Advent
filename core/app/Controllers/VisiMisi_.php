<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_log;
use App\Models\Model_visi_misi;

class VisiMisi_ extends BaseController
{
    use ResponseTrait;
    public function edit($id = null)
    {
        $session         = session();
        $modelVisiMisi   = new Model_visi_misi();
        $modelLog        = new Model_log;
        $usernameAkses   = $session->get('username');
        $visi           = $this->request->getPost('visi');
        $misi           = $this->request->getPost('misi');
        $data = [
            'visi'      => $visi,
            'misi'      => $misi,
            'author'    => $usernameAkses,
            'waktu'     => date('y-m-d  h:i:s a')
        ];
        $modelVisiMisi->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Sejarah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan Visi Misi"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
