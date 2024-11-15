<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_agenda;
use App\Models\Model_log;
use App\Models\Model_data;

class Agenda_ extends BaseController
{
    use ResponseTrait;
    public function create()
    {
        $session           = session();
        $modelInfoSekolah  = new Model_agenda();
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulAgenda       = $this->request->getPost('judulAgenda');
        $agenda            = $this->request->getPost('agenda');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/agenda/', $pathgambar);
        }
        $data = [
            'judulAgenda' => $judulAgenda,
            'agenda'      => $agenda,
            'author'      => $usernameAkses,
            'waktu'       => date('y-m-d  h:i:s a'),
            'gambar'      => $pathgambar,
        ];
        $modelInfoSekolah->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan agenda"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penambahan Agenda"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_agenda;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $judulAgenda       = $this->request->getPost('judulAgenda');
        $agenda            = $this->request->getPost('agenda');
        $data = [
            'judulAgenda' => $judulAgenda,
            'agenda'      => $agenda,
            'author'      => $usernameAkses,
            'waktu'       => date('y-m-d  h:i:s a'),
        ];
        $modelInfoSekolah->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan agenda "
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan Agenda"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiGambar($id = null)
    {
        $session           = session();
        $modelInfoSekolah  = new Model_agenda;
        $modelLog          = new Model_log;
        $modelData         = new Model_data;
        $usernameAkses     = $session->get('username');
        $gambar            = $this->request->getFile('gambar');
        $pathgambar        = $gambar->getRandomName();
        // Hapus gambar seblum nya
        $dataagenda  = $modelData->cekAgendaById($id);
        unlink('uploads/agenda/' . $dataagenda[0]['gambar']);
        // Update gambar terbaru 
        if (!$gambar->hasMoved()) {
            $gambar->move('uploads/agenda/', $pathgambar);
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
            'keterangan' => "Berhasil melakukan perubahan gambar Agenda"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session                = session();
        $modelInfoSekolah       = new Model_agenda;
        $modelLog               = new Model_log;
        $modelData              = new Model_data;
        $dataagenda             = $modelData->cekAgendaById($id);
        $usernameAkses          = $session->get('username');
        unlink('uploads/agenda/' . $dataagenda[0]['gambar']);
        $modelInfoSekolah->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan agenda"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan penghapusan Agenda"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
}
