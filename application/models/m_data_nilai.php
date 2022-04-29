<?php
//  berfungsi untuk melayani segala query CRUD database
class M_data_nilai extends CI_Model
{

  public function tampil_nilai()
  {
    $query = "SELECT * FROM nilai_banding ORDER BY nilai_banding.id_nilai ASC";
    return $this->db->query($query);
  }
  function tampil_nilai_akhir()
  {
    $this->db->order_by('id_nilai', 'DESC');
    return $this->db->get('nilai_banding', 1);
  }
  function tambah_nilai($data, $table)
  {
    $this->db->insert($table, $data);
  }
}