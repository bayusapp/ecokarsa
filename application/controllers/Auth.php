<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //view('auth/login');
    echo 'hai';
  }

  // public function logout()
  // {
  //   $this->session->sess_destroy();
  //   redirect();
  // }
}
