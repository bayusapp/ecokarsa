<?php

class M_Admin extends CI_Model
{

  public function insertData($tabel, $data)
  {
    $this->db->insert($tabel, $data);
  }

  public function updateData($tabel, $data, $where, $nilai)
  {
    $this->db->where($where, $nilai);
    $this->db->update($tabel, $data);
  }

  public function daftarproduk()
  {
    return $this->db->get('tb_produk');
  }

  public function daftarharga()
  {
    return $this->db->get('tb_paket');
  }

  public function datatestimoni()
  {
    return $this->db->get('tb_testimoni');
  }

  public function databanner()
  {
    return $this->db->get('tb_banner');
  }

  public function datatim()
  {
    return $this->db->get('tb_tim');
  }

  public function dataPerusahaan()
  {
    return $this->db->get_where('tb_data_perusahaan', array('id_data' => 1));
  }
}
