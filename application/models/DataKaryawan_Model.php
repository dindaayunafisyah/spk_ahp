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
   // ------------- Productivity ------------- //
   public function showSubrangeProductivity()
   {
      $query = "SELECT * FROM tb_subrange_productivity";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixProductivity()
   {
      $query = "SELECT * FROM tb_submatriks_productivity";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangeProductivity()
   {
      $query = "SELECT SUM(pekerjaan_90) AS sum90, SUM(pekerjaan_80_90) AS sum8090, SUM(pekerjaan_60_79) AS sum6079, SUM(pekerjaan_59) AS sum59 FROM tb_subrange_productivity";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixProductivity()
   {
      $query = "SELECT SUM(pekerjaan_90) AS sum90, SUM(pekerjaan_80_90) AS sum8090, SUM(pekerjaan_60_79) AS sum6079, SUM(pekerjaan_59) AS sum59, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_productivity";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangeProductivityOPResArray()
   {
      $query = "SELECT SUM(pekerjaan_90) AS '0', SUM(pekerjaan_80_90) AS '1', SUM(pekerjaan_60_79) AS '2', SUM(pekerjaan_59) AS '3' FROM tb_subrange_productivity";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangeProductivity()
   {
      $query = "SELECT COUNT(tb_subrange_productivity.id_subrange_proc) AS jumSubProc FROM tb_subrange_productivity";
      return $this->db->query($query)->row_array();
   }







   // ------------ || ------------
   //Kerjasama dan Komunikasi
   public function showSubrangeKomdanKer()
   {
      $query = "SELECT * FROM tb_subrange_komdanker";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixKomdanKer()
   {
      $query = "SELECT * FROM tb_submatriks_komdanker";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangeKomdanKer()
   {
      $query = "SELECT SUM(sangat_baik) AS sumSB, SUM(baik) AS sumBaik, SUM(kurang) AS sumKurang, SUM(tidak_mampu) AS sumTK FROM tb_subrange_komdanker";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixKomdanKer()
   {
      $query = "SELECT SUM(sangat_baik) AS sumSB, SUM(baik) AS sumBaik, SUM(kurang) AS sumKurang, SUM(tidak_mampu) AS sumTK, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_komdanker";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangeKomdanKerOPResArray()
   {
      $query = "SELECT SUM(sangat_baik) AS '0', SUM(baik) AS '1', SUM(kurang) AS '2', SUM(tidak_mampu) AS '3' FROM tb_subrange_komdanker";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangeKomdanKer()
   {
      $query = "SELECT COUNT(tb_subrange_komdanker.id_subrange_kdk) AS jumSubKdk FROM tb_subrange_komdanker";
      return $this->db->query($query)->row_array();
   }







   // ------------ || ------------
   //Pelaksana 5 R
   public function showSubrangePelaksana5R()
   {
      $query = "SELECT * FROM tb_subrange_pelaksana5r";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixPelaksana5R()
   {
      $query = "SELECT * FROM tb_submatriks_pelaksana5r";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangePelaksana5R()
   {
      $query = "SELECT SUM(melaksanakan) AS sumLaks, SUM(kurang_melaksanakan) AS sumKurLaks, SUM(tidak_melaksanakan) AS sumTidLaks FROM tb_subrange_pelaksana5r";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixPelaksana5R()
   {
      $query = "SELECT SUM(melaksanakan) AS sumLaks, SUM(kurang_melaksanakan) AS sumKurLaks, SUM(tidak_melaksanakan) AS sumTidLaks, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_pelaksana5r";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangePelaksana5ROPResArray()
   {
      $query = "SELECT SUM(melaksanakan) AS '0', SUM(kurang_melaksanakan) AS '1', SUM(tidak_melaksanakan) AS '2' FROM tb_subrange_pelaksana5r";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangePelaksana5R()
   {
      $query = "SELECT COUNT(tb_subrange_pelaksana5r.id_subrange_p5r) AS jumSubp5r FROM tb_subrange_pelaksana5r";
      return $this->db->query($query)->row_array();
   }







   // ------------ || ------------
   //Dokumentasi
   public function showSubrangeDokumentasi()
   {
      $query = "SELECT * FROM tb_subrange_dokumentasi";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixDokumentasi()
   {
      $query = "SELECT * FROM tb_submatriks_dokumentasi";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangeDokumentasi()
   {
      $query = "SELECT SUM(sgt_lkp_sesuai) AS sumSLS, SUM(lkp) AS sumLengkap, SUM(krg_lkp_tdk_sesuai) AS sumKLTS, SUM(tidak_mampu) AS sumTdkMampu FROM tb_subrange_dokumentasi";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixDokumentasi()
   {
      $query = "SELECT SUM(sgt_lkp_sesuai) AS sumSLS, SUM(lkp) AS sumLengkap, SUM(krg_lkp_tdk_sesuai) AS sumKLTS, SUM(tidak_mampu) AS sumTdkMampu, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_dokumentasi";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangeDokumentasiOPResArray()
   {
      $query = "SELECT SUM(sgt_lkp_sesuai) AS '0', SUM(lkp) AS '1', SUM(krg_lkp_tdk_sesuai) AS '2', SUM(tidak_mampu) AS '3' FROM tb_subrange_dokumentasi";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangeDokumentasi()
   {
      $query = "SELECT COUNT(tb_subrange_dokumentasi.id_subrange_doc) AS jumSubDoc FROM tb_subrange_dokumentasi";
      return $this->db->query($query)->row_array();
   }
}
