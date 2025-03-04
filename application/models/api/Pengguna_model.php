<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    // should add return
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPengguna()
    {
        $query = $this->db->get('pengguna');
        return $query->result_array();
    }

    public function getPenggunaById($id)
    {
        $query = $this->db->get_where('pengguna', ['id_pengguna' => $id]);
        return $query->row_array();
    }

    public function tambahPengguna($data)
    {
        $this->db->insert('pengguna', $data);
        $this->db->insert_id();
        return $this->db->get_where('pengguna', ['email' => $data['email']])->row_array();
    }

    public function ubahPengguna($id, $data_new)
    {
        $this->db->where('id_pengguna', $id);
        return $this->db->update('pengguna', $data_new);
    }

    public function hapusPengguna($id)
    {
        $this->db->where('id_pengguna', $id);
        return $this->db->delete('pengguna');
    }

    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }

    public function getByEmail($email)
    {
        $this->db->select('pengguna.id_pengguna, pengguna.nama, pengguna.email, pengguna.kategori, pengguna.status, pengguna.token, pengguna.is_active, pengguna.jenis_perusahaan, pengguna.whatsapp_status');
        $this->db->from('pengguna');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row();
    }

    public function verifyCheck($token, $email)
    {
        $this->db->select('pengguna.nama, pengguna.email, pengguna.kategori, pengguna.status, pengguna.token, pengguna.is_active, pengguna.whatsapp_status');
        $this->db->from('pengguna');
        $this->db->where('email', $email);
        $this->db->where('token', $token);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function verify($data)
    {
        // TODO: dikomen sementara untuk test lengkapi profile
        // $this->db->set('is_active', 1);
        $this->db->where('email', $data['email']);
        $this->db->where('token', $data['token']);
        $this->db->update('pengguna', $data);
        $this->db->select('pengguna.id_pengguna, pengguna.nama, pengguna.email, pengguna.kategori, pengguna.jenis_perusahaan, pengguna.status, pengguna.whatsapp_status');
        return $this->db->get_where('pengguna', ['email' => $data['email']])->row_array();
    }

    public function updateToken($email, $token)
    {
        $this->db->select('pengguna.token');
        $this->db->set('token', $token);
        $this->db->where('email', $email);
        $this->db->update('pengguna');
        return $this->db->get_where('pengguna', ['email' => $email])->row_array();
    }

    /**
     * return boolean
     */
    public function changePassword(int $userId, string $password = '')
    {
        if (empty($password)) {
            return false;
        }
        $this->db->where('id_pengguna', $userId);
        $this->db->set('password', md5($password));
        return $this->db->update('pengguna');
    }

    public function getnpwp($id)
    {
        return $this->db->select('nama, npwp, email')
            ->from('pengguna')
            ->where('id_pengguna', $id)
            ->get();
    }
    public function getAnggotaAsosiasi($id_pengguna)
    {
        $this->db->select('anggota_asosiasi.npwp, pengguna.nama, anggota_asosiasi.status_anggota');
        $this->db->from('anggota_asosiasi');
        $this->db->join('pengguna', 'anggota_asosiasi.npwp = pengguna.npwp');
        $this->db->where('pengguna.id_pengguna', $id_pengguna);
        $this->db->where('anggota_asosiasi.status_anggota', 1);
        $this->db->where('anggota_asosiasi.npwp IS NOT NULL', null, false);
        $this->db->where('anggota_asosiasi.npwp !=', '');
        $query = $this->db->get();

        // Mengembalikan hasil dalam bentuk array jika ada hasil
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false; // Mengembalikan false jika tidak ada hasil
        }
    }
    
    public function updatePassword($id_pengguna, $password,$email) {
        $data = [
            'password' => md5($password), // Menggunakan MD5 untuk hashing password
            'email' =>$email,
            'whatsapp_status'=>1,
        ];

        $this->db->where('id_pengguna', $id_pengguna);
        return $this->db->update('pengguna', $data);
    }


}
