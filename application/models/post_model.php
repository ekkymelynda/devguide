<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database('default','true');
    }
    
    function buat_post($ID_KTG, $ID_STS, $ID_BAB, $ID_SBAB1, $ID_SBAB2, $ID_SBAB3, $USERNAME_PGN, $JUDUL_PST, $ISI_PST, $LINK_PST, $CREATE_PST)
    {
        $data = array(
            'ID_KTG' => $ID_KTG,
            'ID_STS' => $ID_STS,
            'ID_BAB' => $ID_BAB,
            'ID_SBAB1' => $ID_SBAB1,
            'ID_SBAB2' => $ID_SBAB2,
            'ID_SBAB3' => $ID_SBAB3,
            'USERNAME_PGN' => $USERNAME_PGN,
            'JUDUL_PST' => $JUDUL_PST,
            'ISI_PST' => $ISI_PST,
            'LINK_PST' => $LINK_PST,
            'CREATE_PST' => $CREATE_PST
            );
        $this->db->insert('post', $data);
    }

    function lihat_post()
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`;
        ");
        return $query->result();
    }

    function form_update_post($ID_PST)
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_PST` = $ID_PST AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`;
        ");
        return $query->result();
    }

    function ubah_post($ID_PST, $ID_KTG, $ID_STS, $ID_BAB, $ID_SBAB1, $ID_SBAB2, $ID_SBAB3, $USERNAME_PGN, $JUDUL_PST, $ISI_PST, $LINK_PST, $UPDATE_PST)
    {
        $data = array(
            'ID_KTG' => $ID_KTG,
            'ID_STS' => $ID_STS,
            'ID_BAB' => $ID_BAB,
            'ID_SBAB1' => $ID_SBAB1,
            'ID_SBAB2' => $ID_SBAB2,
            'ID_SBAB3' => $ID_SBAB3,
            'USERNAME_PGN' => $USERNAME_PGN,
            'JUDUL_PST' => $JUDUL_PST,
            'ISI_PST' => $ISI_PST,
            'LINK_PST' => $LINK_PST,
            'UPDATE_PST' => $UPDATE_PST
            );

        $this->db->where("ID_PST", $ID_PST);
        $this->db->update('post', $data);
    }

    function hapus_post($ID_PST)
    {
        $this->db->where("ID_PST", $ID_PST);
        $this->db->delete('post');
    }

    function lihat_kategori()
    {
        $this->db->distinct();
        $query = $this->db->get('kategori');
        return $query->result();
    }

    function lihat_status()
    {
        $this->db->distinct();
        $query = $this->db->get('status');
        return $query->result();
    }

    function lihat_bab()
    {
        $this->db->distinct();
        $query = $this->db->get('bab');
        return $query->result();
    }

    function lihat_subbab1()
    {
        $this->db->distinct();
        $query = $this->db->get('subbab1');
        return $query->result();
    }

    function lihat_subbab2()
    {
        $this->db->distinct();
        $query = $this->db->get('subbab2');
        return $query->result();
    }

    function lihat_subbab3()
    {
        $this->db->distinct();
        $query = $this->db->get('subbab3');
        return $query->result();
    }

    function lihat_post_sipmaba()
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_STS` = '1' AND p.`ID_KTG` = '1' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`
                                            ORDER BY p.`LINK_PST` ASC;
        ");
        return $query->result();
    }

    function lihat_post_esurat()
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_STS` = '1' AND p.`ID_KTG` = '2' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`
                                            ORDER BY p.`LINK_PST` ASC;
        ");
        return $query->result();
    }

    function lihat_post_silacak()
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_STS` = '1' AND p.`ID_KTG` = '3' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`
                                            ORDER BY p.`LINK_PST` ASC;
        ");
        return $query->result();
    }

    function lihat_post_simpeg()
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_STS` = '1' AND p.`ID_KTG` = '4' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`
                                            ORDER BY p.`LINK_PST` ASC;
        ");
        return $query->result();
    }

    function form_update_post_sipmaba($ID_PST)
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_PST` = $ID_PST AND p.`ID_STS` = '1' AND p.`ID_KTG` = '1' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`;
        ");
        return $query->result();
    }

    function form_update_post_esurat($ID_PST)
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_PST` = $ID_PST AND p.`ID_STS` = '1' AND p.`ID_KTG` = '2' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`;
        ");
        return $query->result();
    }

    function form_update_post_silacak($ID_PST)
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_PST` = $ID_PST AND p.`ID_STS` = '1' AND p.`ID_KTG` = '3' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`;
        ");
        return $query->result();
    }

    function form_update_post_simpeg($ID_PST)
    {
        $query=$this->db->query("SELECT *
                                    FROM `post` p, `bab` b, `kategori` k, `status` s, `subbab1` sb1, `subbab2` sb2, `subbab3` sb3, `pengguna` u
                                        WHERE p.`ID_PST` = $ID_PST AND p.`ID_STS` = '1' AND p.`ID_KTG` = '4' AND p.`ID_BAB` = b.`ID_BAB` AND p.`ID_KTG` = k.`ID_KTG` AND p.`ID_STS` = s.`ID_STS` AND p.`ID_SBAB1` = sb1.`ID_SBAB1` AND p.`ID_SBAB2` = sb2.`ID_SBAB2` AND p.`ID_SBAB3` = sb3.`ID_SBAB3` AND p.`USERNAME_PGN` = u.`USERNAME_PGN`;
        ");
        return $query->result();
    }
}
?>