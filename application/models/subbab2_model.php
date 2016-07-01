<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subbab2_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_subbab2($NO_SBAB2, $NAMA_SBAB2)
    {
        $data = array(
            'NO_SBAB2' => $NO_SBAB2,
            'NAMA_SBAB2' => $NAMA_SBAB2
            );
        $this->db->insert('subbab2', $data);
    }

    function lihat_subbab2()
    {
        $query = $this->db->get('subbab2');
        return $query;
    }

    function form_update_subbab2($ID_SBAB2)
    {
        $this->db->where("ID_SBAB2", $ID_SBAB2);
        $query = $this->db->get('subbab2');
        return $query;
    }

    function ubah_subbab2($ID_SBAB2, $NO_SBAB2, $NAMA_SBAB2)
    {
        $data = array(
            'NO_SBAB2' => $NO_SBAB2,
            'NAMA_SBAB2' => $NAMA_SBAB2
            );

        $this->db->where("ID_SBAB2", $ID_SBAB2);
        $this->db->update('subbab2', $data);
    }

    function hapus_subbab2($ID_SBAB2)
    {
        $this->db->where("ID_SBAB2", $ID_SBAB2);
        $this->db->delete('subbab2');
    }
}
?>