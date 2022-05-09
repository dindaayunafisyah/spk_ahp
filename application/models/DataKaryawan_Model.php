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
}
