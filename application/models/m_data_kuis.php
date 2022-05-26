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

  // 
  public function showPrioritasProductivity()
  {
    $query = "SELECT id_submatrix_proc, prioritas FROM tb_submatriks_productivity
                WHERE tb_submatriks_productivity.id_submatrix_proc >= 1 AND tb_submatriks_productivity.id_submatrix_proc <= 4
                  ORDER BY tb_submatriks_productivity.id_submatrix_proc ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasKomKer()
  {
    $query = "SELECT id_submatrix_kdk, prioritas FROM tb_submatriks_komdanker
                 WHERE tb_submatriks_komdanker.id_submatrix_kdk >= 1 AND tb_submatriks_komdanker.id_submatrix_kdk <= 4
                  ORDER BY tb_submatriks_komdanker.id_submatrix_kdk ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPelaksana5r()
  {
    $query = "SELECT id_submatrix_p5r, prioritas FROM tb_submatriks_pelaksana5r
                WHERE tb_submatriks_pelaksana5r.id_submatrix_p5r >= 1 AND tb_submatriks_pelaksana5r.id_submatrix_p5r <= 3
                  ORDER BY tb_submatriks_pelaksana5r.id_submatrix_p5r ASC LIMIT 3";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasDokumentasi()
  {
    $query = "SELECT id_submatrix_doc, prioritas FROM tb_submatriks_dokumentasi
                WHERE tb_submatriks_dokumentasi.id_submatrix_doc >= 1 AND tb_submatriks_dokumentasi.id_submatrix_doc <= 4
                  ORDER BY tb_submatriks_dokumentasi.id_submatrix_doc ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPahamdanLaksanaK3()
  {
    $query = "SELECT id_submatrix_plk3, prioritas FROM tb_submatriks_pahamdanlaksanak3
                WHERE tb_submatriks_pahamdanlaksanak3.id_submatrix_plk3 >= 1 AND tb_submatriks_pahamdanlaksanak3.id_submatrix_plk3 <= 3
                  ORDER BY tb_submatriks_pahamdanlaksanak3.id_submatrix_plk3 ASC LIMIT 3";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPahamSOP()
  {
    $query = "SELECT id_submatrix_pss, prioritas FROM tb_submatriks_pahamsopspk
                WHERE tb_submatriks_pahamsopspk.id_submatrix_pss >= 1 AND tb_submatriks_pahamsopspk.id_submatrix_pss <= 4
                  ORDER BY tb_submatriks_pahamsopspk.id_submatrix_pss ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasPahamTools()
  {
    $query = "SELECT id_submatrix_ptls, prioritas FROM tb_submatriks_pahamtools";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasKehadiran()
  {
    $query = "SELECT id_submatrix_hdr, prioritas FROM tb_submatriks_kehadiran
                WHERE tb_submatriks_kehadiran.id_submatrix_hdr >= 1 AND tb_submatriks_kehadiran.id_submatrix_hdr <= 8
                  ORDER BY tb_submatriks_kehadiran.id_submatrix_hdr ASC LIMIT 8";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasDisiplin()
  {
    $query = "SELECT id_submatrix_dsp, prioritas FROM tb_submatriks_kedisiplinan
                WHERE tb_submatriks_kedisiplinan.id_submatrix_dsp >= 1 AND tb_submatriks_kedisiplinan.id_submatrix_dsp <= 3
                  ORDER BY tb_submatriks_kedisiplinan.id_submatrix_dsp ASC LIMIT 3";
    return $this->db->query($query)->result_array();
  }
  public function showPrioritasInisiatif()
  {
    $query = "SELECT id_submatrix_inf, prioritas FROM tb_submatriks_inisiatif
                WHERE tb_submatriks_inisiatif.id_submatrix_inf >= 1 AND tb_submatriks_inisiatif.id_submatrix_inf <= 4
                  ORDER BY tb_submatriks_inisiatif.id_submatrix_inf ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }

  public function showPriorMatrixOP()
  {
    $query = "SELECT prioritas FROM tb_matriks_op";
    return $this->db->query($query)->result_array();
  }









  // 
  public function showKasiPrioritasProductivity()
  {
    $query = "SELECT id_submatrix_proc, prioritas FROM tb_submatriks_productivity
                WHERE tb_submatriks_productivity.id_submatrix_proc >= 5 AND tb_submatriks_productivity.id_submatrix_proc <= 8
                  ORDER BY tb_submatriks_productivity.id_submatrix_proc ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasLeadership()
  {
    $query = "SELECT id_submatrix_kdk, prioritas FROM tb_submatriks_komdanker
                 WHERE tb_submatriks_komdanker.id_submatrix_kdk >= 5 AND tb_submatriks_komdanker.id_submatrix_kdk <= 8
                  ORDER BY tb_submatriks_komdanker.id_submatrix_kdk ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasPelaksana5r()
  {
    $query = "SELECT id_submatrix_p5r, prioritas FROM tb_submatriks_pelaksana5r
                WHERE tb_submatriks_pelaksana5r.id_submatrix_p5r >= 4 AND tb_submatriks_pelaksana5r.id_submatrix_p5r <= 6
                  ORDER BY tb_submatriks_pelaksana5r.id_submatrix_p5r ASC LIMIT 3";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasDokumentasi()
  {
    $query = "SELECT id_submatrix_doc, prioritas FROM tb_submatriks_dokumentasi
                WHERE tb_submatriks_dokumentasi.id_submatrix_doc >= 5 AND tb_submatriks_dokumentasi.id_submatrix_doc <= 8
                  ORDER BY tb_submatriks_dokumentasi.id_submatrix_doc ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasPahamdanLaksanaK3()
  {
    $query = "SELECT id_submatrix_plk3, prioritas FROM tb_submatriks_pahamdanlaksanak3
                WHERE tb_submatriks_pahamdanlaksanak3.id_submatrix_plk3 >= 4 AND tb_submatriks_pahamdanlaksanak3.id_submatrix_plk3 <= 6
                  ORDER BY tb_submatriks_pahamdanlaksanak3.id_submatrix_plk3 ASC LIMIT 3";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasPahamSOP()
  {
    $query = "SELECT id_submatrix_pss, prioritas FROM tb_submatriks_pahamsopspk
                WHERE tb_submatriks_pahamsopspk.id_submatrix_pss >= 5 AND tb_submatriks_pahamsopspk.id_submatrix_pss <= 8
                  ORDER BY tb_submatriks_pahamsopspk.id_submatrix_pss ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasKPM()
  {
    $query = "SELECT id_submatrix_pss, prioritas FROM tb_submatriks_pahamsopspk
                WHERE tb_submatriks_pahamsopspk.id_submatrix_pss >= 9 AND tb_submatriks_pahamsopspk.id_submatrix_pss <= 12
                  ORDER BY tb_submatriks_pahamsopspk.id_submatrix_pss ASC LIMIT 4";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasKehadiran()
  {
    $query = "SELECT id_submatrix_hdr, prioritas FROM tb_submatriks_kehadiran
                WHERE tb_submatriks_kehadiran.id_submatrix_hdr >= 9 AND tb_submatriks_kehadiran.id_submatrix_hdr <= 16
                  ORDER BY tb_submatriks_kehadiran.id_submatrix_hdr ASC LIMIT 8";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasDisiplin()
  {
    $query = "SELECT id_submatrix_dsp, prioritas FROM tb_submatriks_kedisiplinan
                WHERE tb_submatriks_kedisiplinan.id_submatrix_dsp >= 4 AND tb_submatriks_kedisiplinan.id_submatrix_dsp <= 6
                  ORDER BY tb_submatriks_kedisiplinan.id_submatrix_dsp ASC LIMIT 3";
    return $this->db->query($query)->result_array();
  }
  public function showKasiPrioritasInisiatif()
  {
    $query = "SELECT id_submatrix_inf, prioritas FROM tb_submatriks_inisiatif
                WHERE tb_submatriks_inisiatif.id_submatrix_inf >= 5 AND tb_submatriks_inisiatif.id_submatrix_inf <= 8
                  ORDER BY tb_submatriks_inisiatif.id_submatrix_inf ASC LIMIT 4";
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
