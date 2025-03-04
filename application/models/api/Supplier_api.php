<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Supplier_api extends CI_Model
{

    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tanggal');
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => base_url(),
            // You can set any number of default request options.
            'headers' => [
                'auth' => ['beetend', '76oZ8XuILKys5', 'Basic'],
            ],
        ]);
    }

    public function getTimMarketing($id_supplier)
    {
        $this->db->select(['*']);
        $this->db->from('tim_marketing');
        $this->db->where('id_supplier', $id_supplier);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTimMarketingPagination($id_supplier, $page_number, $page_size)
    {
        $this->db->select('*');
        $this->db->from('tim_marketing');
        $this->db->where('id_supplier', $id_supplier);

        // Hitung offset berdasarkan nomor halaman dan ukuran halaman
        $offset = ($page_number - 1) * $page_size;

        // Batasi jumlah baris yang diambil berdasarkan ukuran halaman dan offset
        $this->db->limit($page_size, $offset);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTotalTimMarketingById($id_supplier)
    {
        $this->db->from('tim_marketing');
        $this->db->where('id_supplier', $id_supplier);
        return $this->db->count_all_results();
    }

    public function getTimMarketingById($id)
    {
        $this->db->select(['*']);
        $this->db->from('tim_marketing');
        $this->db->where('id_tim', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getTimMarketingWithFotoById($id)
    {
        $this->db->select('tim_marketing.*, pengguna.foto');
        $this->db->from('tim_marketing');
        $this->db->join('pengguna', 'tim_marketing.id_pengguna = pengguna.id_pengguna');
        $this->db->where('tim_marketing.id_tim', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getTimMarketingByNama($nama)
    {
        $this->db->select(['*']);
        $this->db->from('tim_marketing');
        $this->db->where('nama', $nama);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function createTimMarketing($data)
    {
        $this->db->insert('tim_marketing', $data);
        return $this->db->affected_rows();
    }

    public function updateTimMarketing($data, $id)
    {
        $this->db->update('tim_marketing', $data, ['id_tim' => $id]);
        return $this->db->affected_rows();
    }

    // public function deleteTimMarketing($id)
    // {
    //     $this->db->delete('tim_marketing', ['id_tim' => $id]);
    //     return $this->db->affected_rows();
    // }
    public function deleteTimMarketing($id)
    {
        // Mencari semua id_plot yang terkait dengan tim marketing yang akan dihapus
        $this->db->select('id_plot');
        $this->db->where('id_tim', $id);
        $query = $this->db->get('plot_tim');
        $results = $query->result();

        // Menghapus tim marketing
        $this->db->delete('tim_marketing', ['id_tim' => $id]);
        $affected_rows_tim = $this->db->affected_rows();

        if ($affected_rows_tim > 0 && !empty($results)) {
            // Jika tim marketing berhasil dihapus dan terdapat entri di plot_tim
            foreach ($results as $row) {
                $this->db->delete('plot_tim', ['id_plot' => $row->id_plot]);
            }
        }

        return $affected_rows_tim;
    }

    public function getPlotTimByIdLead($id_lead)
    {
        $this->db->select('*');
        $this->db->from('plot_tim');
        $query = $this->db->where('id_lead', $id_lead);
        return $query->get()->result_array();
    }
    public function insertPlotting($data)
    {
        $this->db->insert('plot_tim', $data);
        return $this->db->affected_rows();
    }

    public function updatePlotting($data, $id)
    {
        $this->db->update('plot_tim', $data, ['id_plot' => $id]);
        return $this->db->affected_rows();
    }

    public function deletePlotting($id)
    {
        $this->db->delete('plot_tim', ['id_plot' => $id]);
        return $this->db->affected_rows();
    }

    // Insert the same Tim to table pengguna
    public function insertTimToPengguna($data)
    {
        $this->db->insert('pengguna', $data);
        // return $this->db->affected_rows();
        return $this->db->insert_id();
    }
    // // Insert the same Tim to table pengguna
    // public function insertTimToPengguna($data)
    // {
    //     $this->db->insert('pengguna', $data);
    //     return $this->db->affected_rows();
    // }


    // Get profile field only from data_lead
    public function getProfile($id)
    {
        $this->db->select(['*']);
        $this->db->from('data_leads');
        // $this->db->where('id_lead', $id);
        //join pemenang_tender to get alamat
        $this->db->join('pemenang', 'pemenang.id_pemenang = data_leads.id_pemenang');
        $this->db->where('data_leads.id_lead', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // insert into field profile
    public function insertProfile($data, $id)
    {
        $this->db->update('data_leads', $data, ['id_lead' => $id]);
        return $this->db->affected_rows();
    }

    // update field profile in data_lead
    public function updateProfile($data, $id)
    {
        $this->db->update('data_leads', $data, ['id_lead' => $id]);
        return $this->db->affected_rows();
    }

    // Get from kontak_lead by id_lead
    public function getContact($id)
    {
        $this->db->select(['*']);
        $this->db->from('kontak_lead');
        $this->db->where('id_lead', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    // Get from kontak_lead by id_kontak
    public function getContactById($id)
    {
        $this->db->select(['*']);
        $this->db->from('kontak_lead');
        $this->db->where('id_kontak', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Insert into kontak_lead
    public function insertContact($data)
    {
        $this->db->insert('kontak_lead', $data);
        return $this->db->affected_rows();
    }

    // Update kontak_lead
    public function updateContact($data, $id)
    {
        $this->db->update('kontak_lead', $data, ['id_kontak' => $id]);
        return $this->db->affected_rows();
    }

    // Delete kontak_lead
    public function deleteContact($id)
    {
        $this->db->delete('kontak_lead', ['id_kontak' => $id]);
        return $this->db->affected_rows();
    }

    //Get pemenang by npwp
    public function getPemenangByNPWP($npwp)
    {
        $this->db->select('pemenang.*, jenis_tender.jenis_tender AS jenis_pengadaan, YEAR(tgl_pemenang) AS tahun');
        $this->db->from('pemenang');
        $this->db->join('jenis_tender', 'pemenang.jenis_tender = jenis_tender.id_jenis', 'LEFT');
        $this->db->where('npwp', $npwp);
        $query = $this->db->get();
        return $query->result();
    }
    //Get pemenang filter
    public function getPemenangFilter($npwp, $lokasi, $jenis, $penawaran_awal, $penawaran_akhir, $tahun)
    {
        $this->db->select('pemenang.*, jenis_tender.jenis_tender AS jenis_pengadaan, YEAR(pemenang.tgl_pemenang) AS tahun');
        $this->db->from('pemenang');
        $this->db->join('jenis_tender', 'pemenang.jenis_tender = jenis_tender.id_jenis', 'LEFT');
        $this->db->where('npwp', $npwp);
        if (!empty($jenis)) {
            $this->db->where('jenis_tender.jenis_tender', $jenis);
        }
        if (!empty($lokasi)) {
            $this->db->like('lokasi_pekerjaan', $lokasi);
        }
        if (!empty($penawaran_awal)) {
            $this->db->where('harga_penawaran >=', $penawaran_awal);
        }
        if (!empty($penawaran_akhir)) {
            $this->db->where('harga_penawaran <=', $penawaran_akhir);
        }
        if (!empty($tahun)) {
            $this->db->where('YEAR(pemenang.tgl_pemenang)', $tahun);
        }
        $query = $this->db->get();

        return $query->result();
    }

    public function getDataLeads($id_pengguna, $page_size, $page_number)
    {

        $sql = "SELECT
        data_leads.id_lead AS id,
        id_pengguna,
        nama_perusahaan,
        data_leads.npwp,
        profil,
        pemenang.*,
        kontak_lead.*,
        COUNT(kontak_lead.id_kontak) AS jumlah_kontak
        FROM
            data_leads
        LEFT JOIN
            pemenang ON data_leads.id_pemenang = pemenang.id_pemenang
        LEFT JOIN
            kontak_lead ON data_leads.id_lead = kontak_lead.id_lead
        WHERE
            data_leads.id_pengguna = $id_pengguna
        GROUP BY
            data_leads.id_lead
        ORDER BY
            id DESC
        LIMIT {$page_number},{$page_size}";

        return $this->db->query($sql);
    }
    public function getDataLeadCRM($id_pengguna, $page_size, $page_number)
    {
        // Subquery to select the latest id_plot for each id_lead
        $subquery = "(SELECT MAX(id_plot) AS latest_id_plot, id_lead
    FROM plot_tim
    GROUP BY id_lead) AS latest_plot_tim";

        $offset = ($page_number - 1) * $page_size;

        $sql = "SELECT
   data_leads.id_lead AS id,
   data_leads.id_pengguna,
   data_leads.nama_perusahaan,
   data_leads.profil,
   kontak_lead.*,
   COUNT(kontak_lead.id_kontak) AS jumlah_kontak,
   plot_tim.*
FROM
   data_leads
LEFT JOIN
   kontak_lead ON data_leads.id_lead = kontak_lead.id_lead
LEFT JOIN
   $subquery ON data_leads.id_lead = latest_plot_tim.id_lead
LEFT JOIN
   plot_tim ON latest_plot_tim.latest_id_plot = plot_tim.id_plot
WHERE
   data_leads.id_pengguna = $id_pengguna
   AND kontak_lead.id_kontak IS NOT NULL
   AND plot_tim.id_lead IS NOT NULL
GROUP BY
   data_leads.id_lead
ORDER BY
   data_leads.id_lead DESC
            LIMIT {$page_number}, {$page_size}";

        return $this->db->query($sql);
    }

    public function updateDataLeadCRM($data, $id)
    {
        $valid_fields = ['status', 'jadwal', 'catatan', 'waktu'];
        $update_data = array();

        foreach ($data as $key => $value) {
            if (in_array($key, $valid_fields)) {
                if ($key == 'jadwal') {
                    // Ensure jadwal is a valid date format (Y-m-d)
                    $update_data[$key] = date('Y-m-d', strtotime($value));
                } else {
                    $update_data[$key] = $value;
                }
            }
        }

        if (empty($update_data)) {
            return false;
        }

        $this->db->where('id_plot', $id);
        $result = $this->db->update('plot_tim', $update_data);

        // Log the SQL query and result
        log_message('debug', 'Update SQL: ' . $this->db->last_query());
        log_message('debug', 'Update result: ' . json_encode($result));

        return $result;
    }


    public function getCRMLeads($id_pengguna)
    {

        $sql = "SELECT
        data_leads.id_lead,
        data_leads.id_pengguna,
        data_leads.nama_perusahaan,
        data_leads.npwp,
        data_leads.profil,
        pemenang.*,
        tim_marketing.id_tim,
        IFNULL(pemenang.lokasi_pekerjaan, '') AS lokasi_pekerjaan,
        IFNULL(lpse.nama_lpse, '') AS nama_lpse,
        IFNULL(wilayah.wilayah, '') AS wilayah
    FROM
        data_leads
    LEFT JOIN
        pemenang ON data_leads.id_pemenang = pemenang.id_pemenang
    LEFT JOIN 
        lpse ON pemenang.id_lpse = lpse.id_lpse
    LEFT JOIN 
        wilayah ON lpse.id_wilayah = wilayah.id_wilayah
    JOIN
        tim_marketing ON tim_marketing.id_supplier = data_leads.id_pengguna
    WHERE
        data_leads.id_pengguna = {$id_pengguna}
        AND (data_leads.id_lead NOT IN (SELECT id_lead FROM plot_tim) OR data_leads.id_lead IN (SELECT id_lead FROM plot_tim WHERE id_tim = 0))
    GROUP BY
        data_leads.id_lead;
    ";

        return $this->db->query($sql);
    }
    public function countCRMLeads($id_pengguna)
    {

        $sql = "SELECT COUNT(DISTINCT data_leads.id_lead) AS jumlah
        FROM data_leads
        LEFT JOIN pemenang ON data_leads.id_pemenang = pemenang.id_pemenang
        LEFT JOIN lpse ON pemenang.id_lpse = lpse.id_lpse
        LEFT JOIN wilayah ON lpse.id_wilayah = wilayah.id_wilayah
        JOIN tim_marketing ON tim_marketing.id_supplier = data_leads.id_pengguna
        WHERE data_leads.id_pengguna = {$id_pengguna}
        AND (data_leads.id_lead NOT IN (SELECT id_lead FROM plot_tim) OR data_leads.id_lead IN (SELECT id_lead FROM plot_tim WHERE id_tim = 0));";

        return $this->db->query($sql);
    }

    // Get total data leads
    public function getTotalDataLeads($id_pengguna)
    {
        $this->db->select('COUNT(*) as total');
        $this->db->from('data_leads');
        $this->db->where('id_pengguna', $id_pengguna);
        $query = $this->db->get();
        return $query->row()->total;
    }
    public function getTotalLeadTim($id_pengguna)
    {
        $subquery = $this->db->select('MAX(id_plot) as id_plot, id_lead, id_tim')
            ->from('plot_tim')
            ->group_by(['id_lead', 'id_tim'])
            ->get_compiled_select();

        $this->db->select('COUNT(data_leads.id_lead) as total');
        $this->db->from('data_leads');
        $this->db->join("($subquery) latest_plot_tim", 'data_leads.id_lead = latest_plot_tim.id_lead', 'left');
        $this->db->join('plot_tim', 'latest_plot_tim.id_plot = plot_tim.id_plot', 'left');
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $this->db->where('plot_tim.id_tim IS NOT NULL');
        $query = $this->db->get();

        return $query->row()->total;
    }

    public function getCountDataLeads($id_pengguna)
    {
        $this->db->select(['COUNT(data_leads.id_lead) AS jumlah']);
        $this->db->from('data_leads');
        $this->db->join('kontak_lead', 'data_leads.id_lead = kontak_lead.id_lead', 'left');
        $this->db->where('kontak_lead.id_lead IS NULL');
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getLeadsBelumPloting($id_pengguna)
    {
        $this->db->select('data_leads.id_lead,plot_tim.id_tim');
        $this->db->from('plot_tim');
        $this->db->join('data_leads', 'plot_tim.id_lead = data_leads.id_lead', 'right'); // Use right join to include all leads
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $this->db->where('plot_tim.id_plot IS  NULL');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function getRecentLeads($id_pengguna)
    {
        $this->db->select('data_leads.id_pemenang');
        $this->db->from('data_leads');
        $this->db->join('pemenang', 'data_leads.id_pemenang = pemenang.id_pemenang');
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $this->db->where('pemenang.tgl_pemenang >=', 'DATE_SUB(CURDATE(), INTERVAL 3 DAY)', FALSE);

        $query = $this->db->get();
        return $query->result_array();
    }
    public function getRiwayatByIdLead($id_lead)
    {
        $this->db->select('status, jadwal, catatan, waktu');
        $this->db->from('plot_tim'); // Ganti dengan nama tabel riwayat Anda
        $this->db->where('id_lead', $id_lead);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function tambahRiwayat($id_lead, $data)
    {
        // Make sure idLead is included in the data array
        $data['id_lead'] = $id_lead;

        $this->db->insert('plot_tim', $data);
        // Return the insert ID
        return $this->db->insert_id();
    }

    public function getDonatChart($id_pengguna)
    {
        $this->db->select('plot_tim.id_plot, plot_tim.id_tim, plot_tim.status, data_leads.id_lead,data_leads.id_pengguna');
        $this->db->from('plot_tim');
        $this->db->join('data_leads', 'plot_tim.id_lead = data_leads.id_lead', 'right');
        $this->db->where('id_pengguna', $id_pengguna);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    public function getDaftarPerusahaan($id_tim)
    {
        $this->db->select('data_leads.nama_perusahaan');
        $this->db->from('plot_tim');
        $this->db->join('data_leads', 'plot_tim.id_lead = data_leads.id_lead');
        $this->db->where('plot_tim.id_tim', $id_tim);
        $this->db->group_by('data_leads.nama_perusahaan');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return [];
        }
    }
    public function getPenggunaIdByTimId($id_tim)
    {
        $this->db->select('id_pengguna');
        $this->db->from('tim_marketing');
        $this->db->where('id_tim', $id_tim);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->id_pengguna;
        } else {
            return false;
        }
    }

    public function getDonatChartCRM($id_pengguna)
    {
        // Subquery to select the latest id_plot for each id_lead
        $subquery = "(SELECT MAX(id_plot) AS latest_id_plot, id_lead
                  FROM plot_tim
                  GROUP BY id_lead) AS latest_plot_tim";

        // Select the necessary fields
        $this->db->select('plot_tim.id_plot, plot_tim.id_tim, plot_tim.status, data_leads.id_lead, data_leads.id_pengguna');

        // From data_leads table
        $this->db->from('data_leads');

        // Left join with the subquery
        $this->db->join("($subquery)", 'data_leads.id_lead = latest_plot_tim.id_lead', 'left');

        // Left join  plot_tim tabel
        $this->db->join('plot_tim', 'latest_plot_tim.latest_id_plot = plot_tim.id_plot', 'left');

        // Filter  id_pengguna
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $this->db->where('plot_tim.id_plot IS NOT NULL');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
}
