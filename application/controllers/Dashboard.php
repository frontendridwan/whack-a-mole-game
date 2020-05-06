<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    // konstruktor
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('dashboard_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['highscore'] = $this->dashboard_model->getNilaiDesc();

        $this->load->view('dashboard/index', $data);
    }

    public function highscore($id)
    {
        $score = $this->input->post('cobavalue');
        $skorsebelumnya = $this->input->post('hs');

        if ($score > $skorsebelumnya) {
            $this->db->set('highscore', $score);
            $this->db->where('id', $id);
            $this->db->update('tb_user');
        } else {
            $this->db->set('highscore', $skorsebelumnya);
            $this->db->where('id', $id);
            $this->db->update('tb_user');
        }

        redirect('dashboard');
    }
}
