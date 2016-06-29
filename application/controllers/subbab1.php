<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subbab1 extends CI_Controller {

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
        $this->load->model('subbab1_model');
    }

	public function read()
	{
		$data['h'] = $this->subbab1_model->lihat_subbab1();
		$this->load->view('user/header')->view('user/subbab1/read', $data)->view('user/footer');
	}

	public function create()
	{
		$this->load->view('user/header')->view('user/subbab1/create')->view('user/footer');
	}

	public function update($ID_SBAB1)
	{
		$data['h'] = $this->subbab1_model->form_update_subbab1($ID_SBAB1);
		$this->load->view('user/header')->view('user/subbab1/update', $data)->view('user/footer');
	}

	public function delete($ID_SBAB1)
	{
		$data['h'] = $this->subbab1_model->form_update_subbab1($ID_SBAB1);
		$this->load->view('user/header')->view('user/subbab1/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $NO_SBAB1=$this->input->post('NO_SBAB1');
        $NAMA_SBAB1= $this->input->post('NAMA_SBAB1');

        $this->subbab1_model->buat_subbab1($NO_SBAB1, $NAMA_SBAB1);       

        redirect(base_url()."subbab1/read");
    }

    public function ubah($ID_SBAB1)
    {
    	$NO_SBAB1=$this->input->post('NO_SBAB1');
    	$NAMA_SBAB1= $this->input->post('NAMA_SBAB1');

        $this->subbab1_model->ubah_subbab1($ID_SBAB1, $NO_SBAB1, $NAMA_SBAB1);

        redirect(base_url()."subbab1/read");
    }

    public function hapus($ID_SBAB1)
    {
        $this->subbab1_model->hapus_subbab1($ID_SBAB1);
        redirect(base_url()."subbab1/read");
    }
}
