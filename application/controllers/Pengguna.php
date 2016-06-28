<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna extends CI_Controller {

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

	public function read()
	{
		$data['h'] = $this->pengguna_model->lihat_pengguna();
		$this->load->view('user/header')->view('user/pengguna/read', $data)->view('user/footer');
	}

	public function create()
	{
		$this->load->view('user/header')->view('user/pengguna/create')->view('user/footer');
	}

	public function update($id_usr)
	{
		$data['h'] = $this->pengguna_model->form_update_pengguna($id_usr);
		$this->load->view('user/header')->view('user/pengguna/update', $data)->view('user/footer');
	}

	public function delete($id_usr)
	{
		$data['h'] = $this->pengguna_model->form_update_pengguna($id_usr);
		$this->load->view('user/header')->view('user/pengguna/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $username_usr=$this->input->post('username_usr');
        $password_usr= $this->input->post('password_usr');
        $email_usr=$this->input->post('email_usr');
        $notlp_usr= $this->input->post('notlp_usr');
        $alamat_usr=$this->input->post('alamat_usr');
        $jabatan_usr= $this->input->post('jabatan_usr');

        $this->pengguna_model->buat_pengguna($username_usr, $password_usr, $email_usr, $notlp_usr, $alamat_usr, $jabatan_usr);       

        redirect(base_url()."pengguna/read");
    }

    public function ubah($id_usr)
    {
    	$username_usr=$this->input->post('username_usr');
        $password_usr= $this->input->post('password_usr');
        $email_usr=$this->input->post('email_usr');
        $notlp_usr= $this->input->post('notlp_usr');
        $alamat_usr=$this->input->post('alamat_usr');
        $jabatan_usr= $this->input->post('jabatan_usr');

        $this->pengguna_model->ubah_pengguna($username_usr, $password_usr, $email_usr, $notlp_usr, $alamat_usr, $jabatan_usr);

        redirect(base_url()."pengguna/read");
    }

    public function hapus($id_usr)
    {
        $this->pengguna_model->hapus_pengguna($id_usr);
        redirect(base_url()."pengguna/read");
    }
}
