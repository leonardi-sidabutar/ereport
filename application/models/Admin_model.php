<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

	// Data Pekerjaan
	public function getAllTask(){
		$query = $this->db->select('tbl_pekerjaan.*,tbl_area.area, IFNULL(SUM(tbl_laporan.q_progress * tbl_pekerjaan.harga_satuan), 0) AS total_harga, IFNULL((SUM(tbl_laporan.q_progress) / tbl_pekerjaan.q_plan * 100), 0) AS progress_percentage')
			->from('tbl_pekerjaan')
			->join('tbl_laporan', 'tbl_pekerjaan.id = tbl_laporan.id_pekerjaan', 'left')
			->join('tbl_area','tbl_pekerjaan.id_area = tbl_area.id_area','left')
			->group_by('tbl_pekerjaan.id')
			->get();
		return $query->result();
	}

	public function getTaskArea($id_area){
		$query = $this->db->select('tbl_pekerjaan.*, tbl_area.area, IFNULL(SUM(tbl_laporan.q_progress * tbl_pekerjaan.harga_satuan), 0) AS total_harga, IFNULL((SUM(tbl_laporan.q_progress) / tbl_pekerjaan.q_plan * 100), 0) AS progress_percentage')
			->from('tbl_pekerjaan')
			->join('tbl_laporan', 'tbl_pekerjaan.id = tbl_laporan.id_pekerjaan', 'left')
			->join('tbl_area', 'tbl_pekerjaan.id_area = tbl_area.id_area', 'left') // Join dengan tabel tbl_area
			->where('tbl_pekerjaan.id_area', $id_area)
			->group_by('tbl_pekerjaan.id')
			->get();
		return $query->result();
	}

	public function getReport(){
		$query = $this->db->select('tbl_laporan.*, tbl_pekerjaan.*', 'tbl_area.*')
			->from('tbl_laporan')
			->join('tbl_pekerjaan','tbl_laporan.id_pekerjaan = tbl_pekerjaan.id')
			->group_by('tbl_laporan.id')
			->get();
		return $query->result();
	}

	// Function Get All Data
	public function getAllData() {
        // Query untuk mengambil semua data dari tabel
        $query = $this->db->get('tbl_pengiriman_barang');
        // Mengembalikan hasil query dalam bentuk array
        return $query->result_array();
    }

	// Function Insert Data
    public function insertData($data) {
        // Masukkan data ke dalam tabel database
        $this->db->insert('tbl_pengiriman_barang', $data);
    }

	public function selectData($id){
		$selected = $this->db->get_where('tbl_pengiriman_barang', array('id' => $id))->row_array();
		return $selected;
	}

	public function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_pengiriman_barang');

        // Mengembalikan jumlah baris yang terpengaruh oleh operasi penghapusan
        return $this->db->affected_rows();
	}
}