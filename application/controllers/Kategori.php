<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

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
        $this->load->model('kategori_model');
    }

	public function read()
	{
		$data['h'] = $this->kategori_model->lihat_kategori();
		$this->load->view('user/header')->view('user/kategori/read', $data)->view('user/footer');
	}
	
	public function create()
	{
		$this->load->view('user/header')->view('user/kategori/create')->view('user/footer');
	}

	public function update($id_ktg)
	{
		$data['h'] = $this->kategori_model->form_update_kategori($id_ktg);
		$this->load->view('user/header')->view('user/kategori/update', $data)->view('user/footer');
	}

	public function delete($id_ktg)
	{
		$data['h'] = $this->kategori_model->form_update_kategori($id_ktg);
		$this->load->view('user/header')->view('user/kategori/delete', $data)->view('user/footer');
	}

	public function buat()
    {
        $nama_ktg= $this->input->post('nama_ktg');

        $this->kategori_model->buat_kategori($nama_ktg);       

        redirect(base_url()."kategori/read");
    }

    public function ubah($id_ktg)
    {
    	$nama_ktg= $this->input->post('nama_ktg');

        $this->kategori_model->ubah_kategori($id_ktg, $nama_ktg);

        redirect(base_url()."kategori/read");
    }

    public function hapus($id_ktg)
    {
        $this->kategori_model->hapus_kategori($id_ktg);
        redirect(base_url()."kategori/read");
    }
}
