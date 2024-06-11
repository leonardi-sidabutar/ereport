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
		$this->load->model('Admin_model');
		// Load FPDF (libraries)
		$this->load->library('Pdf');
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
		$data['jobs'] = $this->Admin_model->getAllTask();

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
			'task'      => $_POST['pekerjaan'],
			'sub_task'      => $_POST['uraian_pekerjaan'],
			'q_plan'    => $_POST['plan'],
			'id_area'   => $_POST['area'],
			'date_start'=> $_POST['datestart'],
			'date_end'  => $_POST['dateend'],
			'satuan'  => $_POST['satuan'],
			'volume'  => $_POST['volume'],
			'harga_satuan'  => $_POST['price']
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
			'id_pekerjaan' => $_POST['pekerjaan'],
			'diameter' 	   => $_POST['diameter'],
			'tebal' 	   => $_POST['tebal']
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

	public function pengguna(){
		$data['aktif'] = 'pengguna';
		$data['judul'] = 'E Report - Admin Dashboard Pengguna';
		$data['pengguna']  = $this->db->get('tbl_auth')->result_array();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/pengguna',$data);
		$this->load->view('template/footer');		
	}

	public function print(){
		$this->load->view('print.php');
	}

	public function fpdf($id_area){
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
		$report = $this->Admin_model->getTaskArea($id_area);
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();
		$logo_path = FCPATH . 'assets/img/logo.png';
		$pdf->Image($logo_path,15,11,15);
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(0,7,'PT CIPTO SARANA NUSANTARA',0,1,'C');
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(0,5,'NEGOSIASI HARGA PEKERJAAN',0,1,'C');
		$pdf->Cell(0,7,'TAHUN ANGGARAN 2024',0,1,'C');
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(50,10,'Nama Kegiatan',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$report[0]->task,0,1, 'B');
		// Info
		$pdf->Cell(50,10,'Area',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$report[0]->area,0,1, 'B');
		$pdf->SetFillColor(255,255,255);
		$pdf->Cell(50,10,'Tanggal Mulai',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$report[0]->date_start,0,1, 'B');
		$pdf->Cell(50,10,'Tanggal Target Selesai',0,0, 'B');
		$pdf->Cell(5,10,':',0,0, 'B');
		$pdf->Cell(0,10,$report[0]->date_end,0,1, 'B');
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','B',10);
		// Info
		$pdf->Cell(10,6,'No',1,0,'C');
		$pdf->Cell(60,6,'Uraian Pekerjaan',1,0,'C');
		$pdf->Cell(20,6,'Satuan',1,0,'C');
		$pdf->Cell(20,6,'Volume',1,0,'C');
		$pdf->Cell(40,6,'Harga Satuan (Rp)',1,0,'C');
		$pdf->Cell(40,6,'Jumlah Biaya (Rp)',1,1,'C');
		$pdf->SetFont('Arial','',10);
		$no=0;
		foreach ($report as $data){
			$no++;
			$pdf->Cell(10,6,$no,1,0, 'C');
			$pdf->Cell(60,6,$data->sub_task,1,0);
			$pdf->Cell(20,6,$data->satuan,1,0,'C');
			$pdf->Cell(20,6,$data->volume,1,0,'C');
			$pdf->Cell(40,6,'Rp ' . number_format($data->harga_satuan, 0, ',', '.'),1,0,'C');
			$pdf->Cell(40,6,'Rp. '. number_format($data->total_harga, 0, ',', '.'),1,1,'C');
			    // Tambahkan jumlah biaya pekerjaan ke total biaya
				$total_biaya += $data->total_harga;
		}
		// MendapatkN PPN 10%
		$ppn = $total_biaya * (10/100) ;
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(150,6,'Total Harga Pekerjaan Exlude PPN (10%)',1,0,'R');
		$pdf->Cell(40,6,'Rp. '.number_format($ppn, 0, ',', '.'),1,1,'C');
		$pdf->Cell(150,6,'Total Harga Pembulatan',1,0,'R');
		$pdf->Cell(40,6,'Rp. '.number_format($total_biaya + $ppn, 0, ',', '.'),1,1,'C');
		$pdf->Cell(190,30,'Medan, 20 Mar 2024',0,1,'R');
		$pdf->Cell(190,20,'PT CIPTO SARANA NUSANTARA',0,1,'R');
		$pdf->Output();
	}

	public function pengguna_create(){
		// Check Apakah Datanya Terisi Semua
		$data = [
			'name' 	       => $_POST['name'],
			'email' 	   => $_POST['email'],
			'jabatan' 	   => $_POST['jabatan'],
			'username' 	   => $_POST['username'],
			'password' 	   => password_hash($_POST['password'],PASSWORD_DEFAULT),
			'role'	       => 'User'
		];


		// Check apakah ada username yang sama
		$selected = $this->db->get_where('tbl_auth', array('username' => $_POST['username']))->row_array();
		
		if($selected===null){
		$query = $this->db->insert('tbl_auth', $data);

		if($query){
			$this->session->set_flashdata('message', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong>
				Data Pengguna Berhasil Di Daftarkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
			redirect('admin/pengguna');
		};
		}else{
			$this->session->set_flashdata('message', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Gagal!</strong>
				Username sudah terdaftar!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			');
			redirect('admin/pengguna');
		}
	}
}
