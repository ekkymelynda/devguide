<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subbab3_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_subbab3($NO_SBAB3, $NAMA_SBAB3)
    {
        $data = array(
            'NO_SBAB3' => $NO_SBAB3,
            'NAMA_SBAB3' => $NAMA_SBAB3
            );
        $this->db->insert('subbab3', $data);
    }

    function lihat_subbab3()
    {
        $query = $this->db->get('subbab3');
        return $query;
    }

    function form_update_subbab3($ID_SBAB3)
    {
        $this->db->where("ID_SBAB3", $ID_SBAB3);
        $query = $this->db->get('subbab3');
        return $query;
    }

    function ubah_subbab3($ID_SBAB3, $NO_SBAB3, $NAMA_SBAB3)
    {
        $data = array(
            'NO_SBAB3' => $NO_SBAB3,
            'NAMA_SBAB3' => $NAMA_SBAB3
            );

        $this->db->where("ID_SBAB3", $ID_SBAB3);
        $this->db->update('subbab3', $data);
    }

    function hapus_subbab3($ID_SBAB3)
    {
        $this->db->where("ID_SBAB3", $ID_SBAB3);
        $this->db->delete('subbab3');
    }
}
?>