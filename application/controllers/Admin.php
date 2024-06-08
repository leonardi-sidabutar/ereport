<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		// Load Model
		// $this->load->model('Penyakit_model');
	}


	public function index()
	{
		$data['aktif'] = 'home';
		$data['judul'] = 'E Report - Admin Dashboard';
		$this->db->from('tbl_pekerjaan');
		$data['pekerjaan'] = $this->db->count_all_results();
		$this->db->from('tbl_laporan');
		$data['laporan'] = $this->db->count_all_results();
		$this->db->from('tbl_area');
		$data['area'] = $this->db->count_all_results();
		$this->db->from('tbl_auth');
		$data['auth'] = $this->db->count_all_results();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/footer');
		// }
	}

	public function pekerjaan(){
		$data['aktif'] = 'pekerjaan';
		$data['judul'] = 'E Report - Admin Dashboard Pekerjaan';
		$data['pekerjaan'] = $this->db->get('tbl_pekerjaan')->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/pekerjaan',$data);
		$this->load->view('template/footer');
	}

	public function pekerjaan_add(){
		$data['aktif'] = 'pekerjaan_add';
		$data['judul'] = 'E Report - Admin Dashboard Pekerjaan';
		$data['area']  = $this->db->get('tbl_area')->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/pekerjaan_add',$data);
		$this->load->view('template/footer');
	}

	public function pekerjaan_create(){
		// Check Apakah Datanya Terisi Semua
		$data = [
			'id_area'   => $_POST['area'],
			'task'      => $_POST['pekerjaan'],
			'q_plan'    => $_POST['plan'],
			'date_start'=> $_POST['datestart'],
			'date_end'  => $_POST['dateend']
		];
		$query = $this->db->insert('tbl_pekerjaan', $data);

		if($query){
			$this->session->set_flashdata('message', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong>
				Data Pekerjaan Berhasil Di Tambah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
			redirect('admin/pekerjaan');
		};
	}

	public function area(){
		$data['aktif'] = 'area';
		$data['judul'] = 'E Report - Admin Dashboard Area';
		$data['area']  = $this->db->get('tbl_area')->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/area',$data);
		$this->load->view('template/footer');		
	}

	public function area_add(){
		$data['aktif'] = 'area_add';
		$data['judul'] = 'E Report - Admin Dashboard Area';
		$data['area']  = $this->db->get('tbl_area')->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/area_add',$data);
		$this->load->view('template/footer');
	}

	public function area_create(){

		// Check Apakah Datanya Terisi Semua
		$data = [
			'area'   => $_POST['area'],
		];
		$query = $this->db->insert('tbl_area', $data);

		if($query){
			$this->session->set_flashdata('message', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong>
				Data Area Berhasil Di Tambah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
			redirect('admin/area');
		};
	}

	public function area_delete($id){
        $this->db->where('id_area', $id);
        $query = $this->db->delete('tbl_area');

		if($query){
			$this->session->set_flashdata('message', '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong>
				Data Area Berhasil Di Hapus
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
			redirect('admin/area');
		};
	}

	public function laporan(){
		$data['aktif'] = 'laporan';
		$data['judul'] = 'E Report - Admin Dashboard Laporan';
		$data['pekerjaan']  = $this->db->get('tbl_laporan')->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/laporan',$data);
		$this->load->view('template/footer');
	}

	public function laporan_add(){
		$data['aktif'] = 'laporan_add';
		$data['judul'] = 'E Report - Admin Dashboard Laporan';
		$data['pekerjaan']  = $this->db->get('tbl_pekerjaan')->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/laporan_add',$data);
		$this->load->view('template/footer');
	}

	public function laporan_create(){

		// Check Apakah Datanya Terisi Semua
		$data = [
			'pengerjaan'   => $_POST['pengerjaan'],
			'tanggal'      => $_POST['date'],
			'q_progress'   => $_POST['progress'],
			'id_pekerjaan' => $_POST['date']
		];
		$query = $this->db->insert('tbl_laporan', $data);

		if($query){
			$this->session->set_flashdata('message', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong>
				Data Laporan Berhasil Di Tambah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
			redirect('admin/laporan');
		};
	}
}