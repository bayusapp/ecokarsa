<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
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
    $data['paket'] = $this->admin->daftarharga()->result();
    view('admin/v_header', $data);
    view('admin/v_paket', $data);
    view('admin/v_footer');
  }

  public function simpanpaket()
  {
    set_rules('simpan', 'Simpan', 'required');
    if (validation_run() == false) {
      redirect('admin/paket');
    } else {
      $nama_paket   = input('nama_paket');
      $isi_paket    = input('isi_paket');
      $isi_paket    = implode(', ', $isi_paket);
      $harga_paket  = preg_replace('/\D/', '', input('harga_paket'));;
      $qty_paket    = input('qty_paket');
      $terlaris     = input('terlaris');
      $input = array(
        'nama_paket'  => $nama_paket,
        'isi_paket'   => $isi_paket,
        'harga_paket' => $harga_paket,
        'qty_paket'   => $qty_paket,
        'terlaris'    => $terlaris
      );
      $this->admin->insertData('tb_paket', $input);
      set_flashdata('msg', '<div class="alert alert-success">Paket sukses ditambahkan.</div>');
      redirect('admin/paket');
    }
  }
}
