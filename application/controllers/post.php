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
		$this->load->view('user/header')->view('user/post/create')->view('user/footer');
	}

	public function update($id_pst)
	{
		$data['h'] = $this->post_model->form_update_post($id_pst);
		$this->load->view('user/header')->view('user/post/update', $data)->view('user/footer');
	}

	public function delete($id_pst)
	{
		$data['h'] = $this->post_model->form_update_post($id_pst);
		$this->load->view('user/header')->view('user/post/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $id_ktg=$this->input->post('id_ktg');
        $id_sts= $this->input->post('id_sts');
        $id_bab=$this->input->post('id_bab');
        $judul_pst= $this->input->post('judul_pst');
        $isi_pst= $this->input->post('isi_pst');
        $link_pst=$this->input->post('link_pst');
        $create_pst= $this->input->post('create_pst');
        $update_pst=$this->input->post('update_pst');

        $this->post_model->buat_post($id_ktg, $id_sts, $id_bab, $judul_pst, $isi_pst, $link_pst, $create_pst, $update_pst);       

        redirect(base_url()."post/read");
    }

    public function ubah($id_pst)
    {
    	$id_ktg=$this->input->post('id_ktg');
        $id_sts= $this->input->post('id_sts');
        $id_bab=$this->input->post('id_bab');
        $judul_pst= $this->input->post('judul_pst');
        $isi_pst= $this->input->post('isi_pst');
        $link_pst=$this->input->post('link_pst');
        $create_pst= $this->input->post('create_pst');
        $update_pst=$this->input->post('update_pst');

        $this->post_model->ubah_post($id_pst, $id_ktg, $id_sts, $id_bab, $judul_pst, $isi_pst, $link_pst, $create_pst, $update_pst);

        redirect(base_url()."post/read");
    }

    public function hapus($id_pst)
    {
        $this->post_model->hapus_post($id_pst);
        redirect(base_url()."post/read");
    }
}
