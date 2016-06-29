<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_Controller {

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

	public function read()
	{
		$data['h'] = $this->post_model->lihat_post();
		$this->load->view('user/header')->view('user/post/read', $data)->view('user/footer');
	}
	
	public function create()
	{
		$data['k'] = $this->post_model->lihat_kategori();
		$data['s'] = $this->post_model->lihat_status();
		$data['b'] = $this->post_model->lihat_bab();
		$this->load->view('user/header')->view('user/post/create', $data)->view('user/footer');
	}

	public function update($ID_PST)
	{
		$data['h'] = $this->post_model->form_update_post($ID_PST);
		$data['k'] = $this->post_model->lihat_kategori();
		$data['s'] = $this->post_model->lihat_status();
		$data['b'] = $this->post_model->lihat_bab();
		$this->load->view('user/header')->view('user/post/update', $data)->view('user/footer');
	}

	public function delete($ID_PST)
	{
		$data['h'] = $this->post_model->form_update_post($ID_PST);
		$data['k'] = $this->post_model->lihat_kategori();
		$data['s'] = $this->post_model->lihat_status();
		$data['b'] = $this->post_model->lihat_bab();
		$this->load->view('user/header')->view('user/post/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $ID_KTG=$this->input->post('ID_KTG');
        $ID_STS= $this->input->post('ID_STS');
        $ID_BAB=$this->input->post('ID_BAB');
        $JUDUL_PST= $this->input->post('JUDUL_PST');
        $ISI_PST= $this->input->post('ISI_PST');
        $LINK_PST=$this->input->post('LINK_PST');
        $CREATE_PST= $this->input->post('CREATE_PST');
        $UPDATE_PST=$this->input->post('UPDATE_PST');

        $this->post_model->buat_post($ID_KTG, $ID_STS, $ID_BAB, $JUDUL_PST, $ISI_PST, $LINK_PST, $CREATE_PST);       

        redirect(base_url()."post/read");
    }

    public function ubah($ID_PST)
    {
    	$ID_KTG=$this->input->post('ID_KTG');
        $ID_STS= $this->input->post('ID_STS');
        $ID_BAB=$this->input->post('ID_BAB');
        $JUDUL_PST= $this->input->post('JUDUL_PST');
        $ISI_PST= $this->input->post('ISI_PST');
        $LINK_PST=$this->input->post('LINK_PST');
        $CREATE_PST= $this->input->post('CREATE_PST');
        $UPDATE_PST=$this->input->post('UPDATE_PST');

        $this->post_model->ubah_post($ID_PST, $ID_KTG, $ID_STS, $ID_BAB, $JUDUL_PST, $ISI_PST, $LINK_PST, $UPDATE_PST);

        redirect(base_url()."post/read");
    }

    public function hapus($ID_PST)
    {
        $this->post_model->hapus_post($ID_PST);
        redirect(base_url()."post/read");
    }
}
