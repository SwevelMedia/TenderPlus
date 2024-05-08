<?php

defined('BASEPATH') or exit('No direct script access allowed');

use App\components\traits\ClientApi;

class Paket_model extends CI_Model
{
    use ClientApi;

    public function __construct()
    {
        parent::__construct();
        $this->init();
    }

    public function getAllPaket()
    {
        $data = $this->client->request('GET', 'paket', $this->client->getConfig('headers'));
        $data = json_decode($data->getBody()->getContents(), true);
        return $data;
    }

    public function getPaketById($id)
    {
        $data = $this->client->request('GET', "paket/$id", $this->client->getConfig('headers'));
        $data = json_decode($data->getBody()->getContents(), true);
        return $data;
    }

    public function getHpsPerMonth($klpd, $jenisPengadaan, $tahun)
    {
        $klpd = str_replace(['[', ']'], '', $klpd);
        $klpd = str_replace('"', '', $klpd);
        $klpd = intval($klpd);

        $jenisPengadaan = str_replace(['[', ']'], '', $jenisPengadaan);
        $jenisPengadaan = str_replace('"', '', $jenisPengadaan);
        $jenisPengadaan = intval($jenisPengadaan);

        $data = $this->client->request('POST', 'paket/s-getHpsPerMonth', [
            'form_params' => [
                'klpd' => $klpd,
                'jenisPengadaan' => $jenisPengadaan,
                // 'rentangHps' => $rentangHps,
                'tahun' => $tahun,
            ],
            'auth' => $this->client->getConfig('headers')['auth'],
        ]);
        $data = json_decode($data->getBody()->getContents(), true);
        return $data;
    }

    // public $table = 'paket';
    // public $column_order = ['id_peserta', 'npwp', 'nama_peserta', 'alamat', 'kelurahan', 'kecamatan'];
    // public $order = ['id_peserta', 'npwp', 'nama_peserta', 'alamat', 'kelurahan', 'kecamatan'];

    // private function _get_data_query()
    // {
    //     $this->db->from($this->table);
    //     if (isset($_POST['search']['value'])) {
    //         $this->db->like('id_peserta', $_POST['search']['value']);
    //         $this->db->or_like('npwp', $_POST['search']['value']);
    //         $this->db->or_like('nama_peserta', $_POST['search']['value']);
    //         $this->db->or_like('alamat', $_POST['search']['value']);
    //         $this->db->or_like('kelurahan', $_POST['search']['value']);
    //         $this->db->or_like('kecamatan', $_POST['search']['value']);
    //     }

    //     if (isset($_POST['order'])) {
    //         $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } else {
    //         $this->db->order_by('id_peserta', 'ASC');
    //     }
    // }

    // public function getDataPeserta()
    // {
    //     $this->_get_data_query();
    //     if ($_POST['length'] != -1) {
    //         $this->db->limit($_POST['length'], $_POST['start']);
    //     }
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // public function count_filtered_data()
    // {
    //     $this->_get_data_query();
    //     $query = $this->db->get();
    //     return $query->num_rows();
    // }

