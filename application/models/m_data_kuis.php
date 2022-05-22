<?php
//  berfungsi untuk melayani segala query CRUD database
class M_data_kuis extends CI_Model
{
  public function showQuisionerOperator()
  {
    $query = "SELECT * FROM data_kuisioner WHERE status_kuis = 'Operator'";
    return $this->db->query($query)->result_array();
  }
  public function showQuisionerKepalaDivisi()
  {
    $query = "SELECT * FROM data_kuisioner WHERE status_kuis = 'Kepala Divisi'";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasProductivity()
  {
    $query = "SELECT id_submatrix_proc, prioritas FROM tb_submatriks_productivity";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasKomKer()
  {
    $query = "SELECT id_submatrix_kdk, prioritas FROM tb_submatriks_komdanker";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPelaksana5r()
  {
    $query = "SELECT id_submatrix_p5r, prioritas FROM tb_submatriks_pelaksana5r";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasDokumentasi()
  {
    $query = "SELECT id_submatrix_doc, prioritas FROM tb_submatriks_dokumentasi";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPahamdanLaksanaK3()
  {
    $query = "SELECT id_submatrix_plk3, prioritas FROM tb_submatriks_pahamdanlaksanak3";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPahamSOP()
  {
    $query = "SELECT id_submatrix_pss, prioritas FROM tb_submatriks_pahamsopspk";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPahamTools()
  {
    $query = "SELECT id_submatrix_ptls, prioritas FROM tb_submatriks_pahamtools";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasKehadiran()
  {
    $query = "SELECT id_submatrix_hdr, prioritas FROM tb_submatriks_kehadiran";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasDisiplin()
  {
    $query = "SELECT id_submatrix_dsp, prioritas FROM tb_submatriks_kedisiplinan";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasInisiatif()
  {
    $query = "SELECT id_submatrix_inf, prioritas FROM tb_submatriks_inisiatif";
    return $this->db->query($query)->result_array();
  }

  public function showPriorMatrixOP()
  {
    $query = "SELECT prioritas FROM tb_matriks_op";
    return $this->db->query($query)->result_array();
  }









































  //--- ex ----
  public function tampil_kuisop_where($where, $table)

  {
    $fields = array(
      "data_kuisioner_op.id_kuis_op",
      "tb_kriteria_operator.id_kriteria_op",
      "tb_kriteria_operator.nama_kriteria_op",
      "data_kuisioner_op.kuis_op"

    );

    $this->db->select($fields);
    $this->db->from($table);
    $this->db->join('tb_kriteria_operator', 'data_kuisioner_op.id_kriteria_op = tb_kriteria_operator.id_kriteria_op');
    $this->db->where($where);
    return $this->db->get();
  }

  function tampil_kuisop_akhir()
  {
    $this->db->order_by('id_kuis_op', 'DESC');
    return $this->db->get('data_kuisioner_op', 1);
  }
  public function tampil_kuisop()
  {
    return $this->db->get('data_kuisioner_op');
  }
  function tambah_kuisop($data, $table)
  {
    $this->db->insert($table, $data);
  }
  public function tampil_kuiskasi_where($where, $table)

  {
    $fields = array(
      "data_kuisioner_kasi.id_kuis_kasi",
      "tb_kriteria_kasi.id_kriteria_kasi",
      "tb_kriteria_kasi.nama_kriteria_kasi",
      "data_kuisioner_kasi.kuis_kasi"

    );

    $this->db->select($fields);
    $this->db->from($table);
    $this->db->join('tb_kriteria_kasi', 'data_kuisioner_kasi.id_kriteria_kasi = tb_kriteria_kasi.id_kriteria_kasi');
    $this->db->where($where);
    return $this->db->get();
  }
  public function tampil_kuiskasi()
  {
    return $this->db->get('data_kuisioner_kasi');
  }
  function tampil_kuiskasi_akhir()
  {
    $this->db->order_by('id_kuis_kasi', 'DESC');
    return $this->db->get('data_kuisioner_kasi', 1);
  }
  function tambah_kuiskasi($data, $table)
  {
    $this->db->insert($table, $data);
  }
  function delete_kuis_kasi($where, $table)
  {
    $this->db->delete($table, $where);
  }
}
