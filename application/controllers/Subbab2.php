<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subbab2 extends CI_Controller {

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
        $this->load->model('subbab2_model');
    }

	public function read()
	{
		$data['h'] = $this->subbab2_model->lihat_subbab2();
		$this->load->view('user/header')->view('user/subbab2/read', $data)->view('user/footer');
	}

	public function create()
	{
		$this->load->view('user/header')->view('user/subbab2/create')->view('user/footer');
	}

	public function update($id_sbab2)
	{
		$data['h'] = $this->subbab2_model->form_update_subbab2($id_sbab2);
		$this->load->view('user/header')->view('user/subbab2/update', $data)->view('user/footer');
	}

	public function delete($id_sbab2)
	{
		$data['h'] = $this->subbab2_model->form_update_subbab2($id_sbab2);
		$this->load->view('user/header')->view('user/subbab2/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $no_sbab2=$this->input->post('no_sbab2');
        $nama_sbab2= $this->input->post('nama_sbab2');

        $this->subbab2_model->buat_subbab2($no_sbab2, $nama_sbab2);       

        redirect(base_url()."subbab2/read");
    }

    public function ubah($id_sbab2)
    {
    	$no_sbab2=$this->input->post('no_sbab2');
    	$nama_sbab2= $this->input->post('nama_sbab2');

        $this->subbab2_model->ubah_subbab2($id_sbab2, $no_sbab2, $nama_sbab2);

        redirect(base_url()."subbab2/read");
    }

    public function hapus($id_sbab2)
    {
        $this->subbab2_model->hapus_subbab2($id_sbab2);
        redirect(base_url()."subbab2/read");
    }
}
