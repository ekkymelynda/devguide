<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class status extends CI_Controller {

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
        $this->load->model('status_model');
    }

	public function read()
	{
		$data['h'] = $this->status_model->lihat_status();
		$this->load->view('user/header')->view('user/status/read', $data)->view('user/footer');
	}

	public function create()
	{
		$this->load->view('user/header')->view('user/status/create')->view('user/footer');
	}

	public function update($ID_STS)
	{
		$data['h'] = $this->status_model->form_update_status($ID_STS);
		$this->load->view('user/header')->view('user/status/update', $data)->view('user/footer');
	}

	public function delete($ID_STS)
	{
		$data['h'] = $this->status_model->form_update_status($ID_STS);
		$this->load->view('user/header')->view('user/status/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $NAMA_STS= $this->input->post('NAMA_STS');

        $this->status_model->buat_status($NAMA_STS);       

        redirect(base_url()."status/read");
    }

    public function ubah($ID_STS)
    {
    	$NAMA_STS= $this->input->post('NAMA_STS');

        $this->status_model->ubah_status($ID_STS, $NAMA_STS);

        redirect(base_url()."status/read");
    }

    public function hapus($ID_STS)
    {
        $this->status_model->hapus_status($ID_STS);
        redirect(base_url()."status/read");
    }
}
