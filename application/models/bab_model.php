<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bab_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_bab($NO_BAB, $NAMA_BAB)
    {
        $data = array(
            'NO_BAB' => $NO_BAB,
            'NAMA_BAB' => $NAMA_BAB
            );
        $this->db->insert('bab', $data);
    }

    function lihat_bab()
    {
        $query = $this->db->get('bab');
        return $query;
    }

    function form_update_bab($ID_BAB)
    {
        $this->db->where("ID_BAB", $ID_BAB);
        $query = $this->db->get('bab');
        return $query;
    }

    function ubah_bab($ID_BAB, $NO_BAB, $NAMA_BAB)
    {
        $data = array(
            'NO_BAB' => $NO_BAB,
            'NAMA_BAB' => $NAMA_BAB
            );

        $this->db->where("ID_BAB", $ID_BAB);
        $this->db->update('bab', $data);
    }

    function hapus_bab($ID_BAB)
    {
        $this->db->where("ID_BAB", $ID_BAB);
        $this->db->delete('bab');
    }
}
?>