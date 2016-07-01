<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class status_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_status($NAMA_STS)
    {
        $data = array(
            'NAMA_STS' => $NAMA_STS
            );
        $this->db->insert('status', $data);
    }

    function lihat_status()
    {
        $query = $this->db->get('status');
        return $query;
    }

    function form_update_status($ID_STS)
    {
        $this->db->where("ID_STS", $ID_STS);
        $query = $this->db->get('status');
        return $query;
    }

    function ubah_status($ID_STS, $NAMA_STS)
    {
        $data = array(
            'NAMA_STS' => $NAMA_STS
            );

        $this->db->where("ID_STS", $ID_STS);
        $this->db->update('status', $data);
    }

    function hapus_status($ID_STS)
    {
        $this->db->where("ID_STS", $ID_STS);
        $this->db->delete('status');
    }
}
?>