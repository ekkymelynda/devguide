<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subbab1_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_subbab1($NO_SBAB1, $NAMA_SBAB1)
    {
        $data = array(
            'NO_SBAB1' => $NO_SBAB1,
            'NAMA_SBAB1' => $NAMA_SBAB1
            );
        $this->db->insert('subbab1', $data);
    }

    function lihat_subbab1()
    {
        $query = $this->db->get('subbab1');
        return $query;
    }

    function form_update_subbab1($ID_SBAB1)
    {
        $this->db->where("ID_SBAB1", $ID_SBAB1);
        $query = $this->db->get('subbab1');
        return $query;
    }

    function ubah_subbab1($ID_SBAB1, $NO_SBAB1, $NAMA_SBAB1)
    {
        $data = array(
            'NO_SBAB1' => $NO_SBAB1,
            'NAMA_SBAB1' => $NAMA_SBAB1
            );

        $this->db->where("ID_SBAB1", $ID_SBAB1);
        $this->db->update('subbab1', $data);
    }

    function hapus_subbab1($ID_SBAB1)
    {
        $this->db->where("ID_SBAB1", $ID_SBAB1);
        $this->db->delete('subbab1');
    }
}
?>