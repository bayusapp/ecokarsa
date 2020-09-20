<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tim extends CI_Controller
{

  var $data;

  public function __construct()
  {
    parent::__construct();
    if (userdata('login') != true) {
      redirect('auth');
    }
    $this->data = array('perusahaan' => $this->admin->dataPerusahaan()->row());
  }

  public function index()
  {
    $data = $this->data;
    $data['tim'] = $this->admin->datatim()->result();
    view('admin/v_header', $data);
    view('admin/v_tim', $data);
    view('admin/v_footer');
  }

  public function simpantim()
  {
    set_rules('simpan', 'Simpan', 'required');
    if (validation_run() == false) {
      redirect('admin/tim');
    } else {
      $nama       = input('nama');
      $posisi     = input('posisi');
      $facebook   = input('facebook');
      $twitter    = input('twitter');
      $instagram  = input('instagram');
      $linkedin   = input('linkedin');
      $input  = array(
        'nama'      => $nama,
        'posisi'    => $posisi,
        'facebook'  => $facebook,
        'twitter'   => $twitter,
        'instagram' => $instagram,
        'linkedin'  => $linkedin
      );
      $foto       = rand(10, 99) . '-' . str_replace(' ', '_', $_FILES['foto']['name']);
      $config['upload_path']    = 'assets/img/tim/';
      $config['allowed_types']  = 'gif|jpg|jpeg|png';
      $config['max_size']       = 1024 * 10;
      $config['file_name']      = $foto;
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto')) {
        $input['foto'] = $config['upload_path'] . $foto;
      }
      $this->admin->insertData('tb_tim', $input);
      set_flashdata('msg', '<div class="alert alert-success">Data sukses ditambahkan.</div>');
      redirect('admin/tim');
    }
  }
}
