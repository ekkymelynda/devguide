<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sipmaba extends CI_Controller {

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
        $this->load->model('post_model');
    }

	public function daftar_isi()
	{
		$this->load->view('user/header')->view('user/sipmaba/daftar_isi')->view('user/footer');
	}

	public function halaman($ID_PST)
	{
		$data['h'] = $this->post_model->form_update_post($ID_PST);
		$this->load->view('user/header')->view('user/sipmaba/halaman', $data)->view('user/footer');
	}
}
