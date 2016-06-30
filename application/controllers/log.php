<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class log extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
        $this->load->model('pengguna_model');
    }
    
	public function index()
	{
		$this->load->view('login');
	}

	public function validasi()
	{
		$data=array(
			'USERNAME_PGN'=>$this->input->post('USERNAME_PGN'),
			'PASSWORD_PGN'=>$this->input->post('PASSWORD_PGN')
		);
		 
		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek = $this->pengguna_model->ambil_data($data);
		
		if($cek == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput
			// Berfungsi untuk menyimpan user data
			$sesi = $this->session->set_userdata($data);
			// Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
			redirect('home/dashboard');
		}
		else
			// Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
 			$this->load->view('log/index');
 	}

 	public function logout()
 	{
		session_destroy();
	 	redirect('log/index');
	} 

	public function read()
	{
		$this->load->view('user/header')->view('user/profil/read')->view('user/footer');
	}

	public function update()
	{
		$this->load->view('user/header')->view('user/profil/update')->view('user/footer');
	}

}
