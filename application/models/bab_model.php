<?php

class bab_model extends CI_Model
{
	function lihat_bab()
	{
		$bab = $this->db->get('bab');
		return $bab;
	}

	function form_update_bab($ID_BAB)
	{
		return $this->db->get_where('bab', array('ID_BAB' => $ID_BAB));
	}


	function buat_bab($NO_BAB, $NAMA_BAB)
	{
		$data['NO_BAB'] = $NO_BAB;
		$data['NAMA_BAB'] = $NAMA_BAB;
		$this->db->insert('bab', $data);
	}

	function ubah_bab($ID_BAB, $NO_BAB, $NAMA_BAB)
	{
		$data['NO_BAB'] = $NO_BAB;
		$data['NAMA_BAB'] = $NAMA_BAB;
		$this->db->where('ID_BAB',$ID_BAB)->update('bab',$data);
	}

	function hapus_bab($ID_BAB)
	{
		$this->db->where('ID_BAB',$ID_BAB)->delete('bab',$data);
	}
}