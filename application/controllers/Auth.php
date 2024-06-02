<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'E-Report - Login';

		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		if ($this->session->userdata('username') && $this->session->userdata('role')==='Admin') {
			redirect('dashboard');
		}

		// Rules Validation
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login',$data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username==='' || $password===''){
			$this->session->set_flashdata('message', '
			<div class="alert alert-warning" role="alert">
				Anda Belum Mengisi Form
			</div>
			');
			redirect('auth');
		}

		// Query User
		$login = $this->db->get_where('tbl_login', ['username' => $username])->row_array();

		// Check Data Login (Terdaftar / Tidak di dalam database)
		if ($login) {
			// Jika Terdaftar (Ada)
			// Check Password
			if (password_verify($password, $login['password'])) {
				// Jika Password Benar
				$data = [
					'username' => $login['username'],
					'role' => $login['role']
				];
				$this->session->set_userdata($data);
			redirect('master/index');
			} else {
				// Jika Password Salah
				$this->session->set_flashdata('message', '
				<div class="alert alert-warning" role="alert">
				Password Salah
			  </div>
				');
				redirect('auth');
			}
		} else {
			// Jika Tidak Terdaftar (Tidak Ada)
			$this->session->set_flashdata('message', '
			<div class="alert alert-warning" role="alert">
			Username Tidak Terdaftar
		  </div>
			');
			redirect('auth');
		}
	}

	public function regist()
	{

		// Rules Validation
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {

			$data = [
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role' => 'Admin'
			];
			redirect('admin');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');

		// Flash
		$this->session->set_flashdata('message', '
		<div class="alert alert-warning" role="alert">
		Anda Telah Log out, sesi berakhir
	  </div>
		');
		redirect('auth');
	}
}