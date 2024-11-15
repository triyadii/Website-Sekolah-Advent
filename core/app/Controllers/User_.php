<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_user;
use App\Models\Model_log;
use App\Models\Model_data;

class User_ extends BaseController
{
    use ResponseTrait;
    public function login()
    {
        $session        = session();
        $modelUser      = new Model_user;
        $modelLog       = new Model_log;
        $modelData      = new Model_data;
        $username       = $this->request->getPost('username');
        $password       = $this->request->getPost('password');
        $cekUsername    = $modelData->cekUsername($username);
        if ($cekUsername == null) {
            $dataLog = [
                'username'     => "Tidak Diketahui",
                'waktu'         => date('Y-m-d H:i:s'),
                'keterangan'    => "Melakukan Percobaan Login dengan menggunakan username " . $username
            ];
            $modelLog->insert($dataLog);
            $ses_data = [
                'status'    => "Gagal",
                'keterangan' => "Akun anda tidak ditemukan"
            ];
            $session->set($ses_data);
            return redirect()->back();
        }
        $cekPassword    = password_verify($password, $cekUsername[0]['password']);
        if ($cekPassword == true) {
            $dataLog = [
                'username'      => $cekUsername[0]['username'],
                'waktu'         => date('Y-m-d H:i:s'),
                'keterangan'    => "Melakukan Login Admin"
            ];
            $modelLog->insert($dataLog);
            $ses_data = [
                'statusLogin'   => "1",
                'username'      => $cekUsername[0]['username'],
                'nama'          => $cekUsername[0]['nama'],
                'hakAkses'      => $cekUsername[0]['hakAkses'],
                'idUser'        => $cekUsername[0]['idUser'],
                'status'        => "Berhasil",
                'keterangan'    => "Anda berhasil login"
            ];
            $session->set($ses_data);
            return redirect()->to(base_url() . 'Dashboard_');
        } else {
            $dataLog = [
                'username'     => "Tidak Diketahui",
                'waktu'         => date('Y-m-d H:i:s'),
                'keterangan'    => "Melakukan Percobaan Login dengan menggunakan username " . $username
            ];
            $modelLog->insert($dataLog);
            $ses_data = [
                'status'    => "Gagal",
                'keterangan' => "Mohon Maaf Password anda salah"
            ];
            $session->set($ses_data);
            return redirect()->to(base_url() . 'Login_');
        }
    }
    public function create()
    {
        $session         = session();
        $modelUser       = new Model_user;
        $modelLog        = new Model_log;
        $modelData       = new Model_data;
        $usernameAkses   = $session->get('username');
        $username        = $this->request->getPost('username');
        $nama            = $this->request->getPost('nama');
        $password        = $this->request->getPost('password');
        $hakAkses        = $this->request->getPost('hakAkses');
        $hashPassword   = [
            'cost' => 10,
        ];
        $cekUsername = $modelData->cekUsername($username);
        if ($cekUsername != null) {
            $dataLog = [
                'username'      => $usernameAkses,
                'waktu'         => date('Y-m-d H:i:s'),
                'keterangan'    => "Penambahan Username tidak berhasil dikarenakan username sudah terdaftar"
            ];
            $modelLog->insert($dataLog);
            $ses_data = [
                'status'    => "Gagal",
                'keterangan' => "Username sudah terdaftar"
            ];
            $session->set($ses_data);
            return redirect()->back();
        }
        $data = [
            'username'   => $username,
            'nama'       => $nama,
            'password'   => password_hash($password, PASSWORD_DEFAULT, $hashPassword),
            'hakAkses'   => $hakAkses,
        ];
        $modelUser->insert($data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Penambahan Username, dengan username " . $username
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Penambahan User Berhasil"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function edit($id = null)
    {
        $session         = session();
        $modelUser       = new Model_user;
        $modelLog        = new Model_log;
        $usernameAkses   = $session->get('username');
        $nama            = $this->request->getPost('nama');
        $data = [
            'nama'       => $nama
        ];
        $modelUser->update($id, $data);
        $dataLog = [
            'username'     => $usernameAkses,
            'waktu'        => date('Y-m-d H:i:s'),
            'keterangan'   => "Melakukan Perubahan Data"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Berhasil melakukan perubahan data user"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function gantiPassword($id = null)
    {
        $session         = session();
        $modelUser       = new Model_user;
        $modelLog        = new Model_log;
        $modelData       = new Model_data;
        $usernameAkses   = $session->get('username');
        $passwordLama    = $this->request->getPost('passwordLama');
        $passwordBaru    = $this->request->getPost('passwordBaru');
        $cekUserId       = $modelData->tampilDetailUser($id);
        $cekPassword     = password_verify($passwordLama, $cekUserId[0]['password']);
        if ($cekPassword != true) {
            $dataLog = [
                'username'   => $cekUserId[0]['username'],
                'waktu'      => date('Y-m-d H:i:s'),
                'keterangan' => "Perubahan password tidak berhasil karena password lama tidak benar"
            ];
            $modelLog->insert($dataLog);
            $ses_data = [
                'status'    => "Gagal",
                'keterangan' => "Mohon maaf, password lama yang anda masukkan salah"
            ];
            $session->set($ses_data);
            return redirect()->back();
        }
        $hashPassword   = [
            'cost' => 10,
        ];
        $data = [
            'password'   => password_hash($passwordBaru, PASSWORD_DEFAULT, $hashPassword),
        ];
        $modelUser->update($id, $data);
        $dataLog = [
            'username'      => $usernameAkses,
            'waktu'         => date('Y-m-d H:i:s'),
            'keterangan'    => "Melakukan Perubahan Password"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'    => "Berhasil",
            'keterangan' => "Selamat, perubahan password anda berhasil"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session        = session();
        $usernameAkses  = $session->get('username');
        $modelUser      = new Model_User;
        $modelLog       = new Model_log;
        $modelUser->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan Data User"
        ];
        $modelLog->insert($dataLog);
        $ses_data = [
            'status'     => "Berhasil",
            'keterangan' => "Penghapusan User berhasil"
        ];
        $session->set($ses_data);
        return redirect()->back();
    }
    public function keluar()
    {
        $session     = session();
        $session->destroy();
        return redirect()->to(base_url() . 'Login_');
    }
}
