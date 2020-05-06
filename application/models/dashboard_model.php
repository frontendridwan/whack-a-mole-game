<?php

class Dashboard_model extends CI_Model
{
    public function getNilaiDesc()
    {
        $this->db->order_by('highscore', 'DESC');
        $query = $this->db->get('tb_user');
        return $query->result_array();
    }
}
