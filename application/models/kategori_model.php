<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_kategori($NAMA_KTG)
    {
        $data = array(
            'NAMA_KTG' => $NAMA_KTG
            );
        $this->db->insert('kategori', $data);
    }

    function lihat_kategori()
    {
        $query = $this->db->get('kategori');
        return $query;
    }

    function form_update_kategori($ID_KTG)
    {
        $this->db->where("ID_KTG", $ID_KTG);
        $query = $this->db->get('kategori');
        return $query;
    }

    function ubah_kategori($ID_KTG, $NAMA_KTG)
    {
        $data = array(
            'NAMA_KTG' => $NAMA_KTG
            );

        $this->db->where("ID_KTG", $ID_KTG);
        $this->db->update('kategori', $data);
    }

    function hapus_kategori($ID_KTG)
    {
        $this->db->where("ID_KTG", $ID_KTG);
        $this->db->delete('kategori');
    }
}
?>