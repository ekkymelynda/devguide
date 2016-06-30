<?php

class subbab2_model extends CI_Model
{
	function lihat_subbab2()
	{
		$subbab2 = $this->db->get('subbab2');
		return $subbab2;
	}

	function form_update_subbab2($ID_SBAB2)
	{
		return $this->db->get_where('subbab2', array('ID_SBAB2' => $ID_SBAB2));
	}


	function buat_subbab2($NO_SBAB2, $NAMA_SBAB2)
	{
		$data['NO_SBAB2'] = $NO_SBAB2;
		$data['NAMA_SBAB2'] = $NAMA_SBAB2;
		$this->db->insert('subbab2', $data);
	}

	function ubah_subbab2($ID_SBAB2, $NO_SBAB2, $NAMA_SBAB2)
	{
		$data['NO_SBAB2'] = $NO_SBAB2;
		$data['NAMA_SBAB2'] = $NAMA_SBAB2;
		$this->db->where('ID_SBAB2',$ID_SBAB2)->update('subbab2',$data);
	}

	function hapus_subbab2($ID_SBAB2)
	{
		$this->db->where('ID_SBAB2',$ID_SBAB2)->delete('subbab2');
	}
}