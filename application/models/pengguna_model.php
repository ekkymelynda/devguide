<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_pengguna($USERNAME_PGN, $PASSWORD_PGN, $EMAIL_PGN, $NOTLP_PGN, $ALAMAT_PGN, $JABATAN_PGN)
    {
        $data = array(
            'USERNAME_PGN' => $USERNAME_PGN,
            'PASSWORD_PGN' => $PASSWORD_PGN,
            'EMAIL_PGN' => $EMAIL_PGN,
            'NOTLP_PGN' => $NOTLP_PGN,
            'ALAMAT_PGN' => $ALAMAT_PGN,
            'JABATAN_PGN' => $JABATAN_PGN
            );
        $this->db->insert('pengguna', $data);
    }

    function lihat_pengguna()
    {
        $query = $this->db->get('pengguna');
        return $query;
    }

    function form_update_pengguna($USERNAME_PGN)
    {
        $this->db->where("USERNAME_PGN", $USERNAME_PGN);
        $query = $this->db->get('pengguna');
        return $query;
    }

    function ubah_pengguna($USERNAME_PGN, $PASSWORD_PGN, $EMAIL_PGN, $NOTLP_PGN, $ALAMAT_PGN, $JABATAN_PGN)
    {
        $data = array(
            'USERNAME_PGN' => $USERNAME_PGN,
            'PASSWORD_PGN' => $PASSWORD_PGN,
            'EMAIL_PGN' => $EMAIL_PGN,
            'NOTLP_PGN' => $NOTLP_PGN,
            'ALAMAT_PGN' => $ALAMAT_PGN,
            'JABATAN_PGN' => $JABATAN_PGN
            );

        $this->db->where("USERNAME_PGN", $USERNAME_PGN);
        $this->db->update('pengguna', $data);
    }

    function hapus_pengguna($USERNAME_PGN)
    {
        $this->db->where("USERNAME_PGN", $USERNAME_PGN);
        $this->db->delete('pengguna');
    }

    function ambil_data($data){
         $user = $this->db->get_where('pengguna', $data); 
         return $user->num_rows();
    }
    
}
?>