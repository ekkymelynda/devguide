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

	public function update($ID_USR)
	{
		$data['h'] = $this->pengguna_model->form_update_pengguna($ID_USR);
		$this->load->view('user/header')->view('user/pengguna/update', $data)->view('user/footer');
	}

	public function delete($ID_USR)
	{
		$data['h'] = $this->pengguna_model->form_update_pengguna($ID_USR);
		$this->load->view('user/header')->view('user/pengguna/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $USERNAME_USR=$this->input->post('USERNAME_USR');
        $PASSWORD_USR= $this->input->post('PASSWORD_USR');
        $EMAIL_USR=$this->input->post('EMAIL_USR');
        $NOTLP_USR= $this->input->post('NOTLP_USR');
        $ALAMAT_USR=$this->input->post('ALAMAT_USR');
        $JABATAN_USR= $this->input->post('JABATAN_USR');

        $this->pengguna_model->buat_pengguna($USERNAME_USR, $PASSWORD_USR, $EMAIL_USR, $NOTLP_USR, $ALAMAT_USR, $JABATAN_USR);       

        redirect(base_url()."pengguna/read");
    }

    public function ubah($ID_USR)
    {
    	$USERNAME_USR=$this->input->post('USERNAME_USR');
        $PASSWORD_USR= $this->input->post('PASSWORD_USR');
        $EMAIL_USR=$this->input->post('EMAIL_USR');
        $NOTLP_USR= $this->input->post('NOTLP_USR');
        $ALAMAT_USR=$this->input->post('ALAMAT_USR');
        $JABATAN_USR= $this->input->post('JABATAN_USR');

        $this->pengguna_model->ubah_pengguna($ID_USR, $USERNAME_USR, $PASSWORD_USR, $EMAIL_USR, $NOTLP_USR, $ALAMAT_USR, $JABATAN_USR);

        redirect(base_url()."pengguna/read");
    }

    public function hapus($ID_USR)
    {
        $this->pengguna_model->hapus_pengguna($ID_USR);
        redirect(base_url()."pengguna/read");
    }
}
