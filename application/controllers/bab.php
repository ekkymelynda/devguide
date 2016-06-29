<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bab extends CI_Controller {

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
        $this->load->model('bab_model');
    }

	public function read()
	{
		$data['h'] = $this->bab_model->lihat_bab();
		$this->load->view('user/header')->view('user/bab/read', $data)->view('user/footer');
	}

	public function create()
	{
		$this->load->view('user/header')->view('user/bab/create')->view('user/footer');
	}

	public function update($ID_BAB)
	{
        $data['h'] = $this->bab_model->form_update_bab($ID_BAB);
		$this->load->view('user/header')->view('user/bab/update', $data)->view('user/footer');
	}

	public function delete($ID_BAB)
	{
		$data['h'] = $this->bab_model->form_update_bab($ID_BAB);
		$this->load->view('user/header')->view('user/bab/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $NO_BAB=$this->input->post('NO_BAB');
        $NAMA_BAB= $this->input->post('NAMA_BAB');

        $this->bab_model->buat_bab($NO_BAB, $NAMA_BAB);       

        redirect(base_url()."bab/read");
    }

    public function ubah($ID_BAB)
    {
    	$NO_BAB=$this->input->post('NO_BAB');
    	$NAMA_BAB= $this->input->post('NAMA_BAB');

        $this->bab_model->ubah_bab($ID_BAB, $NO_BAB, $NAMA_BAB);

        redirect(base_url()."bab/read");
    }

    public function hapus($ID_BAB)
    {
        $this->bab_model->hapus_bab($ID_BAB);
        redirect(base_url()."bab/read");
    }
}
