<?php

class subbab3_model extends CI_Model
{
	function lihat_subbab3()
	{
		$subbab3 = $this->db->get('subbab3');
		return $subbab3;
	}

	function form_update_subbab3($ID_SBAB3)
	{
		return $this->db->get_where('subbab3', array('ID_SBAB3' => $ID_SBAB3));
	}


	function buat_subbab3($NO_SBAB3, $NAMA_SBAB3)
	{
		$data['NO_SBAB3'] = $NO_SBAB3;
		$data['NAMA_SBAB3'] = $NAMA_SBAB3;
		$this->db->insert('subbab3', $data);
	}

	function ubah_subbab3($ID_SBAB3, $NO_SBAB3, $NAMA_SBAB3)
	{
		$data['NO_SBAB3'] = $NO_SBAB3;
		$data['NAMA_SBAB3'] = $NAMA_SBAB3;
		$this->db->where('ID_SBAB3',$ID_SBAB3)->update('subbab3',$data);
	}

	function hapus_subbab3($ID_SBAB3)
	{
		$this->db->where('ID_SBAB3',$ID_SBAB3)->delete('subbab3');
	}
}