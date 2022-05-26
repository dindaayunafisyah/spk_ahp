<?php
//  berfungsi untuk melayani segala query CRUD database
class M_data_kriteria extends CI_Model
{

  public function tampil_kriteria_op()
  {
    $query = "SELECT * FROM tb_kriteria_operator ORDER BY tb_kriteria_operator.id_kriteria_op ASC";

    $getUserb = $this->db->query($query);
    return $getUserb;
  }


  //  ================== v-v ==================
  function tampil_kriteria_akhir_op()
  {
    $this->db->order_by('id_kriteria_op', 'DESC');
    return $this->db->get('tb_kriteria_operator', 1);
  }
  function tambah_kriteria_op($data, $table)
  {
    $this->db->insert($table, $data);
  }
  function delete_kriteria_op($where, $table)
  {
    $this->db->delete($table, $where);
  }
  function edit_kriteria_op($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function tampil_kriteria_kasi()
  {
    return $this->db->get('tb_kriteria_kasi');
  }
  function tampil_kriteria_akhir_kasi()
  {
    $this->db->order_by('id_kriteria_kasi', 'DESC');
    return $this->db->get('tb_kriteria_kasi', 1);
  }
  function tambah_kriteria_kasi($data, $table)
  {
    $this->db->insert($table, $data);
  }
  function delete_kriteria_kasi($where, $table)
  {
    $this->db->delete($table, $where);
  }
  function edit_kriteria_kasi($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
}