    // public function count_all_data()
    // {
    //     $this->db->from($this->table);
    //     return $this->db->count_all_results();
    // }
    // panda kong
    public function getDataForHpsLpse($tahun, $id_lpse, $jenis_pengadaan,$hps_awal,$hps_akhir){

        $this->db->select('paket.nilai_hps_paket, paket.id_lpse, paket.jenis_pengadaan');
        $this->db->select("SUBSTRING(paket.tanggal_pembuatan, 6, 2) AS month");
        $this->db->select("SUBSTRING(paket.tanggal_pembuatan, 1, 4) AS year");
        $this->db->from('paket');

        if ($tahun != '') {
            $this->db->where("YEAR(paket.tanggal_pembuatan)", $tahun);
        }
        if ($id_lpse != '') {
            $this->db->where('paket.id_lpse', $id_lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
        }
        if ($hps_awal != '' && $hps_akhir != '') {
            // Tambahkan filter berdasarkan rentang nilai HPS
            $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
            $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
        }

        $this->db->where('paket.nilai_hps_paket IS NOT NULL'); // Filter nilai_hps_paket yang tidak null
        $this->db->where('paket.jenis_pengadaan IS NOT NULL'); // Filter jenis_pengadaan yang tidak null
        $this->db->where('MONTH(paket.tanggal_pembuatan) IS NOT NULL'); // Filter month yang tidak null
        $this->db->where('YEAR(paket.tanggal_pembuatan) IS NOT NULL'); // Filter year yang tidak null

        $this->db->order_by('paket.tanggal_pembuatan');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataByFillter($tahun,$id_lpse,$jenis_pengadaan){

        $this->db->select('paket.nilai_hps_paket,paket.id_lpse,paket.jenis_pengadaan');
        $this->db->select("SUBSTRING(paket.tanggal_pembuatan, 6, 2) AS month");
        // $this->db->select("SUM(paket.nilai_hps_paket) AS total_hps");
        $this->db->select("SUBSTRING(paket.tanggal_pembuatan, 1, 4) AS year");
        $this->db->from('paket');

        if ($tahun != '') {
            $this->db->where("YEAR(paket.tanggal_pembuatan)", $tahun);
        }
        if ($id_lpse != '') {
            $this->db->where('paket.id_lpse', $id_lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
        }

        

        $this->db->order_by('paket.tanggal_pembuatan');
        // $this->db->group_by('month');
        $query = $this->db->get();
        return $query->result_array();

        

    }
    public function getStatusTender($tahun, $lpse,$jenis_pengadaan,$hps_awal,$hps_akhir) {
        $this->db->select("
            SUBSTRING(paket.tanggal_pembuatan, 6, 2) AS month,
            SUBSTRING(paket.tanggal_pembuatan, 1, 4) AS year,
            SUM(CASE WHEN paket.tahap_tender_saat_ini = 45 THEN 1 ELSE 0 END) AS total_selesai,
            SUM(CASE WHEN paket.status_tender = 'Tender Ulang' THEN 1 ELSE 0 END) AS total_ulang,
            SUM(CASE WHEN paket.status_tender = 'Tender Batal' THEN 1 ELSE 0 END) AS total_batal
        ");
        $this->db->from('paket');

        if ($tahun != '') {
            $this->db->where("YEAR(paket.tanggal_pembuatan)", $tahun);
        }
        if ($lpse != '') {
            $this->db->where('paket.id_lpse', $lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
        }
        if ($hps_awal != '' && $hps_akhir != '') {
            // Tambahkan filter berdasarkan rentang nilai HPS
            $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
            $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
        }

        $this->db->group_by('SUBSTRING(paket.tanggal_pembuatan, 1, 7)');
        $this->db->order_by('year, month');

        $query = $this->db->get();
        return $query->result_array();
    }

    // public function getdatapeserta($tahun, $lpse, $jenis_pengadaan) {
    //     $this->db->select('peserta.nama_peserta, COUNT(peserta_tender.kode_tender) AS jumlah_tender');
    //     $this->db->from('peserta');
    //     $this->db->join('peserta_tender', 'peserta.npwp = peserta_tender.npwp', 'inner');
    //     $this->db->join('paket', 'peserta_tender.kode_tender = paket.kode_tender', 'inner');
            
    //     if ($tahun != '') {
    //         $this->db->where("YEAR(paket.tanggal_pembuatan)", $tahun);
    //     }
    //     if ($lpse != '') {
    //         $this->db->where('paket.id_lpse', $lpse);
    //     }
    //     if ($jenis_pengadaan != '') {
    //         $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
    //     }
            
    //     $this->db->group_by('peserta.nama_peserta');
    //     $query = $this->db->get();
            
    //     return $query->result();
    // }

    public function getdatapeserta($tahun, $lpse, $jenis_pengadaan, $limit) {
        $this->db->select('peserta.nama_peserta, COUNT(peserta_tender.kode_tender) AS jumlah_tender');
        $this->db->from('peserta');
        $this->db->join('peserta_tender', 'peserta.npwp = peserta_tender.npwp');
        $this->db->join('paket', 'peserta_tender.kode_tender = paket.kode_tender');
        
        if ($tahun != '') {
            $this->db->where('YEAR(paket.tanggal_pembuatan)', $tahun);
        }
        if ($lpse != '') {
            $this->db->where('paket.id_lpse', $lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
        }
        
        $this->db->group_by('peserta.nama_peserta');

        if ($limit !== null) {
            $this->db->limit($limit);
        }
        
        $query = $this->db->get();
        
        return $query->result();
    }



    public function getTotalPeserta($tahun, $lpse, $jenis_pengadaan,$hps_awal,$hps_akhir) {
        $this->db->select('YEAR(tanggal_pembuatan) AS tahun, MONTH(tanggal_pembuatan) AS bulan, SUM(DISTINCT peserta_tender) AS total_peserta');
        $this->db->from('paket');

        // Tambahkan kondisi jika tahun tidak kosong
        if ($tahun != '') {
            $this->db->where("YEAR(tanggal_pembuatan)", $tahun);
        }
        
        // Tambahkan kondisi jika lpse tidak kosong
        if ($lpse != '') {
            $this->db->where('id_lpse', $lpse);
        }

        // Tambahkan kondisi jika jenis_pengadaan tidak kosong
        if ($jenis_pengadaan != '') {
            $this->db->where('jenis_pengadaan', $jenis_pengadaan);
        }
        if ($hps_awal != '' && $hps_akhir != '') {
            // Tambahkan filter berdasarkan rentang nilai HPS
            $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
            $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
        }

        $this->db->group_by('YEAR(tanggal_pembuatan), MONTH(tanggal_pembuatan),kode_tender');
        $query = $this->db->get();
        return $query->result();
    }

    public function getPesertaMenawar($tahun, $lpse, $jenis_pengadaan,$hps_awal,$hps_akhir){
       $this->db->select("YEAR(p.tanggal_pembuatan) AS tahun, MONTH(p.tanggal_pembuatan) AS bulan, COUNT(pt.kode_tender) AS jumlah_peserta_menawar")
                 ->from("paket p")
                 ->join("peserta_tender pt", "p.kode_tender = pt.kode_tender", "inner");
        
        if ($tahun != '') {
            $this->db->where("YEAR(p.tanggal_pembuatan)", $tahun);
        }
        if ($lpse != '') {
            $this->db->where('p.id_lpse', $lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('p.jenis_pengadaan', $jenis_pengadaan);
        }
        if ($hps_awal != '' && $hps_akhir != '') {
            // Tambahkan filter berdasarkan rentang nilai HPS
            $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
            $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
        }

        $this->db->group_by("tahun, bulan");
        $query = $this->db->get();
        // $query = $this->db->get();
        return $query->result(); 
    }

    public function getPesertaMenang($tahun, $lpse, $jenis_pengadaan,$hps_awal,$hps_akhir){
        $this->db->select("YEAR(p.tanggal_pembuatan) AS tahun, MONTH(p.tanggal_pembuatan) AS bulan, COUNT(pn.kode_tender) AS jumlah_peserta_menang")
                 ->from("paket p")
                 ->join("pemenang pn", "p.kode_tender = pn.kode_tender", "inner");
        
        if ($tahun != '') {
            $this->db->where("YEAR(p.tanggal_pembuatan)", $tahun);
        }
        if ($lpse != '') {
            $this->db->where('p.id_lpse', $lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('p.jenis_pengadaan', $jenis_pengadaan);
        }
        if ($hps_awal != '' && $hps_akhir != '') {
            // Tambahkan filter berdasarkan rentang nilai HPS
            $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
            $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
        }

        $this->db->group_by("tahun, bulan");
        
        $query = $this->db->get();
        return $query->result(); 
    }

    public function ambilDataMenawarMendaftar($tahun, $lpse, $jenis_pengadaan,$hps_awal,$hps_akhir) {
        $this->db->select('p.npwp,p.kode_tender, p.npwp, p.harga_penawaran, p.harga_terkoreksi, paket.tanggal_pembuatan AS tanggal, paket.id_lpse');
        $this->db->from('peserta_tender p');
        $this->db->join('paket', 'p.kode_tender = paket.kode_tender', 'left');
        // $this->db->where('paket.id_lpse', 709);
            if ($tahun != '') {
                $this->db->where("YEAR(paket.tanggal_pembuatan)", $tahun);
            }
            if ($lpse != '') {
                $this->db->where('paket.id_lpse', $lpse);
            }
            if ($jenis_pengadaan != '') {
                $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
            }
            if ($hps_awal != '' && $hps_akhir != '') {
                // Tambahkan filter berdasarkan rentang nilai HPS
                $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
                $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
            }
        $this->db->limit(200);
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataPesertaMenang($tahun, $lpse, $jenis_pengadaan,$hps_awal,$hps_akhir)
    {
        $this->db->select('pm.npwp,pm.kode_tender, pm.nama_pemenang, pm.id_lpse, pm.tgl_pemenang');
        $this->db->from('pemenang pm');
        $this->db->join('paket', 'pm.kode_tender = paket.kode_tender', 'LEFT');
        // $this->db->where('paket.id_lpse', 709);
        if ($tahun != '') {
            $this->db->where("YEAR(pm.tgl_pemenang)", $tahun);
        }
        if ($lpse != '') {
            $this->db->where('paket.id_lpse', $lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
        }
        if ($hps_awal != '' && $hps_akhir != '') {
            // Tambahkan filter berdasarkan rentang nilai HPS
            $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
            $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
        }
        $this->db->limit(200);
        $query = $this->db->get();
        return $query->result();
    }

   public function get_peserta_tender_count($tahun, $lpse, $jenis_pengadaan,$hps_awal,$hps_akhir) {
        // Query untuk mengambil nama peserta dan jumlah tender
        $this->db->select('peserta.nama_peserta, COUNT(peserta_tender.npwp) as jumlah_tender');
        $this->db->from('peserta');
        $this->db->join('peserta_tender', 'peserta.npwp = peserta_tender.npwp');
        $this->db->join('paket', 'peserta_tender.kode_tender = paket.kode_tender');
        
        if ($tahun != '') {
            $this->db->where("YEAR(paket.tanggal_pembuatan)", $tahun);
        }
        if ($lpse != '') {
            $this->db->where('paket.id_lpse', $lpse);
        }
        if ($jenis_pengadaan != '') {
            $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
        }
        if ($hps_awal != '' && $hps_akhir != '') {
            // Tambahkan filter berdasarkan rentang nilai HPS
            $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
            $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
        }
        
        // Batasi jumlah data yang dihitung dalam COUNT() dengan subquery dan LIMIT
        $this->db->limit(200);
        
        $this->db->group_by('peserta.nama_peserta');
        $query = $this->db->get();

        return $query->result();

    }
     public function getPesertaDaftarNawar($tahun, $lpse, $jenis_pengadaan, $hps_awal, $hps_akhir) {
        $this->db->select('peserta_tender.npwp, peserta_tender.kode_tender, peserta.nama_peserta');
        $this->db->from('peserta_tender');
        $this->db->join('paket', 'peserta_tender.kode_tender = paket.kode_tender', 'left');
        $this->db->join('peserta', 'peserta.npwp = peserta_tender.npwp', 'inner');

            if ($tahun != '') {
                $this->db->where("YEAR(paket.tanggal_pembuatan)", $tahun);
            }
            if ($lpse != '') {
                $this->db->where('paket.id_lpse', $lpse);
            }
            if ($jenis_pengadaan != '') {
                $this->db->where('paket.jenis_pengadaan', $jenis_pengadaan);
            }
            if ($hps_awal != '' && $hps_akhir != '') {
                // Tambahkan filter berdasarkan rentang nilai HPS
                $this->db->where('paket.nilai_hps_paket >=', $hps_awal);
                $this->db->where('paket.nilai_hps_paket <=', $hps_akhir);
            }

        $this->db->limit(200);
        return $this->db->get()->result();
    }

    public function getDataTabelPesertaMenang($tahun, $lpse, $jenis_pengadaan, $hps_awal, $hps_akhir) {
        $this->db->select('pm.npwp, pm.kode_tender, pm.nama_pemenang as nama_peserta');
        $this->db->from('pemenang pm');

            if ($tahun != '') {
                $this->db->where("YEAR(pm.tgl_pemenang)", $tahun);
            }
            if ($lpse != '') {
                $this->db->where('pm.id_lpse', $lpse);
            }
            if ($jenis_pengadaan != '') {
                $this->db->where('pm.jenis_tender', $jenis_pengadaan);
            }
            if ($hps_awal != '' && $hps_akhir != '') {
                // Tambahkan filter berdasarkan rentang nilai HPS
                $this->db->where('pm.nilai_hps >=', $hps_awal);
                $this->db->where('pm.nilai_hps <=', $hps_akhir);
            }

        $this->db->limit(200);
        return $this->db->get()->result();
    }


}
