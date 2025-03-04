<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Supplier_model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => base_url('api/'),
            'headers' => [
                'auth' => ['beetend', '76oZ8XuILKys5', 'Basic'],
            ],
        ]);
    }

    public function getPemenangTotal($search, int $pageSize = 20, int $pageNumber = 0)
    {
        // 1. Jumlah tender
        $this->db->select('COUNT(kode_tender)');
        $this->db->from('paket');
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        // $this->db->where('npwp', $npwp, null, false);
        $totalall = $this->db->get_compiled_select();

        // $this->db->select('COUNT(id_pemenang)');
        // $this->db->from('supplier_jadwal');
        // $total_sub = $this->db->get_compiled_select();

        // 2. Jumlah peserta tender
        $this->db->select("COUNT(peserta_tender.`kode_tender`)");
        $this->db->from("peserta_tender");
        $this->db->join("paket", "paket.`kode_tender` = peserta_tender.`kode_tender`");
        $this->db->where("peserta_tender.harga_penawaran != 0", null, false);
        $this->db->where("paket.status_tender NOT IN ('Tender Sudah Selesai','Selesai','Gagal', 'Seleksi Batal', 'Tender Gagal', 'Seleksi Gagal', 'Tender Batal')", null, false);
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("paket.id_lpse = '$lpse'");
            }
        }
        $aktif = $this->db->get_compiled_select();

        // 3. Jumlah tender by tanggal pembuatan
        $this->db->select('COUNT(kode_tender)');
        $this->db->from('paket');
        $this->db->where('tanggal_pembuatan = CURDATE()');
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        $total_today = $this->db->get_compiled_select();

        // $this->db->select('COUNT(DATEDIFF(CURDATE(),tgl_mulai))');
        // $this->db->from('supplier_jadwal');
        // $this->db->where('DATEDIFF(CURDATE(),tgl_mulai) = 0');
        // $total_today = $this->db->get_compiled_select();

        // 4. Jumlah jenis pengadaan 4
        $this->db->select("COUNT(jenis_pengadaan)");
        $this->db->from("paket");
        $this->db->where("jenis_pengadaan = 4");
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        $kat_1 = $this->db->get_compiled_select();

        // $this->db->select('COUNT(id_kategori)');
        // $this->db->from('supplier_jadwal');
        // $this->db->where('id_kategori = 4');
        // $kat_1 = $this->db->get_compiled_select();

        // 5. Jumlah jenis pengadaan 1
        $this->db->select("COUNT(jenis_pengadaan)");
        $this->db->from("paket");
        $this->db->where("jenis_pengadaan = 1");
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        $kat_2 = $this->db->get_compiled_select();

        // $this->db->select('COUNT(id_kategori)');
        // $this->db->from('supplier_jadwal');
        // $this->db->where('id_kategori = 1');
        // $kat_2 = $this->db->get_compiled_select();

        // 6. Jumlah jenis pengadaan 7
        $this->db->select("COUNT(jenis_pengadaan)");
        $this->db->from("paket");
        $this->db->where("jenis_pengadaan = 7");
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        $kat_3 = $this->db->get_compiled_select();

        // $this->db->select('COUNT(id_kategori)');
        // $this->db->from('supplier_jadwal');
        // $this->db->where('id_kategori = 7');
        // $kat_3 = $this->db->get_compiled_select();

        // 7. Jumlah jenis pengadaan 2
        $this->db->select("COUNT(jenis_pengadaan)");
        $this->db->from("paket");
        $this->db->where("jenis_pengadaan = 2");
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        $kat_4 = $this->db->get_compiled_select();

        // $this->db->select('COUNT(id_kategori)');
        // $this->db->from('supplier_jadwal');
        // $this->db->where('id_kategori = 2');
        // $kat_4 = $this->db->get_compiled_select();

        // 8. Jumlah jenis pengadaan 3
        $this->db->select("COUNT(jenis_pengadaan)");
        $this->db->from("paket");
        $this->db->where("jenis_pengadaan = 3");
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        $kat_5 = $this->db->get_compiled_select();

        // $this->db->select('COUNT(id_kategori)');
        // $this->db->from('supplier_jadwal');
        // $this->db->where('id_kategori = 3');
        // $kat_5 = $this->db->get_compiled_select();

        // $this->db->select('COUNT(id_kategori)');
        // $this->db->from('supplier_jadwal');
        // $this->db->where('id_kategori = ');
        // $kat_6 = $this->db->get_compiled_select();

        // $this->db->select('*');
        $this->db->select("($totalall) as totalall");
        // $this->db->select("($total_sub) as total_sub");
        $this->db->select("($total_today) as today");
        $this->db->select("($aktif) as aktif");
        $this->db->select("($kat_1) as kat_1");
        $this->db->select("($kat_2) as kat_2");
        $this->db->select("($kat_3) as kat_3");
        $this->db->select("($kat_4) as kat_4");
        $this->db->select("($kat_5) as kat_5");
        // $this->db->select("($kat_1) as kat_1");
        $this->db->select('COUNT(id_pemenang) AS total');
        $this->db->from('pemenang');
        $this->db->join('paket', 'paket.kode_tender = pemenang.kode_tender');
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("paket.id_lpse = '$lpse'");
            }
        }
        $this->db->limit($pageSize, $pageNumber);
        // $this->db->join('paket', 'paket.kode_tender = peserta_tender.kode_tender');
        // $this->db->where('peserta_tender.npwp', $npwp);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTabelDefault($datatable, $search, $orderby)
    {
        $this->db->select('*');
        $this->db->from('supplier_list');
        if ($search['lpse']) {
            $lpse = $search['lpse'];
            if ($lpse) {
                $this->db->where("id_lpse = '$lpse'");
            }
        }
        if ($orderby != null) {
            if ($orderby === "urut1") {
                $this->db->order_by('supplier_list.nilai_hps', 'asc');
            } elseif ($orderby === "urut2") {
                $this->db->order_by('supplier_list.nilai_hps', 'desc');
            } else {
                $this->db->order_by('supplier_list.nilai_hps');
            }
        }
        $supplier = $this->db->get_compiled_select();
        $data = $this->db->query($supplier);
        $total_filter = $data->num_rows();
        // var_dump($total_filter);
        $data->free_result();
        $start = $datatable['start'];
        $length = $datatable['length'];
        if ($length != -1) {
            $supplier .= " LIMIT {$start}, {$length}";
        }
        $data = $this->db->query($supplier);
        $option['draw'] = $datatable['draw'];
        $option['recordsTotal'] = $total_filter;
        $option['recordsFiltered'] = $total_filter;
        $option['data'] = [];
        $n = 1;
        // $n++;
        foreach ($data->result() as $row) {
            // var_dump($row);
            $data = [];
            $data[] = '<div class="text-center col-kode text1 mx-1">' . $n++ . '</div>';
            $data[] = '<div style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; " class="col-nama mx-1"><a href="#" type="button" class="text2" data-bs-toggle="modal" data-bs-target="#exampleModal' . $row->id_pemenang . '">' . $row->nama_peserta . '</a>
            <!-- Modal -->
            <div class="modal fade showProfile" id="exampleModal' . $row->id_pemenang . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img style="width: 100%;" src="' . base_url("assets/img/background_modal.png") . '" alt="">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="border_img">
                                <img style="width: 110px; height: 110px; " src="' . base_url("assets/img/profile_popup.png") . '" alt="">
                            </div>
                            <div class="container text_nama mt-5 pt-1">
                                <h3>' . $row->nama_peserta . '</h3>
                                <p>' . $row->alamat . '</p>
                                <div class="d-flex justify-content-center text-center">
                                    <div class="col-lg m-2 chart-bg">
                                        <h4>' . $row->ikut . '</h4>
                                        <p class="description">Ikut Tender</p>
                                    </div>
                                    <div class="col-lg m-2 chart-bg">
                                        <h4>' . $row->menang . '</h4>
                                        <p class="description">Menang</p>
                                    </div>
                                    <div class="col-lg m-2 chart-bg">
                                        <h4>' . $row->kalah . '</h4>
                                        <p class="description">Kalah</p>
                                    </div>
                                </div>
                                <div class="d-flex p-2 text_detail">
                                    <div class="col-lg">
                                        <div class="d-flex p-2">
                                            <div class="p-2 align-self-center">
                                                <iconify-icon inline icon="material-symbols:call" style="color: #d21b1b;" height="20px" width="20px"></iconify-icon>
                                            </div>
                                            <div>
                                                <h3>Nomor Telpon</h3>
                                                <p>' . $row->no_telp . '</p>
                                            </div>
                                        </div>
                                        <div class="d-flex p-2">
                                            <div class="p-2 align-self-center">
                                                <iconify-icon inline icon="mdi:email" style="color: #d21b1b;" height="20px" width="20px"></iconify-icon>
                                            </div>
                                            <div>
                                                <h3>Email</h3>
                                                <p>' . $row->email . '</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="d-flex p-2">
                                            <div class="p-2 align-self-center">
                                                <iconify-icon inline icon="material-symbols:assignment" style="color: #d21b1b;" height="20px" width="20px"></iconify-icon>
                                            </div>
                                            <div>
                                                <h3>NPWP</h3>
                                                <p>' . $row->npwp . '</p>
                                            </div>
                                        </div>
                                        <div class="d-flex p-2">
                                            <div class="p-2 align-self-center">
                                                <iconify-icon inline icon="material-symbols:location-on" style="color: #d21b1b;" height="20px" width="20px"></iconify-icon>
                                            </div>
                                            <div>
                                                <h3>Alamat</h3>
                                                <p>' . $row->alamat . '</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>';
            $data[] = '<div class="col-jenis text3 mx-1">' . $row->nama_tender . '</div>';
            $data[] = '<div class="col-klpd text4 mx-1"> Rp. ' . number_format($row->nilai_hps, 0, ",", ".") . '</div>';
            $data[] = '<div class="text-center col-klpd text2 mx-1">' . date('d F Y', strtotime($row->tgl_mulai)) . '</div>';
            $option['data'][] = $data;
        }
        // $n++;
        return print_r(json_encode($option));
    }

    public function getJumlahPemenangTender()
    {
        $sql = "SELECT
        COUNT(DISTINCT CASE WHEN DATE(tgl_pemenang) = DATE(NOW()) THEN npwp ELSE NULL END) AS total_today,
        COUNT(DISTINCT CASE WHEN YEAR(tgl_pemenang) = YEAR(NOW()) AND MONTH(tgl_pemenang) = MONTH(NOW()) THEN npwp ELSE NULL END) AS total_month,
        COUNT(DISTINCT CASE WHEN YEAR(tgl_pemenang) = YEAR(NOW()) THEN npwp ELSE NULL END) AS total_year
        FROM pemenang";

        return $this->db->query($sql);
    }

    public function getJumTender()
    {
        // $sql = "SELECT COUNT(kode_tender) AS jum_tender FROM tender_terbaru WHERE akhir_daftar>=CURRENT_TIMESTAMP";
        $sql = "SELECT COUNT(kode_tender) AS jum_tender FROM tender_terbaru";

        return $this->db->query($sql);
    }

    public function getListJenisTender()
    {
        $sql = "SELECT jenis_tender.jenis_tender, COUNT(id_pemenang) AS total_tender
        FROM pemenang, jenis_tender
        WHERE pemenang.jenis_tender = jenis_tender.id_jenis
        GROUP BY jenis_tender.jenis_tender";

        return $this->db->query($sql)->result();
    }

    public function isIdPemenangExists($id)
    {
        $query = $this->db->get_where('data_leads', array('id_pemenang' => $id));
        return $query->num_rows() > 0;
    }

    public function getJumDataLeads()
    {
        $sql = "SELECT COUNT(*) AS total_leads FROM data_leads ";
        return $this->db->query($sql);
    }

    public function getDataLeads($page_number, $page_size)
    {
        $sql = "SELECT
        data_leads.*,
        IFNULL(kontak_lead.nama, '') AS nama_kontak,
        IFNULL(kontak_lead.posisi, '') AS posisi,
        IFNULL(kontak_lead.no_telp, '') AS no_telp,
        IFNULL(kontak_lead.email, '') AS email,
        IFNULL(pemenang.lokasi_pekerjaan, '') AS lokasi_pekerjaan,
        IFNULL(lpse.nama_lpse, '') AS nama_lpse,
        IFNULL(wilayah.wilayah, '') AS wilayah
    FROM data_leads
    LEFT JOIN (
        SELECT kontak_lead.*
        FROM kontak_lead
        INNER JOIN (
            SELECT id_lead, MIN(id_kontak) AS oldest
            FROM kontak_lead
            GROUP BY id_lead
        ) oldest_contacts ON kontak_lead.id_lead = oldest_contacts.id_lead
        AND kontak_lead.id_kontak = oldest_contacts.oldest
    ) kontak_lead ON data_leads.id_lead = kontak_lead.id_lead
    LEFT JOIN pemenang ON data_leads.id_pemenang = pemenang.id_pemenang
    LEFT JOIN lpse ON pemenang.id_lpse = lpse.id_lpse
    LEFT JOIN wilayah ON lpse.id_wilayah = wilayah.id_wilayah
    LIMIT {$page_number},{$page_size}";

        return $this->db->query($sql);
    }
    public function getAllDataLeads($id_pengguna)
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
            data_leads.id_lead;
   ";

        return $this->db->query($sql);
    }

    public function getDataLeadByIdTim($id_tim)
    {
        $sql = "SELECT  
                    plot_tim.*,
                    data_leads.*,
                    IFNULL(pemenang.lokasi_pekerjaan, '') AS lokasi_pekerjaan,
                    IFNULL(lpse.nama_lpse, '') AS nama_lpse,
                    IFNULL(wilayah.wilayah, '') AS wilayah
                FROM plot_tim
                JOIN data_leads ON plot_tim.id_lead = data_leads.id_lead 
                LEFT JOIN pemenang ON data_leads.id_pemenang = pemenang.id_pemenang
                LEFT JOIN lpse ON pemenang.id_lpse = lpse.id_lpse
                LEFT JOIN wilayah ON lpse.id_wilayah = wilayah.id_wilayah
                WHERE plot_tim.id_tim = $id_tim 
                GROUP BY data_leads.id_lead
                ;
            ";

        $query = $this->db->query($sql, array($id_tim));
        return $query->result_array();
    }
    public function getDataLeadById($id)
    {
        $this->db->select('data_leads.*, pemenang.* ');
        $this->db->from('data_leads');
        $this->db->join('pemenang', 'data_leads.id_pemenang = pemenang.id_pemenang');
        $this->db->where('data_leads.id_lead', $id);

        $query = $this->db->get();
        return $query->row();
    }

    // public function getKontakLeadById($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('kontak_lead');
    //     // $this->db->where('id_lead', $id);
    //     // join data lead to get id lead
    //     $this->db->join('data_leads', 'kontak_lead.id_lead = data_leads.id_lead');
    //     $this->db->where('kontak_lead.id_lead', $id);

    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    public function getKontakLeadById($id)
    {
        $this->db->select('*');
        $this->db->from('kontak_lead');
        $this->db->where('id_lead', $id);
        $this->db->where('id_kontak != (SELECT MIN(id_kontak) FROM kontak_lead WHERE id_lead = ' . $id . ')');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getKontakLeadByName($name)
    {
        $this->db->select('*');
        $this->db->from('kontak_lead');
        // $this->db->where('nama', $name);
        // get nama_perusahaan from data lead
        $this->db->join('data_leads', 'kontak_lead.id_lead = data_leads.id_lead');
        $this->db->where('data_leads.npwp', $name);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPlotTim()
    {
        $this->db->select('*');
        $this->db->from('plot_tim');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getNamaPerusahaanNonPlot($id_pengguna)
    {
        $this->db->select('data_leads.id_lead, nama_perusahaan, pemenang.lokasi_pekerjaan');
        $this->db->from('data_leads');
        $this->db->join('pemenang', 'data_leads.id_pemenang = pemenang.id_pemenang', 'left');
        $this->db->join('kontak_lead', 'data_leads.id_lead = kontak_lead.id_lead', 'left');
        $this->db->join('plot_tim', 'data_leads.id_lead = plot_tim.id_lead', 'left');
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $this->db->where('kontak_lead.id_kontak IS NOT NULL', null, false); // Tidak NULL
        $this->db->where('plot_tim.id_plot IS NULL', null, false); //  NULL
        $this->db->group_by('data_leads.id_lead');
        $query = $this->db->get();

        // Mengembalikan hasil dalam bentuk array jika ada hasil
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false; // Mengembalikan false jika tidak ada hasil
        }
    }

    public function getTotalNamaPerusahaanNonPlot($id_pengguna)
    {
        $this->db->select('data_leads.id_lead');
        $this->db->from('data_leads');
        $this->db->join('pemenang', 'data_leads.id_pemenang = pemenang.id_pemenang', 'left');
        $this->db->join('kontak_lead', 'data_leads.id_lead = kontak_lead.id_lead', 'left');
        $this->db->join('plot_tim', 'data_leads.id_lead = plot_tim.id_lead', 'left');
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $this->db->where('kontak_lead.id_kontak IS NOT NULL', null, false); // Tidak NULL
        $this->db->where('plot_tim.id_plot IS NULL', null, false); //  NULL
        $this->db->group_by('data_leads.id_lead');
        $query = $this->db->get();

        // Mengembalikan total jumlah baris
        return $query->num_rows();
    }


    public function getPlotTimById_lead($id_lead)
    {
        $this->db->select('*');
        $this->db->from('plot_tim');
        $query = $this->db->where('id_lead', $id_lead);
        return $query->result_array();
    }
    public function insertUpdatePlotTim($id_lead, $id_tim)
    {
        $this->db->select('*');
        $this->db->from('plot_tim');
        $this->db->where('id_lead', $id_lead);

        $query = $this->db->get();
        $isSet = $query->num_rows();

        if ($isSet > 0) {
            $this->db->where('id_lead', $id_lead);
            return $this->db->update('plot_tim', ['id_tim' => $id_tim]);
        }
        return $this->db->insert('plot_tim', ['id_tim' => $id_tim, 'id_lead' => $id_lead]);
    }
    // public function deletePlotTimByIdLead($id_lead)
    // {
    //     $this->db->where('id_lead', $id_lead);
    //     $this->db->delete('plot_tim');
    // }
    public function deletePlotTimByIdLead($id_lead)
    {
        // Mencari id_plot berdasarkan id_lead
        $this->db->select('id_plot');
        $this->db->where('id_lead', $id_lead);
        $query = $this->db->get('plot_tim');
        $result = $query->row();

        if ($result) {
            // Jika id_plot ditemukan, hapus berdasarkan id_plot
            $id_plot = $result->id_plot;
            $this->db->where('id_plot', $id_plot);
            $this->db->delete('plot_tim');
        }
    }
    public function updateDataLead($id, $data)
    {
        $this->db->where('id_lead', $id);
        return $this->db->update('data_leads', $data);
    }

    public function insertKontakLead($data)
    {
        return $this->db->insert('kontak_lead', $data);
    }

    public function deleteDataLeadById($id)
    {
        $this->db->where('id_lead', $id);
        $this->db->delete('data_leads');
    }

    public function deleteKontakLeadById($id)
    {
        $this->db->where('id_lead', $id);
        $this->db->delete('kontak_lead');
    }

    public function getTimMarketing()
    {
        $this->db->select(['*']);
        $this->db->from('tim_marketing');
        $query = $this->db->get();
        return $query->result_array();
    }
    // public function getTimBySupplierId($id_supplier)
    // {
    //     $this->db->select('tm.*, (SELECT COUNT(*) FROM plot_tim pt WHERE pt.id_tim = tm.id_tim) AS jumlah');
    //     $this->db->from('tim_marketing tm');
    //     $this->db->where('tm.id_supplier', $id_supplier);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function getTimBySupplierId($id_supplier)
    {
        $this->db->select('tm.*, 
        (SELECT COUNT(DISTINCT pt.id_lead) 
         FROM plot_tim pt 
         WHERE pt.id_tim = tm.id_tim) AS jumlah');
        $this->db->from('tim_marketing tm');
        $this->db->where('tm.id_supplier', $id_supplier);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTimMarketingbyId($id)
    {
        $this->db->select(['*']);
        $this->db->from('tim_marketing');
        $this->db->where('id_tim', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function createTimMarketing($data)
    {
        // $data = [
        //     'nama_tim' => $this->input->post('nama_tim', true),
        //     'posisi' => $this->input->post('posisi', true),
        //     'no_telp' => $this->input->post('no_telp', true),
        //     'email' => $this->input->post('email', true),
        //     'alamat' => $this->input->post('alamat', true), 
        // ];
        $this->db->insert('tim_marketing', $data);
        return $this->db->affected_rows();
    }

    public function getDataGrafikPemenang($tahun, $id_pengguna)
    {
        $this->db->select('pemenang.kode_tender, pemenang.tgl_pemenang');
        $this->db->from('pemenang');
        $this->db->join('data_leads', 'data_leads.id_pemenang = pemenang.id_pemenang');
        $this->db->where('YEAR(pemenang.tgl_pemenang)', $tahun);
        $this->db->where('data_leads.id_pengguna', $id_pengguna);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTabelTimMarketing($id_supplier)
    {
        $this->db->select('
            tim_marketing.id_tim, 
            tim_marketing.nama_tim, 
            tim_marketing.alamat, 
            COUNT(plot_tim.id_lead) as jumlah_perusahaan');
        $this->db->from('tim_marketing');
        $this->db->join('plot_tim', 'tim_marketing.id_tim = plot_tim.id_tim', 'left');
        $this->db->where('tim_marketing.id_supplier', $id_supplier);
        $this->db->group_by('tim_marketing.id_tim, tim_marketing.nama_tim, tim_marketing.alamat');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function countTimMarketing($id_pengguna)
    {
        // Menyusun query untuk menghitung jumlah tim marketing
        $this->db->select('COUNT(id_tim) as team_count');
        $this->db->from('tim_marketing');
        $this->db->where('id_supplier', $id_pengguna);

        // Eksekusi query dan mengambil hasilnya
        $query = $this->db->get();

        // Mengembalikan hasil hitungan
        if ($query->num_rows() > 0) {
            return $query->row()->team_count;
        } else {
            return 0;
        }
    }

    public function getDataLeadCRM($id_pengguna)
    {
        $sql = "SELECT
        data_leads.id_lead AS id,
        id_pengguna,
        nama_perusahaan,
        data_leads.npwp,
        profil,
        pemenang.*,
        kontak_lead.*,
        COUNT(kontak_lead.id_kontak) AS jumlah_kontak,
        plot_tim.*
        FROM
            data_leads
        LEFT JOIN
            pemenang ON data_leads.id_pemenang = pemenang.id_pemenang
        LEFT JOIN
            kontak_lead ON data_leads.id_lead = kontak_lead.id_lead
		LEFT JOIN
			plot_tim ON data_leads.id_lead = plot_tim.id_lead
        WHERE
            data_leads.id_pengguna = $id_pengguna
        GROUP BY
            data_leads.id_lead;
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
