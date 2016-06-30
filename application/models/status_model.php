<?php

class status_model extends CI_Model
{
	function lihat_status()
	{
		$status = $this->db->get('status');
		return $status;
	}

	function form_update_status($ID_STS)
	{
		return $this->db->get_where('status', array('ID_STS' => $ID_STS));
	}


	function buat_status($NAMA_STS)
	{
		$data['NAMA_STS'] = $NAMA_STS;
		$this->db->insert('status', $data);
	}

	function ubah_status($ID_STS, $NAMA_STS)
	{
		$data['NAMA_STS'] = $NAMA_STS;
		$this->db->where('ID_STS',$ID_STS)->update('status',$data);
	}

	function hapus_status($ID_STS)
	{
		$this->db->where('ID_STS',$ID_STS)->delete('status');
	}
}