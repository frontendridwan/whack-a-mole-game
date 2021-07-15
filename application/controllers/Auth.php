<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  // konstruktor
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->form_validation->set_rules('captcha', 'Captcha', 'required');

    if ($this->form_validation->run() == false) {

      $path = './assets/captcha/';

      if (!file_exists($path)) {
        $createPath = mkdir($path, 0777);

        if (!$createPath) {
          return;
        }
      }

      $kata = array_merge(range('0', '9'), range('A', 'Z'));
      $acak = shuffle($kata);
      $str = substr(implode($kata), 0, 5);

      $dataCaptcha = array('captcha_str' => $str);
      $this->session->set_userdata($dataCaptcha);

      $vals = array(
        'word' => $str,
        'img_path' => $path,
        'img_url' => base_url() . 'assets/captcha/',
        'img_width' => '150',
        'img_height' => 40,
        'expiration' => 7200
      );
      $capc = create_captcha($vals);

      $var['var_captcha'] = $capc['image'];
      $var['var_title'] = "Login";
      $var['var_content'] = "login";

      $this->load->view('auth', $var);
    } else {
      $this->_signin();
    }
  }

  private function _signin()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $captcha = $this->input->post('captcha');

    $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

    //jika user ada
    if ($user) {
      //cek password
      if (password_verify($password, $user['password'])) {
        // cek captcha
        if ($captcha == $this->session->userdata('captcha_str')) {
          $data = [
            'username' => $user['username']
          ];
          $this->session->set_userdata($data);
          redirect('dashboard');
        } else {
          // captcha salah
          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Wrong captcha!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
          redirect('auth');
        }
      } else {
        // password gagal
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Wrong password!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
        redirect('auth');
      }
    } else {
      //jika user tidak ada
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Warning!</strong> username is not registered! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Congratulation!</strong> you have been logged out! <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
    redirect('auth');
  }
}
