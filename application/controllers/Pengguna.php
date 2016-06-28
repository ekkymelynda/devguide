<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

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
	public function read()
	{
		$this->load->view('user/header')->view('user/pengguna/read')->view('user/footer');
	}

	public function create()
	{
		$this->load->view('user/header')->view('user/pengguna/create')->view('user/footer');
	}

	public function update()
	{
		$this->load->view('user/header')->view('user/pengguna/update')->view('user/footer');
	}

	public function delete()
	{
		$this->load->view('user/header')->view('user/pengguna/delete')->view('user/footer');
	}
}