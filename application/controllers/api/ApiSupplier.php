<?php

defined('BASEPATH') or exit('No direct script access allowed');

// import the library
require APPPATH . "libraries/Format.php";
require APPPATH . "libraries/RestController.php";

// use namespace

use App\components\traits\ClientApi;
use chriskacerguis\RestServer\RestController;
use App\components\UserCategory;
use App\components\traits\User;
use App\components\UserType;

class ApiSupplier extends RestController
{
    use \App\models\traits\Supplier;
    use User;
    use ClientApi;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/Supplier_api');
        $this->load->model('api/Pengguna_model');
        $this->load->library('form_validation', 'google');
        $this->load->helper('form');
        $this->init();
    }

    public function index_get()
    {
        $id_supplier = $this->input->get('id_pengguna');
        $data = $this->Supplier_api->getTimMarketing($id_supplier);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function getbyId_get($id)
    {
        // $id = $this->get('id_tim');
        $data = $this->Supplier_api->getTimMarketingWithFotoById($id);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    // public function create_post()
    // {
    //     $data = [
    //         'nama_tim' => $this->post('nama_tim'),
    //         'posisi' => $this->post('posisi'),
    //         'no_telp' => $this->post('no_telp'),
    //         'email' => $this->post('email'),
    //         'alamat' => $this->post('alamat'),
    //         'id_supplier' => $_COOKIE['id_pengguna'],
    //     ];

    //     $token = random_string('alnum', 25);

    //     $data_pengguna = [
    //         'nama' => $this->post('nama_tim'),
    //         'email' => $this->post('email'),
    //         'alamat' => $this->post('alamat'),
    //         'no_telp' => $this->post('no_telp'),
    //         'kategori' => UserCategory::MARKETING,
    //         // 'password' => md5($this->post('password')),
    //         'token' => $token,
    //         'is_active' => 1,
    //         'tgl_update' => date('Y-m-d H:i:s'),
    //         'status' => UserType::PAID,
    //     ];

    //     // if($this->Supplier_api->insertTimToPengguna($data_pengguna) > 0){
    //     //     $this->response([
    //     //         'status' => true,
    //     //         'message' => 'Data berhasil ditambahkan'
    //     //     ], RestController::HTTP_CREATED);
    //     // } else {
    //     //     $this->response([
    //     //         'status' => false,
    //     //         'message' => 'Data gagal ditambahkan'
    //     //     ], RestController::HTTP_BAD_REQUEST);
    //     // }
    //     $this->Supplier_api->insertTimToPengguna($data_pengguna);
    //     if ($this->Supplier_api->createTimMarketing($data) > 0) {
    //         $this->response([
    //             'status' => true,
    //             'message' => 'Data berhasil ditambahkan'
    //         ], RestController::HTTP_CREATED);
    //         $this->Supplier_api->insertTimToPengguna($data_pengguna);
    //     } else {
    //         $this->response([
    //             'status' => false,
    //             'message' => 'Data gagal ditambahkan'
    //         ], RestController::HTTP_BAD_REQUEST);
    //     }
    // }
    public function create_post()
    {
        $data = [
            'nama_tim' => $this->post('nama_tim'),
            'posisi' => $this->post('posisi'),
            'no_telp' => $this->post('no_telp'),
            'email' => $this->post('email'),
            'alamat' => $this->post('alamat'),
            'id_supplier' => $_COOKIE['id_pengguna'],
        ];

        $token = random_string('alnum', 25);

        $data_pengguna = [
            'nama' => $this->post('nama_tim'),
            'email' => $this->post('email'),
            'alamat' => $this->post('alamat'),
            'no_telp' => $this->post('no_telp'),
            'kategori' => UserCategory::MARKETING,
            'token' => $token,
            'is_active' => 1,
            'tgl_update' => date('Y-m-d H:i:s'),
            'status' => UserType::PAID,
        ];

        // Menyimpan data pengguna baru dan mendapatkan id_pengguna yang baru saja dibuat
        $id_pengguna_baru = $this->Supplier_api->insertTimToPengguna($data_pengguna);

        if ($id_pengguna_baru) {
            // Menambahkan id_pengguna baru ke dalam data tim marketing
            $data['id_pengguna'] = $id_pengguna_baru;

            if ($this->Supplier_api->createTimMarketing($data) > 0) {
                $this->response([
                    'status' => true,
                    'message' => 'Data berhasil ditambahkan'
                ], RestController::HTTP_CREATED);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data gagal ditambahkan'
                ], RestController::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal membuat pengguna baru'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    // public function sendEmail_post(){

    //     $this->load->library('email');

    //     $id = $this->input->post('id');
    //     // Mengambil data tim dari model berdasarkan ID
    //     $team_member = $this->Supplier_api->getTimMarketingById($id);

    //     if ($team_member) {
    //         $to = $team_member['email'];
    //         $subject = 'Undangan Follow Up Perusahaan';
    //         $message = 'Halo ' . $team_member['nama_tim'] . ', kamu diundang oleh [Nama Perusahaan] untuk menfollow up perusahaan [1,2,3,4]. Silakan login ke tenderplus.id dengan email ' . $team_member['email'] . '. Mohon setelah berhasil masuk ke dalam akun tenderplus.id Anda segera ganti password Anda dan lengkapi profil Anda. Terima kasih.';

    //         // Konfigurasi email
    //         $config['protocol'] = 'smtp';
    //         $config['smtp_host'] = 'smtp.hostinger.com';
    //         $config['smtp_port'] = '465';
    //         $config['smtp_crypto'] = 'ssl';
    //         $config['smtp_user'] = 'm.iqbal.arjunanda@pandakong88.com'; // Ganti dengan email Anda
    //         $config['smtp_pass'] = 'Arjunanda_271'; // Ganti dengan password email Anda
    //         $config['mailtype'] = 'html';
    //         $config['charset'] = 'iso-8859-1';
    //         $config['wordwrap'] = TRUE;

    //         $this->email->initialize($config);

    //         $this->email->from('m.iqbal.arjunanda@pandakong88.com', 'Tenderplus.id');  // Ganti dengan email dan nama perusahaan Anda
    //         $this->email->to($to);
    //         $this->email->subject($subject);
    //         $this->email->message($message);

    //         // Kirim email
    //         if ($this->email->send()) {
    //             echo json_encode(['status' => 'success', 'message' => 'Email undangan telah berhasil dikirim.']);
    //         } else {
    //             echo json_encode(['status' => 'error', 'message' => 'Gagal mengirim email undangan.']);
    //         }
    //     } else {
    //         echo json_encode(['status' => 'error', 'message' => 'Tim marketing tidak ditemukan.']);
    //     }

    // }
    public function beforSendEmail_get()
    {
        $id = $this->input->get('id');

        $daftar_perusahaan = $this->Supplier_api->getDaftarPerusahaan($id); // Sesuaikan dengan method Anda

        $team_member = $this->Supplier_api->getTimMarketingById($id);

        $response = [
            'teamName' => $team_member['nama_tim'],
            'leads' => $daftar_perusahaan,
        ];
        echo json_encode($response);
    }

    public function sendEmail_post()
    {

        $this->load->library('email');
        $this->load->helper('url');

        $id = $this->input->post('id');
        // Mengambil data tim dari model berdasarkan ID
        $team_member = $this->Supplier_api->getTimMarketingById($id);

        if ($team_member) {
            $to = $team_member['email'];

            $password = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
            $password = substr($password, 0, 8);

            // Mengambil nama perusahaan dari tabel pengguna
            $nama_perusahaan = $this->Pengguna_model->getPenggunaById(350); // Sesuaikan dengan method Anda

            // Mengambil daftar perusahaan yang akan di-follow up
            $daftar_perusahaan = $this->Supplier_api->getDaftarPerusahaan($id); // Sesuaikan dengan method Anda

            $subject = 'Undangan Follow Up Perusahaan';

            // Load view dan masukkan data yang diperlukan
            $message = $this->load->view('dashboard/supplier/email_udangan_marketing', [
                'nama_tim' => $team_member['nama_tim'],
                'email' => $team_member['email'],
                'password' => $password,
                'nama_perusahaan' => $nama_perusahaan['nama'],
                'daftar_perusahaan' => $daftar_perusahaan
            ], TRUE); // TRUE untuk mengembalikan view sebagai string

            // Konfigurasi email
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.hostinger.com';
            $config['smtp_port'] = '465';
            $config['smtp_crypto'] = 'ssl';
            $config['smtp_user'] = 'm.iqbal.arjunanda@pandakong88.com'; // Ganti dengan email Anda
            $config['smtp_pass'] = 'Arjunanda_271'; // Ganti dengan password email Anda
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);

            $this->email->from('m.iqbal.arjunanda@pandakong88.com', 'Tenderplus.id');  // Ganti dengan email dan nama perusahaan Anda
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);

            // Kirim email
            if ($this->email->send()) {
                // Dapatkan id_pengguna dari tim_marketing
                $id_pengguna = $this->Supplier_api->getPenggunaIdByTimId($id);

                // Perbarui password pengguna
                if ($id_pengguna) {
                    $this->Pengguna_model->updatePassword($id_pengguna, $password);
                }

                echo json_encode(['status' => 'success', 'message' => 'Email undangan telah berhasil dikirim.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Gagal mengirim email undangan.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Tim marketing tidak ditemukan.']);
        }
    }


    public function deleteTim_delete($id)
    {
        // $id = $this->get('id_tim');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            if ($this->Supplier_api->deleteTimMarketing($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Data berhasil dihapus'
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ], RestController::HTTP_NOT_FOUND);
            }
        }
    }

    public function editTimMarketing_post($id)
    {
        // $id = $this->post('id_tim');
        $data = [
            'nama_tim' => $this->post('nama_tim'),
            'posisi' => $this->post('posisi'),
            'no_telp' => $this->post('no_telp'),
            'email' => $this->post('email'),
            'alamat' => $this->post('alamat'),
        ];

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else if ($this->Supplier_api->updateTimMarketing($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal diubah'
            ], RestController::HTTP_BAD_REQUEST);
        }
        // if ($this->Supplier_api->updateTimMarketing($data, $id) > 0) {
        //     $this->response([
        //         'status' => true,
        //         'message' => 'Data berhasil diubah'
        //     ], RestController::HTTP_OK);
        // } else {
        //     $this->response([
        //         'status' => false,
        //         'message' => 'Data gagal diubah'
        //     ], RestController::HTTP_BAD_REQUEST);
        // }
    }

    // Function Plotting
    public function insertIntoPlot_post()
    {
        $data = [
            'id_tim' => $this->post('id_tim'),
            'id_pemenang' => $this->post('id_pemenang'),
        ];

        if ($this->Supplier_api->insertPlotting($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil ditambahkan'
            ], RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal ditambahkan'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function updatePlotting_post($id)
    {
        // $id = $this->post('id_plot');
        $data = [
            'id_tim' => $this->post('id_tim'),
            'id_pemenang' => $this->post('id_pemenang'),
        ];

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else if ($this->Supplier_api->updatePlotting($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal diubah'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function deletePlotting_delete($id)
    {
        // $id = $this->get('id_plot');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            if ($this->Supplier_api->deletePlotting($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Data berhasil dihapus'
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ], RestController::HTTP_NOT_FOUND);
            }
        }
    }

    public function getProfile_get($id)
    {
        // $id = $this->get('id_lead');
        $data = $this->Supplier_api->getProfile($id);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function insertProfile_post($id)
    {
        // $id = $this->post('id_lead');
        $data = [
            'profil' => $this->post('profil')
        ];

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else if ($this->Supplier_api->insertProfile($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal diubah'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function getContact_get($id)
    {
        // $id = $this->get('id_lead');
        $data = $this->Supplier_api->getContact($id);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function getContactById_get($id)
    {
        // $id = $this->get('id_kontak');
        $data = $this->Supplier_api->getContactById($id);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function insertContact_post()
    {
        $data = [
            'id_lead' => $this->post('id_lead'),
            'nama' => $this->post('nama'),
            'posisi' => $this->post('posisi'),
            'no_telp' => $this->post('no_telp'),
            'email' => $this->post('email')
        ];

        if ($this->Supplier_api->insertContact($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil ditambahkan'
            ], RestController::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal ditambahkan'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function updateContact_post($id)
    {
        // $id = $this->post('id_kontak');
        $data = [
            // 'id_lead' => $this->post('id_lead'),
            'nama' => $this->post('nama'),
            'posisi' => $this->post('posisi'),
            'no_telp' => $this->post('no_telp'),
            'email' => $this->post('email')
        ];

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else if ($this->Supplier_api->updateContact($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal diubah'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function deleteContact_delete($id)
    {
        // $id = $this->get('id_kontak');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            if ($this->Supplier_api->deleteContact($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Data berhasil dihapus'
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ], RestController::HTTP_NOT_FOUND);
            }
        }
    }

    //Get pemenang by npwp
    public function getPemenangByNPWP_get($npwp)
    {
        $data = $this->Supplier_api->getPemenangByNPWP($npwp);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
    //Get pemenang filter
    public function pemenangFiltered_post()
    {
        $npwp               = $this->input->post('npwp');
        $lokasi             = $this->input->post('lokasi');
        $jenis              = $this->input->post('jenis_pengadaan');
        $penawaran_awal     = $this->input->post('nilai_penawaran_awal');
        $penawaran_akhir    = $this->input->post('nilai_penawaran_akhir');
        $tahun              = $this->input->post('tahun');
        $data = $this->Supplier_api->getPemenangFilter($npwp, $lokasi, $jenis, $penawaran_awal, $penawaran_akhir, $tahun);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_BAD_REQUEST);
            // ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function getLeads_get()
    {
        $id_pengguna = $this->input->get('id_pengguna');
        $page_size = $_GET['pageSize'];
        $page_number = ($_GET['pageNumber'] - 1) * $page_size;
        $response = $this->Supplier_api->getDataLeads($id_pengguna, $page_size, $page_number)->result();

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();

        exit;
    }
    public function getDataLeadCRM_get()
    {
        $id_pengguna = $this->input->get('id_pengguna');
        $page_size = $_GET['pageSize'];
        $page_number = ($_GET['pageNumber'] - 1) * $page_size;
        $response = $this->Supplier_api->getDataLeadCRM($id_pengguna, $page_size, $page_number)->result();
        // foreach ($response as &$lead) {
        //     // Assuming 'jadwal' is the key for the date field in your data
        //     $lead->jadwal = date('Y-m-d H:i:s', strtotime($this->input->post('jadwal')));
        // }
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();

        exit;
    }
    // public function getCRMLeads_get()
    // {
    //     $id_pengguna = $this->input->get('id_pengguna');
    //     $response = $this->Supplier_api->getCRMLeads($id_pengguna)->result();
    //     $response['jumlah'] = $this->Supplier_api->countCRMLeads($id_pengguna)->row('jumlah');

    //     $this->output
    //         ->set_status_header(200)
    //         ->set_content_type('application/json')
    //         ->set_output(json_encode($response, JSON_PRETTY_PRINT))
    //         ->_display();

    //     exit;
    // }
    // dicoment oleh msib 6
    public function getCRMLeads_get()
    {
        $id_pengguna = $this->input->get('id_pengguna');
        $response = $this->Supplier_api->getCRMLeads($id_pengguna)->result();
        $response['jumlah'] = $this->Supplier_api->countCRMLeads($id_pengguna)->row('jumlah');

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT))
            ->_display();

        exit;
    }

    public function getCountLeadNull_get()
    {
        $id_pengguna = $this->input->get('id_pengguna');
        $data = $this->Supplier_api->getCountDataLeads($id_pengguna);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function getTotalLeads_get()
    {
        $id_pengguna = $this->input->get('id_pengguna');
        $data = $this->Supplier_api->getTotalDataLeads($id_pengguna);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
    public function getTotalLeadTIM_get()
    {
        $id_pengguna = $this->input->get('id_pengguna');
        $data = $this->Supplier_api->getTotalLeadTim($id_pengguna);

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], RestController::HTTP_NOT_FOUND);
        }
    }
    public function getLeadRiwayat_get()
    {
        $id_lead = $this->input->get('id_lead');
        $data = $this->Supplier_api->getRiwayatByIdLead($id_lead); // Implementasikan metode ini di model
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
    public function tambahRiwayat_post($id_lead)
    {
        $data = json_decode($this->input->raw_input_stream, true);

        // Add additional data processing if needed
        $dataToInsert = [
            'id_tim' => $data['id_tim'],
            'status' => $data['status'],
            'jadwal' => $data['jadwal'],
            'waktu' => $data['waktu'],
            'catatan' => $data['catatan']
        ];

        // Insert the data and get the insert ID
        $insertId = $this->Supplier_api->tambahRiwayat($id_lead, $dataToInsert);

        // Return the response
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['insert_id' => $insertId]));
    }
    public function getPlotTimByIdLead_get()
    {
        $id_lead = $this->input->get('id_lead');
        $data = $this->Supplier_api->getPlotTimByIdLead($id_lead); // Implementasikan metode ini di model
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
    public function updateDataLeadCRM_post($id)
    {
        $data = json_decode($this->input->raw_input_stream, true); // Decode the JSON input

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Berikan id'
            ], RestController::HTTP_BAD_REQUEST);
        } else if ($this->Supplier_api->updateDataLeadCRM($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data gagal diubah'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function getTotalTimMarketingById_get()
    {
        $id_supplier = $this->input->get('id_pengguna');
        $data = $this->Supplier_api->getTotalTimMarketingById($id_supplier);

        echo json_encode($data);
    }

    public function getTimMarketingByIdSup_get()
    {
        $id_pengguna = $this->input->get('id_pengguna');
        $total_tim = $this->input->get('total_tim');
        $page_size = $_GET['pageSize'];
        $page_number = ($_GET['pageNumber']);
        $data = $this->Supplier_api->getTimMarketingPagination($id_pengguna, $page_number, $page_size);

        echo json_encode($data);
        // $this->output
        //     ->set_status_header(200)
        //     ->set_content_type('application/json')
        //     ->set_output(json_encode($data, JSON_PRETTY_PRINT))
        //     ->_display();

        // exit;
    }
}
