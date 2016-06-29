<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subbab3 extends CI_Controller {

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
        $this->load->model('subbab3_model');
    }

	public function read()
	{
		$data['h'] = $this->subbab3_model->lihat_subbab3();
		$this->load->view('user/header')->view('user/subbab3/read', $data)->view('user/footer');
	}

	public function create()
	{
		$this->load->view('user/header')->view('user/subbab3/create')->view('user/footer');
	}

	public function update($ID_SBAB3)
	{
		$data['h'] = $this->subbab3_model->form_update_subbab3($ID_SBAB3);
		$this->load->view('user/header')->view('user/subbab3/update', $data)->view('user/footer');
	}

	public function delete($ID_SBAB3)
	{
		$data['h'] = $this->subbab3_model->form_update_subbab3($ID_SBAB3);
		$this->load->view('user/header')->view('user/subbab3/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $no_sbab3=$this->input->post('no_sbab3');
        $nama_sbab3= $this->input->post('nama_sbab3');

        $this->subbab3_model->buat_subbab3($no_sbab3, $nama_sbab3);       

        redirect(base_url()."subbab3/read");
    }

    public function ubah($ID_SBAB3)
    {
    	$no_sbab3=$this->input->post('no_sbab3');
    	$nama_sbab3= $this->input->post('nama_sbab3');

        $this->subbab3_model->ubah_subbab3($ID_SBAB3, $no_sbab3, $nama_sbab3);

        redirect(base_url()."subbab3/read");
    }

    public function hapus($ID_SBAB3)
    {
        $this->subbab3_model->hapus_subbab3($ID_SBAB3);
        redirect(base_url()."subbab3/read");
    }
}
