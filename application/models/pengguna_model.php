<?php

//BELUM BISA
class pengguna_model extends CI_Model
{
	function lihat_pengguna()
	{
		$user = $this->db->get('user');
		return $user;
	}

	function form_update_pengguna($USERNAME_PGN)
	{
		return $this->db->get_where('user', array('USERNAME_USR' => $USERNAME_PGN));
	}


	function buat_pengguna($USERNAME_PGN, $PASSWORD_PGN, $EMAIL_PGN, $NOTLP_PGN, $ALAMAT_PGN, $JABATAN_PGN)
	{
		$data['USERNAME_USR'] = $USERNAME_PGN;
		$data['PASSWORD_USR'] = $PASSWORD_PGN;
		$data['EMAIL_USR'] = $EMAIL_PGN;
		$data['NOTLP_USR'] = $NOTLP_PGN;
		$data['ALAMAT_USR'] = $ALAMAT_PGN;
		$data['JABATAN_USR'] = $JABATAN_PGN;
		$this->db->insert('user', $data);
	}

	function ubah_pengguna($USERNAME_PGN, $PASSWORD_PGN, $EMAIL_PGN, $NOTLP_PGN, $ALAMAT_PGN, $JABATAN_PGN)
	{		
		$data['PASSWORD_USR'] = $PASSWORD_PGN;
		$data['EMAIL_USR'] = $EMAIL_PGN;
		$data['NOTLP_USR'] = $NOTLP_PGN;
		$data['ALAMAT_USR'] = $ALAMAT_PGN;
		$data['JABATAN_USR'] = $JABATAN_PGN;
		$this->db->where('USERNAME_USR',$USERNAME_PGN)->update('user',$data);
	}

	function hapus_pengguna($USERNAME_PGN)
	{
		$this->db->where('USERNAME_USR',$USERNAME_PGN)->delete('user');
	}
}