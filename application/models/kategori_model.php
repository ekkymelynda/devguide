<?php

class kategori_model extends CI_Model
{
	function lihat_kategori()
	{
		$kategori = $this->db->get('kategori');
		return $kategori;
	}

	function form_update_kategori($ID_KTG)
	{
		return $this->db->get_where('kategori', array('ID_KTG' => $ID_KTG));
	}


	function buat_kategori($NAMA_KTG)
	{
		$data['NAMA_KTG'] = $NAMA_KTG;
		$this->db->insert('kategori', $data);
	}

	function ubah_kategori($ID_KTG, $NAMA_KTG)
	{
		$data['NAMA_KTG'] = $NAMA_KTG;
		$this->db->where('ID_KTG',$ID_KTG)->update('kategori',$data);
	}

	function hapus_kategori($ID_KTG)
	{
		$this->db->where('ID_KTG',$ID_KTG)->delete('kategori');
	}
}