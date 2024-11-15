<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_sejarah;
use App\Models\Model_log;

class Sejarah_ extends BaseController
{
    use ResponseTrait;
    public function edit($id = null)
    {
        $session         = session();
        $modelSejarah    = new Model_sejarah;
        $modelLog        = new Model_log;
        $usernameAkses   = $session->get('username');
        $sejarah         = $this->request->getPost('sejarah');
        $data = [
            'sejarah' => $sejarah,
            'author'  => $usernameAkses,
            'waktu'   => date('y-m-d  h:i:s a')
        ];
        $modelSejarah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Sejarah "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan sejarah"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
