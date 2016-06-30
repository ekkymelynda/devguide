<?php

class subbab1_model extends CI_Model
{
	function lihat_subbab1()
	{
		$subbab1 = $this->db->get('subbab1');
		return $subbab1;
	}

	function form_update_subbab1($ID_SBAB1)
	{
		return $this->db->get_where('subbab1', array('ID_SBAB1' => $ID_SBAB1));
	}


	function buat_subbab1($NO_SBAB1, $NAMA_SBAB1)
	{
		$data['NO_SBAB1'] = $NO_SBAB1;
		$data['NAMA_SBAB1'] = $NAMA_SBAB1;
		$this->db->insert('subbab1', $data);
	}

	function ubah_subbab1($ID_SBAB1, $NO_SBAB1, $NAMA_SBAB1)
	{
		$data['NO_SBAB1'] = $NO_SBAB1;
		$data['NAMA_SBAB1'] = $NAMA_SBAB1;
		$this->db->where('ID_SBAB1',$ID_SBAB1)->update('subbab1',$data);
	}

	function hapus_subbab1($ID_SBAB1)
	{
		$this->db->where('ID_SBAB1',$ID_SBAB1)->delete('subbab1');
	}
}