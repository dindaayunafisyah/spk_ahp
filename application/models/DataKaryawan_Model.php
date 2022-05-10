<?php

class DataKaryawan_Model extends CI_Model
{
   //show data operator
   public function showDataOperator()
   {
      $query = "SELECT * FROM tb_karyawan WHERE tb_karyawan.id_jabatan = 'JB004' ORDER BY tb_karyawan.id_divisi DESC";
      return $this->db->query($query)->result_array();
   }
   //show data kepala divisi
   public function showDataKepdis()
   {
      $query = "SELECT * FROM tb_karyawan WHERE tb_karyawan.id_jabatan = 'JB003' ORDER BY tb_karyawan.id_karyawan DESC";
      return $this->db->query($query)->result_array();
   }


   //Data analisa OP
   public function showAnalyzeOP()
   {
      $query = "SELECT * FROM tb_analisa_op";
      return $this->db->query($query)->result_array();
   }

   //Data TB Kriteria OP
   public function sumAnalyzeOP()
   {
      $query = "SELECT SUM(productivity) AS sumProc, SUM(kerjasamadankom) AS sumKdk, SUM(pelaksana5r) AS sump5r, SUM(dokumentasi) AS sumDoc, SUM(paham_laksana_k3) AS sumplk3, SUM(paham_sop) AS sumPsop, SUM(paham_tools) AS sumPtls, SUM(hadir) AS sumHdr, SUM(disiplin) AS sumDsp, SUM(inisiatif) AS sumInf FROM tb_analisa_op";
      return $this->db->query($query)->row_array();
   }
   public function sumAnalyzeOPResArray()
   {
      $query = "SELECT SUM(productivity) AS '0', SUM(kerjasamadankom) AS '1', SUM(pelaksana5r) AS '2', SUM(dokumentasi) AS '3', SUM(paham_laksana_k3) AS '4', SUM(paham_sop) AS '5', SUM(paham_tools) AS '6', SUM(hadir) AS '7', SUM(disiplin) AS '8', SUM(inisiatif) AS '9' FROM tb_analisa_op";
      return $this->db->query($query)->row_array();
   }

   //Data Count Kriteria OP
   public function countKritOp()
   {
      $query = "SELECT COUNT(tb_kriteria_operator.nama_kriteria_op) AS jumKritOp FROM tb_kriteria_operator";
      return $this->db->query($query)->row_array();
   }

   //Total Matrik Nilai Kriteria
   public function showMatrixOp()
   {
      $query = "SELECT * FROM tb_matriks_op";
      return $this->db->query($query)->result_array();
   }
   public function totalNilaiMatriks()
   {
      $query = "SELECT SUM(productivity) AS sumProc, SUM(kerjasamadankom) AS sumKdk, SUM(pelaksana5r) AS sump5r, SUM(dokumentasi) AS sumDoc, SUM(paham_laksana_k3) AS sumplk3, SUM(paham_sop) AS sumPsop, SUM(paham_tools) AS sumPtls, SUM(hadir) AS sumHdr, SUM(disiplin) AS sumDsp, SUM(inisiatif) AS sumInf, SUM(jumlah) AS sumJum, SUM(prioritas) AS sumPrior, SUM(eigen_value) AS sumEig FROM tb_matriks_op";
      return $this->db->query($query)->row_array();
   }





   //Subrange Kriteria
   public function showSubrangeProductivity()
   {
      $query = "SELECT * FROM tb_subrange_productivity";
      return $this->db->query($query)->result_array();
   }
   public function showSubrangeKomdanKer()
   {
      $query = "SELECT * FROM tb_subrange_komdanker";
      return $this->db->query($query)->result_array();
   }
}
