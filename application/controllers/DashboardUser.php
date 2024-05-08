<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Exception\ClientException;
use App\components\traits\ClientApi;
use App\components\traits\User;
use App\components\UserCategory;
use App\components\UserType;

class DashboardUser extends CI_Controller
{
    use ClientApi;
    use User;

    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('user_data') && $this->session->userdata('user_data')['kategori'] != 2) {
        if (!get_cookie('id_pengguna')) {
            redirect('login');
        }

        $this->load->model('Pengguna_model');
        $this->load->model('Peserta_model');
        $this->load->model('PesertaTender_model');
        $this->load->model('Api/PesertaTenderModel');
        $this->load->model('api/Peserta_model', 'ApiPesertaModel');
        $this->init();
    }

    public function index()
    {
        $id_pengguna = get_cookie('id_pengguna');
        if ($id_pengguna) {
            $status = $this->Pengguna_model->getStatusPengguna($id_pengguna)->row();
            if ($status->status == '0') $this->listTenderPage();
            else $this->monitorAndStatTenderPage();

            // $this->listTenderPage();
        } else redirect('login');
    }

    public function cekSesi(){
        // Ambil semua data sesi
        $allSessions = $this->session->all_userdata();

        // Tampilkan semua data sesi
        print_r($allSessions);

    }

    public function tumbal(){
        $sessionData = $this->session->user_data;
        $pengguna = $this->Pengguna_model->getPenggunaById((int) $sessionData['id_pengguna'])['data'];
        $dataPesertaTender = $this->PesertaTenderModel->getdataPesertaTender(array('npwp' => $pengguna['npwp'], 'id_lpse' => "", 'tahun' => ''));
        echo json_encode($dataPesertaTender);

        // echo "asalam";

    }

    // Dashboard untuk user premium
    public function monitorAndStatTenderPage()
    {
        $this->load->library('session');
        $this->load->library('user');
        $this->load->model('api/Peserta_model');
        $this->load->model('api/PesertaTenderModel');
        $this->load->model('scrapping/Pengguna_model');
        $this->load->model('scrapping/Lpse_model');
        $this->load->model('api/Peserta_model', 'ApiPesertaModel');

        $sessionData = $this->session->user_data;

        $pengguna = $this->Pengguna_model->getPenggunaById((int) $sessionData['id_pengguna'])['data'];
        // var_dump($pengguna);
        $npwpComplete = !empty($pengguna['npwp']);
        // var_dump($npwpComplete);


        $notif = null;
        try {
            $tenderResp = $this->client->request('GET', 'tender/notif', $this->client->getConfig('headers'));
            if ($tenderResp->getStatusCode() == 200) {
                $notif = json_decode($tenderResp->getBody()->getContents(), true);
                $notif = $notif['data'] ?? [];
            } else {
                $notif = null;
            }
        } catch (ClientException $e) {
            // die;
            $notif = null;
        }

        //get LPSE
        // $lpse = $this->client->request('GET', 'lpse', $this->client->getConfig('headers'));
        $lpse = $this->PesertaTenderModel->get_lpse_data();


        // $peserta = $this->Peserta_model->getPesertaNpwp($pengguna['npwp']);
        

        $pesertaTenderIkut =[];


        try {
            // $pesertaResp = $this->client->request('GET', 'peserta/pesertaIkutTender', $this->client->getConfig('headers'));
            $pesertaResp = $this->ApiPesertaModel->getPesertaIkutTender($pengguna['npwp']);
            if ($pesertaResp) {
                // $pesertaTenderIkut = json_decode($pesertaResp->getBody()->getContents(), true);
                $pesertaTenderIkut = $pesertaResp ?? [];
            } else {
                $pesertaTenderIkut = null;
            }
        } catch (ClientException $e) {
            $pesertaTenderIkut = null;
        }

       
        $data = [
            'title' => 'Dashboard',
            'lpse' => $lpse,
            'pengguna' => $pengguna,
            // 'peserta' => $peserta['data'],
            'namaPerusahaan' => $pengguna['nama'],
            'npwp' => $npwpComplete ? $pengguna['npwp'] : null,
            'notif' => $notif,
            'userId' => (int) $sessionData['id_pengguna'],
            'userStatus' => (int) $sessionData['status'],
            'npwpComplete' => $npwpComplete,
            'pesertaTenderIkut' => $pesertaTenderIkut
        ];

        

        $this->load->view('templates/header', $data);
        $this->load->view('profile_pengguna/templates/navbar', $data);
        $this->load->view('dashboard/user/index',$data);
        // $this->load->view('dashboard/templates/navbar');
        $this->load->view('templates/footer');
    }

    // Dashboard untuk user free
    public function listTenderPage()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        var_dump($data);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('profile_pengguna/templates/navbar');
        $this->load->view('dashboard/user/list-newest-tender');
        $this->load->view('templates/footer');
    }

    protected function isNpwpValid(string $npwp): bool
    {
        $re = '/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\.[0-9]{1}-[0-9]{3}\.[0-9]{3}$/m';
        preg_match_all($re, $npwp, $matches, PREG_SET_ORDER, 0);
        return count($matches) > 0;
    }

    public function get_Peserta_Paket() {
        // $npwp = '01.758.829.4-203.000';
        // $npwp = '03.312.959.4-008.000';
        // $lpse = '';
        // $tahun = '2024';

        // GET NPWP
        $userId = $this->session->user_data['id_pengguna'];
        $query = $this->db->select('npwp')->from('pengguna')->where('id_pengguna', $userId)->get();
        $row = $query->row_array();

        if (count($row) > 0 && isset($row['npwp'])) {
            $npwp = $row['npwp'];
        } else {
            $npwp = '0';
        }

        $tahun = $this->input->post('tahun');
        $lpse = $this->input->post('lpse');

        // Mendapatkan data paket dari model
        $paket_data = $this->PesertaTenderModel->get_Peserta_Paket($npwp, $lpse, $tahun);

        // Inisialisasi penghitung untuk setiap rentang
        $range1 = array_fill(0, 12, 0); // Rentang 0 hingga 500.000.000
        $range2 = array_fill(0, 12, 0); // Rentang 500.000.000 hingga 1.000.000.000
        $range3 = array_fill(0, 12, 0); // Rentang 1.000.000.000 hingga 10.000.000.000
        $range4 = array_fill(0, 12, 0); // Rentang 10.000.000.000 hingga 100.000.000.000
        $range5 = array_fill(0, 12, 0); // Rentang >= 100.000.000.000

        // Iterasi melalui data
        foreach ($paket_data as $paket) {
            $hps = $paket->nilai_hps_paket; // Mengakses properti objek menggunakan panah (->)

            // Tentukan rentang
            if ($hps >= 100000000000) {
                $range5[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++; // Mengakses properti objek menggunakan panah (->)
            } elseif ($hps >= 10000000000) {
                $range4[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++; // Mengakses properti objek menggunakan panah (->)
            } elseif ($hps >= 1000000000) {
                $range3[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++; // Mengakses properti objek menggunakan panah (->)
            } elseif ($hps >= 500000000) {
                $range2[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++; // Mengakses properti objek menggunakan panah (->)
            } else {
                $range1[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++; // Mengakses properti objek menggunakan panah (->)
            }
        }
        // Gabungkan hasil ke dalam sebuah array
        $output = [
            'range1' => $range1,
            'range2' => $range2,
            'range3' => $range3,
            'range4' => $range4,
            'range5' => $range5,
        ];


        // Outputkan hasil
        echo json_encode($output);

        // // Inisialisasi total untuk setiap rentang
        // $total_range1 = 0;
        // $total_range2 = 0;
        // $total_range3 = 0;
        // $total_range4 = 0;
        // $total_range5 = 0;

        // // Iterasi melalui data
        // foreach ($paket_data as $paket) {
        //     $hps = $paket->nilai_hps_paket;

        //     // Tentukan rentang
        //     if ($hps >= 100000000000) {
        //         $range5[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++;
        //         $total_range5++;
        //     } elseif ($hps >= 10000000000) {
        //         $range4[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++;
        //         $total_range4++;
        //     } elseif ($hps >= 1000000000) {
        //         $range3[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++;
        //         $total_range3++;
        //     } elseif ($hps >= 500000000) {
        //         $range2[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++;
        //         $total_range2++;
        //     } else {
        //         $range1[date('m', strtotime($paket->tanggal_pembuatan)) - 1]++;
        //         $total_range1++;
        //     }
        // }

        // // Gabungkan hasil total ke dalam sebuah array
        // $total_output = [
        //     'total_range1' => $total_range1,
        //     'total_range2' => $total_range2,
        //     'total_range3' => $total_range3,
        //     'total_range4' => $total_range4,
        //     'total_range5' => $total_range5,
        // ];

        // // Outputkan hasil total
        // echo json_encode($total_output);



    }

    public function get_menang_kalah_ikut(){
        // $npwp = '03.312.959.4-008.000';
        // // $npwp = '01.758.829.4-203.000';
        // $lpse = '';
        // $tahun = '2024';
        
        // GET NPWP
        $userId = $this->session->user_data['id_pengguna'];
        $query = $this->db->select('npwp')->from('pengguna')->where('id_pengguna', $userId)->get();
        $row = $query->row_array();

        if (count($row) > 0 && isset($row['npwp'])) {
            $npwp = $row['npwp'];
        } else {
            $npwp = '0';
        }

        $tahun = $this->input->post('tahun');
        $lpse = $this->input->post('lpse');

        // Mendapatkan data paket dari model
        $data = $this->PesertaTenderModel->get_menang_kalah_ikut($npwp,$lpse,$tahun);
        // echo json_encode($data);
        // Inisialisasi array untuk menyimpan jumlah status peserta dan total tender
        $jumlah_status_peserta = [
            "menang" => 0,
            "sedang-diikuti" => 0,
            "kalah" => 0,
            "total" => 0
        ];

        // Memastikan $data adalah array sebelum menghitung total tender
        if (is_array($data) || is_object($data)) {
            // Menghitung total tender
            $jumlah_status_peserta["total"] = count($data);

            // Menghitung jumlah status peserta
            foreach ($data as $item) {
                switch ($item->status_peserta) { // Mengakses properti sebagai objek
                    case "menang":
                        $jumlah_status_peserta["menang"]++;
                        break;
                    case "sedang-diikuti":
                        $jumlah_status_peserta["sedang-diikuti"]++;
                        break;
                    case "kalah":
                        $jumlah_status_peserta["kalah"]++;
                        break;
                }
            }
        } else {
            // Handle jika tidak ada hasil yang ditemukan dari database
            // Set semua jumlah status peserta menjadi 0
            $jumlah_status_peserta = [
                "menang" => 0,
                "sedang-diikuti" => 0,
                "kalah" => 0,
                "total" => 0
            ];
        }
        // Inisialisasi array untuk jumlah menang dan kalah untuk setiap bulan
        $menang_per_bulan = array_fill(0, 12, 0); // Array untuk jumlah menang
        $kalah_per_bulan = array_fill(0, 12, 0); // Array untuk jumlah kalah

        // Memproses data untuk mengisi array jumlah menang dan kalah per bulan
        foreach ($data as $item) {
            // Mendapatkan bulan dari tanggal pembuatan paket
            $bulan = date('n', strtotime($item->tanggal_pembuatan));

            // Menghitung jumlah menang dan kalah per bulan
            switch ($item->status_peserta) {
                case "menang":
                    $menang_per_bulan[$bulan - 1]++; // Mengurangi 1 karena index dimulai dari 0
                    break;
                case "kalah":
                    $kalah_per_bulan[$bulan - 1]++; // Mengurangi 1 karena index dimulai dari 0
                    break;
            }
        }

        // Mengirimkan data JSON sebagai respons
        $json_data = json_encode(array(
            'jumlah_status_peserta' => $jumlah_status_peserta,
            'riwayat_menang_kalah' => array('menang' => $menang_per_bulan, 'kalah' => $kalah_per_bulan)
        ));
        
        // Tampilkan data JSON sebagai respons
        $this->output->set_content_type('application/json')->set_output($json_data);
        // Memuat view
        // $this->load->view('tumbal', array('json_data' => $json_data));

    }

    public function cek_npwp(){
        $userId = $this->session->user_data['id_pengguna'];
        $query = $this->db->select('npwp')->from('pengguna')->where('id_pengguna', $userId)->get();
        $row = $query->row_array();

        if (count($row) > 0 && isset($row['npwp'])) {
            $npwp = $row['npwp'];
        } else {
            $npwp = '0';
        }

            echo $npwp;
    }

    public function show_table(){
        // $npwp = '03.312.959.4-008.000'; // Contoh NPWP
        // $tahun = '2023'; // Ambil nilai tahun dari URL
        // $lpse = ''; // Ambil nilai LPSE dari URL

        // Ambil nomor halaman dari permintaan Ajax, atau set ke 0 jika tidak ada
        $page = $this->input->get('page') ? $this->input->get('page') : 1;
        $lpse = $this->input->get('lpse') ;
        $tahun = $this->input->get('tahun') ;
        // GET NPWP
        $userId = $this->session->user_data['id_pengguna'];
        $query = $this->db->select('npwp')->from('pengguna')->where('id_pengguna', $userId)->get();
        $row = $query->row_array();

        if (count($row) > 0 && isset($row['npwp'])) {
            $npwp = $row['npwp'];
        } else {
            $npwp = '0';
        }

        // Set konfigurasi pagination
        $config['base_url'] = base_url('DashboardUser/show_table');
        $config['total_rows'] =  $this->PesertaTenderModel->countFilteredRows($npwp,$tahun,$lpse); // Hitung total baris
        $config['per_page'] = 10; // Jumlah data per halaman
        // $config['uri_segment'] = 3; // Segment URL yang digunakan untuk menentukan nomor halaman
        $config['use_page_numbers'] = TRUE; // Gunakan nomor halaman bukan offset
        $config['attributes'] = array('class' => 'pagination-link'); // Attribut tag <a> untuk styling pagination
        $config['num_links'] = 2; // Jumlah link numerik yang ditampilkan sebelum dan sesudah halaman saat ini

        // echo json_encode($config);
        // Initialize pagination
        $this->pagination->initialize($config);

        // Hitung jumlah total halaman
        $total_pages = ceil($config['total_rows'] / $config['per_page']);

        $offset = ($page - 1) * $config['per_page'];
        // $offset = 0;
        

        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; // Ambil nomor halaman dari URL jika ada, jika tidak set ke 0
        $data['pagination_links'] = $this->pagination->create_links(); // Buat link pagination
       

        // Ambil data untuk halaman saat ini menggunakan model PaginationModel
        $data['results'] = $this->PesertaTenderModel->getPaginatedData($npwp, $tahun, $lpse, $config['per_page'], $offset);

        // var_dump($data['paket_list']);

        // Load view dengan data hasil query dan link pagination
        // $this->load->view('pagination', $data);
       // Menggabungkan hasil data dan link pagination ke dalam satu array
        $response = array(
            'results' => $data['results'],
            'pagination_links' => $data['pagination_links'],
            'lpse' => $lpse,
            'tahun'=>$tahun,
            'total_pages'=>$total_pages,
            'curren_page'=>$page,
        );

        // Keluarkan sebagai JSON
        echo json_encode($response);
    }
    public function update_table(){
        // $npwp = '03.312.959.4-008.000'; // Contoh NPWP
        // $tahun = '2023'; // Ambil nilai tahun dari URL
        // $lpse = ''; // Ambil nilai LPSE dari URL

        // Ambil nomor halaman dari permintaan Ajax, atau set ke 0 jika tidak ada
        $page = $this->input->get('page') ? $this->input->get('page') : 1;
        $lpse = $this->input->get('lpse') ;
        $tahun = $this->input->get('tahun') ;
        // GET NPWP
        $userId = $this->session->user_data['id_pengguna'];
        $query = $this->db->select('npwp')->from('pengguna')->where('id_pengguna', $userId)->get();
        $row = $query->row_array();

        if (count($row) > 0 && isset($row['npwp'])) {
            $npwp = $row['npwp'];
        } else {
            $npwp = '0';
        }
        // Ambil nilai filter status peserta dari checkbox
        $filterStatusPeserta = array(
            'sedang_diikuti' => $this->input->get('sedang_diikuti') === 'true',
            'menang' => $this->input->get('menang') === 'true',
            'kalah' => $this->input->get('kalah') === 'true'
        );


        // Set konfigurasi pagination
        $config['base_url'] = base_url('DashboardUser/show_table');
        $config['total_rows'] =  $this->PesertaTenderModel->countFilteredUpdatesRows($npwp,$tahun,$lpse,$filterStatusPeserta); // Hitung total baris
        $config['per_page'] = 10; // Jumlah data per halaman
        // $config['uri_segment'] = 3; // Segment URL yang digunakan untuk menentukan nomor halaman
        $config['use_page_numbers'] = TRUE; // Gunakan nomor halaman bukan offset
        $config['attributes'] = array('class' => 'pagination-link'); // Attribut tag <a> untuk styling pagination
        $config['num_links'] = 1; // Jumlah link numerik yang ditampilkan sebelum dan sesudah halaman saat ini

        // echo json_encode($config);
        // Initialize pagination
        $this->pagination->initialize($config);
        
        // echo json_encode($filterStatusPeserta);


        // Hitung jumlah total halaman
        $total_pages = ceil($config['total_rows'] / $config['per_page']);
        $offset = ($page - 1) * $config['per_page'];
        

        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; // Ambil nomor halaman dari URL jika ada, jika tidak set ke 0
        $data['pagination_links'] = $this->pagination->create_links(); // Buat link pagination
       

        // Ambil data untuk halaman saat ini menggunakan model PaginationModel
        $data['results'] = $this->PesertaTenderModel->updatePaginatedData($npwp, $tahun, $lpse, $config['per_page'], $offset,$filterStatusPeserta);

        // var_dump($data['paket_list']);

        // Load view dengan data hasil query dan link pagination
        // $this->load->view('pagination', $data);
       // Menggabungkan hasil data dan link pagination ke dalam satu array
        $response = array(
            'results' => $data['results'],
            'pagination_links' => $data['pagination_links'],
            'lpse' => $lpse,
            'tahun'=>$tahun,
            'sedang_diikuti'=>$filterStatusPeserta['sedang_diikuti'],
            'menang'=>$filterStatusPeserta['menang'],
            'kalah'=>$filterStatusPeserta['kalah'],
            'total_pages'=>$total_pages,
        );

        // Keluarkan sebagai JSON
        echo json_encode($response);
    }

    public function coba_tabel(){
        $npwp = '03.312.959.4-008.000'; // Contoh NPWP
        $tahun = '2023'; // Ambil nilai tahun dari URL
        $lpse = ''; // Ambil nilai LPSE dari URL
        // Set konfigurasi pagination
        $config['base_url'] = base_url('DashboardUser/coba_tabel');
        $config['total_rows'] = $this->PesertaTenderModel->countFilteredRows($npwp,$tahun,$lpse); // Hitung total baris dari model
        $config['per_page'] = 10; // Jumlah data per halaman
        $config['use_page_numbers'] = TRUE; // Gunakan nomor halaman bukan offset
        // $config['attributes'] = array('class' => 'pagination-link'); // Attribut tag <a> untuk styling pagination
        $config['num_links'] = 1; // Jumlah link numerik yang ditampilkan sebelum dan sesudah halaman saat ini
        
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = '&laquo;';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '&raquo;';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&rsaquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&lsaquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';


        $this->pagination->initialize($config);

        // Ambil nilai filter status peserta dari checkbox
        $filterStatusPeserta = array(
            'sedang_diikuti' => true,
            'menang' => true,
            'kalah' => true
        );
        $data['start']= $this->uri->segment(3);
        $data['pagination_links'] = $this->pagination->create_links(); // Buat link pagination
        
        // $data['pagination_links'] = $this->pagination->create_links(); // Buat link pagination
        $data['results'] = $this->PesertaTenderModel->getPaginatedData($npwp, $tahun, $lpse, $config['per_page'], $data['start'],);

        // $this->load->view('pagination', $data);

        echo json_encode($data);
        

      
    }



    public function chart()
    {
        $data = $this->input->post();
        // $data =1;

        if ($data != null) {
            $this->load->library('session');
            $this->load->library('user');
            $this->load->model('api/Peserta_model');
            $this->load->model('api/PesertaTenderModel');
            $this->load->model('scrapping/Pengguna_model');
            $this->load->model('scrapping/Lpse_model');

            $sessionData = $this->session->user_data;
            $pengguna = $this->Pengguna_model->getPenggunaById((int) $sessionData['id_pengguna'])['data'];

            // var_dump($dataIkut, $dataPesertaTender);
            $dataPesertaTender = $this->PesertaTenderModel->getDataTenderFilter($pengguna['npwp'], $data['cariKLPD'], $data['cariTahun']);
            // echo json_encode($dataPesertaTender);
            if (empty($dataPesertaTender)) { // Periksa apakah $dataPesertaTender kosong
               // Jika $dataPesertaTender kosong, atur nilai default untuk dataChart
                $timeSeriesUser = array_fill(0, 12, 0);
                $range1 = array_fill(0, 12, 0);
                $range2 = array_fill(0, 12, 0);
                $range3 = array_fill(0, 12, 0);
                $range4 = array_fill(0, 12, 0);
                $range5 = array_fill(0, 12, 0);
                $akumulasi = array_fill(0, 4, 0);

                // Tetapkan nilai default untuk $dataChart
                $dataChart['time_series'] = $timeSeriesUser;
                $dataChart['range'][0] = $range1;
                $dataChart['range'][1] = $range2;
                $dataChart['range'][2] = $range3;
                $dataChart['range'][3] = $range4;
                $dataChart['range'][4] = $range5;
                $dataChart['range']['range1'] = array_sum($range1);
                $dataChart['range']['range2'] = array_sum($range2);
                $dataChart['range']['range3'] = array_sum($range3);
                $dataChart['range']['range4'] = array_sum($range4);
                $dataChart['range']['range5'] = array_sum($range5);
                $dataChart['akumulasi'] = $akumulasi;
                $dataChart['win_lose'] = [];
                $dataChart['join'] = [];
                $dataChart['all'] = [];
                

                // echo json_encode($dataChart);
                $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataChart, JSON_PRETTY_PRINT))                        ->_display();

                exit;
            }

            $timeSeriesUser = array_fill(0, 12, 0);
            $dataIkut = [];
            $dataMenang = [];
            $dataMenangKalah = [];
            $dataSemua = [];
            $totalMenang = 0;
            $totalKalah = 0;
            $totalIkut = 0;

            foreach ($dataPesertaTender as $key => $value) {
                // Lewati entri yang memiliki nilai null
                if ($value['nama_tender'] === null || $value['nilai_hps'] === null || $value['month'] === null || $value['year'] === null || $value['status_peserta'] === null) {
                    continue;
                }

                if ($value['status_peserta'] == 'sedang-diikuti') {
                array_push($dataIkut, $value);
                } else {
                    $timeSeriesUser[((int)$value['month']) -1 ]++;
                    array_push($dataMenangKalah, $value);
                    if ($value['status_peserta'] == 'menang') {
                        array_push($dataMenang, $value);
                    }
                }

                // Switch counting 
                switch ($value['status_peserta']) {
                    case 'menang':
                        $totalMenang++;
                        break;
                    case 'kalah':
                        $totalKalah++;
                        break;
                    case 'sedang-diikuti':
                        $totalIkut++;
                        break;
                    default:
                        break;
                }
                array_push($dataSemua, $value);
            }


           
            // time sereies chart Tender
            $akumulasi[0] = $totalMenang;
            $akumulasi[1] = $totalKalah;
            $akumulasi[2] = $totalIkut;
            $akumulasi[3] = ($totalKalah + $totalMenang + $totalIkut);
           

            // hps chart ikut tender
            for ($i = 0; $i < 12; $i++) {
                $hps1 = 0;
                $hps2 = 0;
                $hps3 = 0;
                $hps4 = 0;
                $hps5 = 0;
                foreach ($dataPesertaTender as $range) {
                    if ($range['month'] == $i + 1) {

                        switch (true) {
                            case $range['nilai_hps'] >= 100000000000:
                                $hps5++;
                                break;
                            case $range['nilai_hps'] >= 10000000000:
                                $hps4++;
                                break;
                            case $range['nilai_hps'] >= 1000000000:
                                $hps3++;
                                break;
                            case $range['nilai_hps'] >= 500000000:
                                $hps2++;
                                break;
                            default:
                                $hps1++;
                                break;
                        }
                    }
                }

                $range1[] = $hps1;
                $range2[] = $hps2;
                $range3[] = $hps3;
                $range4[] = $hps4;
                $range5[] = $hps5;
            }

            $range[0] = $range1;
            $range[1] = $range2;
            $range[2] = $range3;
            $range[3] = $range4;
            $range[4] = $range5;

            $range['range1'] = array_sum($range1);
            $range['range2'] = array_sum($range2);
            $range['range3'] = array_sum($range3);
            $range['range4'] = array_sum($range4);
            $range['range5'] = array_sum($range5);

            $dataChart['time_series'] = $timeSeriesUser;
            $dataChart['range'] = $range;
            $dataChart['akumulasi'] = $akumulasi;
            $dataChart['win_lose'] = $dataMenangKalah;
            $dataChart['join'] = $dataIkut;
            $dataChart['all'] = $dataSemua;
            // return json_encode($dataChart);

            // echo json_encode($dataChart);
            $this->output
                ->set_status_header(200)
                ->set_content_type('application/json')
                ->set_output(json_encode($dataChart, JSON_PRETTY_PRINT))
                ->_display();

            exit;
        }
    }
     public function updateDataByStatus()
    {
        $data = $this->input->post();

        
        $sessionData = $this->session->user_data;
        $pengguna = $this->Pengguna_model->getPenggunaById((int) $sessionData['id_pengguna'])['data'];
        $dataPesertaTender = $this->PesertaTenderModel->getDataTenderFilter($pengguna['npwp'], $data['cariKLPD'], $data['cariTahun']);

        $dataFilter = [];

        foreach ($dataPesertaTender as $key => $value) {
            // Lewati entri yang memiliki nilai null
            if ($value['nama_tender'] === null || $value['nilai_hps'] === null || $value['month'] === null || $value['year'] === null || $value['status_peserta'] === null) {
                continue;
            }

                if ($data['kondisiIkut'] == 'true' && $value['status_peserta'] == 'sedang-diikuti') {
                    array_push($dataFilter, $value);
                } else if ($data['kondisiMenang'] == 'true' && $value['status_peserta'] == 'menang') {
                    array_push($dataFilter, $value);
                } else if ($data['kondisiKalah'] == 'true' && $value['status_peserta'] == 'kalah') {
                    array_push($dataFilter, $value);
                }
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($dataFilter, JSON_PRETTY_PRINT))
            ->_display();
        exit;
    }












    // protected function isNpwpFilled(int $userId)
    // {
    //     $query = $this->db->select('npwp')->from('pengguna')->where('id_pengguna', $userId)->get();
    //     $row = $query->row();
    //     if (
    //         $row == null
    //         || ($row != null && (trim($row->npwp) == '' || !$this->isNpwpValid($row->npwp)))
    //     ) {
    //         return false;
    //     }
    //     return true;
    // }

    protected function getPesertaTender($npwp, $tahun): array
    {
        $timeSeriesUser = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $response = $this->PesertaTender_model->getFilterTender($npwp, "", $tahun);
        log_message('error', 'hasil getPesertaTender: ' . print_r($response));
        if (isset($response['status']) && $response['status'] != false) {
            $monthly = $response['data'];

            for ($i = 0; $i < 12; $i++) {
                $timeSeriesUser[$i] = 0;
                foreach ($monthly as $bulan) {
                    if ($bulan['month'] == $i + 1) {
                        $timeSeriesUser[$i]++;
                    }
                }
            }
        }
        return $timeSeriesUser;
    }

    public function getPesertaTenderFilterHps()
    {
        $data = [
            'npwp' => '08.178.554.2-123.321',
        ];
        // $klpd = json_decode(str_replace('&quot;', '', $data['klpd']), true);
        // $tahun = json_decode(str_replace('&quot;', '', $data['tahun']), true);
        $klpd = '';
        $tahun = 2023;

        $this->db->select('id_tender');
        $this->db->from('peserta_tender');
        $this->db->where('npwp', $data['npwp'], null, false);
        $sub = $this->db->get_compiled_select();

        $this->db->select('count(id_tender)');
        $this->db->from('tender');
        $this->db->where("`id_tender` IN ($sub)", null, false);
        $this->db->where("`nilai_hps` < 500000000", null, false);
        $this->db->where("YEAR(`tgl_pembuatan`) = ($tahun)", null, false);
        $range1 = $this->db->get_compiled_select();

        $this->db->select('count(id_tender)');
        $this->db->from('tender');
        $this->db->where("`id_tender` IN ($sub)", null, false);
        $this->db->where("`nilai_hps` >= 500000000", null, false);
        $this->db->where("`nilai_hps` < 1000000000", null, false);
        $this->db->where("YEAR(`tgl_pembuatan`) = ($tahun)", null, false);
        $range2 = $this->db->get_compiled_select();

        $this->db->select('count(id_tender)');
        $this->db->from('tender');
        $this->db->where("`id_tender` IN ($sub)", null, false);
        $this->db->where("`nilai_hps` >= 1000000000", null, false);
        $this->db->where("`nilai_hps` < 10000000000", null, false);
        $this->db->where("YEAR(`tgl_pembuatan`) = ($tahun)", null, false);
        $range3 = $this->db->get_compiled_select();

        $this->db->select('count(id_tender)');
        $this->db->from('tender');
        $this->db->where("`id_tender` IN ($sub)", null, false);
        $this->db->where("`nilai_hps` >= 10000000000", null, false);
        $this->db->where("`nilai_hps` < 100000000000", null, false);
        $this->db->where("YEAR(`tgl_pembuatan`) = ($tahun)", null, false);
        $range4 = $this->db->get_compiled_select();

        $this->db->select('count(id_tender)');
        $this->db->from('tender');
        $this->db->where("`id_tender` IN ($sub)", null, false);
        $this->db->where("`nilai_hps` >= 100000000000", null, false);
        $this->db->where("YEAR(`tgl_pembuatan`) = ($tahun)", null, false);
        $range5 = $this->db->get_compiled_select();

        $this->db->select('*');
        $this->db->from('peserta_tender');
        // $this->db->select('CAST(SUBSTRING(tender.tgl_pembuatan, 6, 2)as INT) as month');
        // $this->db->select("($range1) as range1");
        // $this->db->select("($range2) as range2");
        // $this->db->select("($range3) as range3");
        // $this->db->select("($range4) as range4");
        // $this->db->select("($range5) as range5");
        $this->db->join('tender', 'tender.id_tender = peserta_tender.id_tender');
        $this->db->where('peserta_tender.npwp', $data['npwp']);
        if ($tahun != null) {
            $this->db->where("YEAR(`tgl_pembuatan`) = ($tahun)", null, false);
        }
        $this->db->where_in('tender.id_lpse', $klpd);
        $this->db->group_by('tender.id_tender', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    // public function index()
    // {
    // 	// get new tender notification
    // 	// $tender = $this->client->request('GET', 'tender/notifikasi-tender-baru', $this->client->getConfig('headers'));
    // 	// $notif = json_decode($tender->getBody()->getContents(), true);

    // 	$notif = null;

    // 	try {
    // 		$tender = $this->client->request('GET', 'api/tender/notifikasi-tender-baru-dashboard-user', $this->client->getConfig('headers'));
    // 		$notif = json_decode($tender->getBody()->getContents(), true);

    // 		$notif = $notif['data'];
    // 	} catch (ClientException $e) {
    // 		$notif = null;
    // 	}

    // 	// var_dump($notif);
    // 	// die;

    // 	//get pengguna
    // 	$response = $this->client->request('GET', 'pengguna/' . $this->session->user_data['id_pengguna'], $this->client->getConfig('headers'));

    // 	//get LPSE
    // 	$lpse = $this->client->request('GET', 'lpse', $this->client->getConfig('headers'));

    // 	//get npwp
    // 	$pengguna = json_decode($response->getBody()->getContents(), true)['data'];

    // 	if ($npwp 	= $pengguna['npwp'] != null) {
    // 		$npwp   = $pengguna['npwp'];
    // 	} else {
    // 		$npwp 	= '0';
    // 	}

    // 	//get data peserta
    // 	try {
    // 		// $response = $this->client->request('GET', 'pesertanpwp/' . $npwp, $this->client->getConfig('headers'));
    // 		// $peserta  = json_decode($response->getBody()->getContents(), true);
    // 		$peserta = $this->Peserta_model->getPesertaNpwp($npwp);
    // 		if ($peserta['status'] != false) {
    // 			$peserta  = $peserta['data'];
    // 		} else {
    // 			$peserta = null;
    // 		}
    // 	} catch (ClientException $e) {
    // 		$peserta = null;
    // 	}

    // 	// var_dump($peserta);

    // 	$tahun = (int)date('Y');

    // 	// get peserta tender (time series user)
    // 	$response = $this->PesertaTender_model->getFilterTender($npwp, "", $tahun);

    // 	if ($response['status'] !=  false) {
    // 		$monthly = $response['data'];
    // 		$timeSeriesUser = array();

    // 		for ($i = 0; $i < 12; $i++) {
    // 			$timeSeriesUser[$i] = 0;
    // 			foreach ($monthly as $bulan) {
    // 				if ($bulan['month'] == $i + 1) {
    // 					$timeSeriesUser[$i]++;
    // 				}
    // 			}
    // 		}
    // 	} else {
    // 		$timeSeriesUser = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    // 	}

    // 	// get peserta tender (akumulasi ikut tender)
    // 	// $response = $this->client->request('GET', 'pesertatendertotal/' . $npwp,  $this->client->getConfig('headers'));
    // 	try {
    // 		$responses = $this->PesertaTender_model->getFilterTotal($npwp, "", $tahun);
    // 		$total = json_decode($responses->getBody()->getContents(), true);

    // 		if ($total['status'] == true) {
    // 			$akumulasi = array();
    // 			$total     = $total['data'];

    // 			foreach ($total as $data) {
    // 				$akumulasi[0] = (int)$data['total'];
    // 				$akumulasi[1] = (int)$data['menang'];
    // 				$akumulasi[2] = (int)$data['kalah'];
    // 				$akumulasi[3] = (int)$data['ikut'];
    // 			}

    // 			if (($total['0']['menang'] + $total['0']['kalah']) != 0) {
    // 				$akumulasi[4] = round($total['0']['menang'] / ($total['0']['menang'] + $total['0']['kalah']) * 100);
    // 				$akumulasi[5] = round($total['0']['kalah'] / ($total['0']['menang'] + $total['0']['kalah']) * 100);
    // 			} else {
    // 				$akumulasi[4] = 0;
    // 				$akumulasi[5] = 0;
    // 			}
    // 		} else {
    // 			$akumulasi  = [0, 0, 0, 0, 0, 0, 0];
    // 		}
    // 	} catch (ClientException $e) {
    // 		$akumulasi  = [0, 0, 0, 0, 0, 0, 0];
    // 	}

    // 	$hps = $this->PesertaTender_model->getFilterHps($npwp, "", $tahun);
    // 	// var_dump($hps);
    // 	// exit;

    // 	if ($hps['status'] != false) {
    // 		$hps    = $hps['data'];
    // 		$range  = array();
    // 		$range1 = array();
    // 		$range2 = array();
    // 		$range3 = array();
    // 		$range4 = array();
    // 		$range5 = array();

    // 		for ($i = 0; $i < 12; $i++) {
    // 			$hps1 = 0;
    // 			$hps2 = 0;
    // 			$hps3 = 0;
    // 			$hps4 = 0;
    // 			$hps5 = 0;
    // 			foreach ($hps as $range) {
    // 				// $tgl = strtotime($range['tgl_pembuatan']);
    // 				// $tgl = date('Y', $tgl);
    // 				// if ($tgl == $tahun) {
    // 				if ($range['month'] == $i + 1) {
    // 					if ($range['nilai_hps'] < 500000000) {
    // 						$hps1++;
    // 					} else if ($range['nilai_hps'] >= 500000000 && $range['nilai_hps'] < 1000000000) {
    // 						$hps2++;
    // 					} else if ($range['nilai_hps'] >= 1000000000 && $range['nilai_hps'] < 10000000000) {
    // 						$hps3++;
    // 					} else if ($range['nilai_hps'] >= 10000000000 && $range['nilai_hps'] < 100000000000) {
    // 						$hps4++;
    // 					} else if ($range['nilai_hps'] >= 100000000000) {
    // 						$hps5++;
    // 					}
    // 				}
    // 				// }
    // 			}
    // 			$range1[] = $hps1;
    // 			$range2[] = $hps2;
    // 			$range3[] = $hps3;
    // 			$range4[] = $hps4;
    // 			$range5[] = $hps5;
    // 		}

    // 		$range[0] = $range1;
    // 		$range[1] = $range2;
    // 		$range[2] = $range3;
    // 		$range[3] = $range4;
    // 		$range[4] = $range5;

    // 		$range['range1'] = array_sum($range1);
    // 		$range['range2'] = array_sum($range2);
    // 		$range['range3'] = array_sum($range3);
    // 		$range['range4'] = array_sum($range4);
    // 		$range['range5'] = array_sum($range5);
    // 	} else {
    // 		$range['range1'] = 0;
    // 		$range['range2'] = 0;
    // 		$range['range3'] = 0;
    // 		$range['range4'] = 0;
    // 		$range['range5'] = 0;
    // 	}

    // 	$data = [
    // 		'title'          => 'User Dashboard',
    // 		'lpse'           => json_decode($lpse->getBody()->getContents(), true)['data'],
    // 		'pengguna'       => $pengguna,
    // 		'peserta'        => $peserta,
    // 		'npwp'			 => $npwp,
    // 		'notif'			 => $notif,
    // 		'timeSeriesUser' => isset($timeSeriesUser) ? json_encode($timeSeriesUser) : null,
    // 		'akumulasi'      => isset($akumulasi) ? json_encode($akumulasi) : null,
    // 		'range'     	 => isset($range) ? json_encode($range) : null
    // 	];

    // 	$this->load->view('templates/header', $data);
    // 	$this->load->view('profile_pengguna/templates/navbar');
    // 	$this->load->view('dashboard/user/index');
    // 	// $this->load->view('dashboard/templates/navbar');
    // 	$this->load->view('templates/footer');
    // }

    // public function chart()
    // {
    //     // $data = $this->input->post();
    //     $data =[
    //         'cariKLPD'=>'',
    //         'cariTahun'=>''

    //     ];

    //     var_dump($data);
    //         // return json_encode($data['cariTahun']);

    //         // die;
    //         $this->load->library('session');
    //         $this->load->library('user');
    //         $this->load->model('api/Peserta_model');
    //         $this->load->model('api/PesertaTenderModel');
    //         $this->load->model('scrapping/Pengguna_model');
    //         $this->load->model('scrapping/Lpse_model');

    //         $sessionData = $this->session->user_data;
    //         // $pengguna = $this->Pengguna_model->getPenggunaById((int) $sessionData['id_pengguna'])['data'];

    //         // $peserta = $this->Peserta_model->getPesertaNpwp($pengguna['npwp']);
    //         // $dataPesertaTender = $this->PesertaTenderModel->getPesertaPemenangTenderFilter(array('npwp' => $pengguna['npwp'], 'id_lpse' =>  $data['cariKLPD'], 'tahun' => $data['cariTahun']));
    //         // $dataPesertaTender = $this->PesertaTenderModel->getPesertaPemenangTenderFilter(array('npwp' => $pengguna['npwp'], 'id_lpse' =>  $data['cariKLPD'], 'tahun' => $data['cariTahun']));
    //         // $dataPesertaTender = $this->PesertaTenderModel->getdataPesertaTender(array('npwp' => $pengguna['npwp'], 'id_lpse' =>  $data['cariKLPD'], 'tahun' => $data['cariTahun']));
    //         $dataPesertaTender = $this->PesertaTenderModel->getdataPesertaTender(array('npwp' => $pengguna['npwp'], 'id_lpse' => "", 'tahun' => ''));


    //         // $dataPesertaTender = $this->PesertaTenderModel->getPesertaPemenangTenderFilter(array('npwp' => '02.750.385.3-013.000', 'id_lpse' => '', 'tahun' => '2022'));

    //         // $dataPesertaTender["TEST"] = $data['cariTahun'];
    //         // echo json_encode($dataPesertaTender);

    //         // Statistik Ikut Tender
    //         $timeSeriesUser = array_fill(0, 12, 0);
    //         $totalMenang = 0;
    //         $totalKalah = 0;
    //         foreach ($dataPesertaTender as $dpt => $valueDPT) {
    //             $timeSeriesUser[((int)$valueDPT['month']) - 1]++;
    //             if ($valueDPT['status_pemenang'] == 'true') {
    //                 $totalMenang++;
    //             } else {
    //                 $totalKalah++;
    //             }
    //         }

    //         $tenderDiikuti = 0;
    //         // $tenderDiikuti = $this->PesertaTenderModel->getJumlahTenderFilter(array('id_lpse' =>  $data['cariKLPD'], 'tahun' => $data['cariTahun']));

    //         // time sereies chart Tender
    //         $akumulasi[0] = $totalMenang;
    //         $akumulasi[1] = $totalKalah;
    //         $akumulasi[2] = $tenderDiikuti;
    //         $akumulasi[3] = ($totalKalah + $totalMenang + $tenderDiikuti);
    //         // $akumulasi[3] = $totalKalah + $totalMenang;
    //         // $akumulasi[4] = (($totalKalah + $totalMenang + $tenderDiikuti) != 0) ? ($tenderDiikuti / ($totalKalah + $totalMenang + $tenderDiikuti) * 100) : 0;
    //         // $akumulasi[5] = (($totalKalah + $totalMenang + $tenderDiikuti) != 0) ? ($totalMenang / ($totalKalah + $totalMenang + $tenderDiikuti) * 100) : 0;
    //         // $akumulasi[6] = (($totalKalah + $totalMenang + $tenderDiikuti) != 0) ? ($totalKalah / ($totalKalah + $totalMenang + $tenderDiikuti) * 100) : 0;

    //         // hps chart ikut tender
    //         for ($i = 0; $i < 12; $i++) {
    //             $hps1 = 0;
    //             $hps2 = 0;
    //             $hps3 = 0;
    //             $hps4 = 0;
    //             $hps5 = 0;
    //             foreach ($dataPesertaTender as $range) {
    //                 if ($range['month'] == $i + 1) {

    //                     switch (true) {
    //                         case $range['nilai_hps_paket'] >= 100000000000:
    //                             $hps5++;
    //                             break;
    //                         case $range['nilai_hps_paket'] >= 10000000000:
    //                             $hps4++;
    //                             break;
    //                         case $range['nilai_hps_paket'] >= 1000000000:
    //                             $hps3++;
    //                             break;
    //                         case $range['nilai_hps_paket'] >= 500000000:
    //                             $hps2++;
    //                             break;
    //                         default:
    //                             $hps1++;
    //                             break;
    //                     }
    //                 }
    //             }

    //             $range1[] = $hps1;
    //             $range2[] = $hps2;
    //             $range3[] = $hps3;
    //             $range4[] = $hps4;
    //             $range5[] = $hps5;
    //         }

    //         $range[0] = $range1;
    //         $range[1] = $range2;
    //         $range[2] = $range3;
    //         $range[3] = $range4;
    //         $range[4] = $range5;

    //         $range['range1'] = array_sum($range1);
    //         $range['range2'] = array_sum($range2);
    //         $range['range3'] = array_sum($range3);
    //         $range['range4'] = array_sum($range4);
    //         $range['range5'] = array_sum($range5);

    //         $dataChart['time_series'] = $timeSeriesUser;
    //         $dataChart['range'] = $range;
    //         $dataChart['akumulasi'] = $akumulasi;
    //         // return json_encode($dataChart);
    //         $this->output
    //             ->set_status_header(200)
    //             ->set_content_type('application/json')
    //             ->set_output(json_encode($dataChart, JSON_PRETTY_PRINT))
    //             ->_display();

    //         exit;
    // }

    // public function updateDataByStatus()
    // {
    //     $data = $this->input->post();
    //     // $data=[
    //     //     'cariKLPD' =>null ,
    //     //     'cariTahun'=> null,
    //     //     'kondisiIkut'=> true,
    //     //     'kondisiMenang'=> true,
    //     //     'kondisiKalah'=> true
    //     // ];

    //     // $sessionData = $this->session->user_data;
    //     // $pengguna = $this->Pengguna_model->getPenggunaById((int) $sessionData['id_pengguna'])['data'];
    //     // var_dump($pengguna);
    //     $dataPesertaTender = $this->PesertaTenderModel->getDataTenderFilterForUserDashboard($pengguna['npwp'], $data['cariKLPD'], $data['cariTahun']);

    //     $dataFilter = [];

    //     foreach ($dataPesertaTender as $key => $value) {
    //         if ($data['kondisiIkut'] == 'true' && $value['status_peserta'] == 'sedang-diikuti') {
    //             array_push($dataFilter, $value);
    //         } else if ($data['kondisiMenang'] == 'true' && $value['status_peserta'] == 'menang') {
    //             array_push($dataFilter, $value);
    //         } else if ($data['kondisiKalah'] == 'true' && $value['status_peserta'] == 'kalah') {
    //             array_push($dataFilter, $value);
    //         }
    //     }

    //     $this->output
    //         ->set_status_header(200)
    //         ->set_content_type('application/json')
    //         ->set_output(json_encode($dataFilter, JSON_PRETTY_PRINT))
    //         ->_display();
    //     exit;
    // }

    public function update($id)
    {
        $this->form_validation->set_rules('npwp', 'NPWP', 'required|trim');

        if ($this->form_validation->run() != false) {
            $data = [
                'npwp' => htmlspecialchars($this->input->post('npwp', true)),
                'tgl_update' => date('Y-m-d H:i:s'),
            ];
            // var_dump($test);
            $this->Pengguna_model->ubahPengguna($id, $data);

            redirect('user-dashboard');
        }
    }
}
