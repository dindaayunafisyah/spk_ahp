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


















   // ------------------------------------------------------- DATA KRITERIA
   //Data KRITERIA OP
   public function showAnalyzeOP()
   {
      $query = "SELECT * FROM tb_analisa_op 
                  WHERE tb_analisa_op.id_anop >= 1 AND tb_analisa_op.id_anop <= 10 
                     ORDER BY tb_analisa_op.id_anop LIMIT 10";
      return $this->db->query($query)->result_array();
   }

   //Data KRITERIA KASI
   public function showAnalyzeKasi()
   {
      $query = "SELECT * FROM tb_analisa_op 
                  WHERE tb_analisa_op.id_anop >= 11 AND tb_analisa_op.id_anop <= 20
                     ORDER BY tb_analisa_op.id_anop LIMIT 10";
      return $this->db->query($query)->result_array();
   }

   // ------------------------------------------------------- DATA KRITERIA

















   // ------------------------------------ Package1
   //Data TB Kriteria OP
   public function sumAnalyzeOP()
   {
      $query = "SELECT SUM(productivity) AS sumProc, SUM(kerjasamadankom) AS sumKdk, SUM(pelaksana5r) AS sump5r, SUM(dokumentasi) AS sumDoc, SUM(paham_laksana_k3) AS sumplk3, SUM(paham_sop) AS sumPsop, SUM(paham_tools) AS sumPtls, SUM(hadir) AS sumHdr, SUM(disiplin) AS sumDsp, SUM(inisiatif) AS sumInf FROM tb_analisa_op WHERE tb_analisa_op.id_anop >= 1 AND tb_analisa_op.id_anop <= 10 
      ORDER BY tb_analisa_op.id_anop LIMIT 10";
      return $this->db->query($query)->row_array();
   }
   public function sumAnalyzeOPResArray()
   {
      $query = "SELECT SUM(productivity) AS '0', SUM(kerjasamadankom) AS '1', SUM(pelaksana5r) AS '2', SUM(dokumentasi) AS '3', SUM(paham_laksana_k3) AS '4', SUM(paham_sop) AS '5', SUM(paham_tools) AS '6', SUM(hadir) AS '7', SUM(disiplin) AS '8', SUM(inisiatif) AS '9' FROM tb_analisa_op WHERE tb_analisa_op.id_anop >= 1 AND tb_analisa_op.id_anop <= 10 
      ORDER BY tb_analisa_op.id_anop LIMIT 10";
      return $this->db->query($query)->row_array();
   }

   //Data Count Kriteria OP
   public function countKritOp()
   {
      $query = "SELECT COUNT(tb_kriteria_operator.nama_kriteria_op) AS jumKritOp FROM tb_kriteria_operator";
      return $this->db->query($query)->row_array();
   }





   // ===========================<>===========================





   //Data TB Kriteria OP
   public function sumAnalyzeKasi()
   {
      $query = "SELECT SUM(productivity) AS sumProc, SUM(kerjasamadankom) AS sumKdk, SUM(pelaksana5r) AS sump5r, SUM(dokumentasi) AS sumDoc, SUM(paham_laksana_k3) AS sumplk3, SUM(paham_sop) AS sumPsop, SUM(paham_tools) AS sumPtls, SUM(hadir) AS sumHdr, SUM(disiplin) AS sumDsp, SUM(inisiatif) AS sumInf FROM tb_analisa_op WHERE tb_analisa_op.id_anop >= 11 AND tb_analisa_op.id_anop <= 20 
      ORDER BY tb_analisa_op.id_anop LIMIT 10";
      return $this->db->query($query)->row_array();
   }
   public function sumAnalyzeKasiResArray()
   {
      $query = "SELECT SUM(productivity) AS '0', SUM(kerjasamadankom) AS '1', SUM(pelaksana5r) AS '2', SUM(dokumentasi) AS '3', SUM(paham_laksana_k3) AS '4', SUM(paham_sop) AS '5', SUM(paham_tools) AS '6', SUM(hadir) AS '7', SUM(disiplin) AS '8', SUM(inisiatif) AS '9' FROM tb_analisa_op WHERE tb_analisa_op.id_anop >= 11 AND tb_analisa_op.id_anop <= 20 
      ORDER BY tb_analisa_op.id_anop LIMIT 10";
      return $this->db->query($query)->row_array();
   }

   //Data Count Kriteria OP
   public function countKritKasi()
   {
      $query = "SELECT COUNT(tb_kriteria_kasi.nama_kriteria_kasi) AS jumKritKasi FROM tb_kriteria_kasi";
      return $this->db->query($query)->row_array();
   }
   // ------------------------------------ Package1








   // ------------------------------------------------------- DATA KRITERIA MATRIX
   //Total Matrik Nilai Kriteria
   public function showMatrixOp()
   {
      $query = "SELECT * FROM tb_matriks_op WHERE tb_matriks_op.id_matop >= 1 AND tb_matriks_op.id_matop <= 10 
      ORDER BY tb_matriks_op.id_matop LIMIT 10";
      return $this->db->query($query)->result_array();
   }
   //Total Matrik Nilai Kriteria
   public function showMatrixKasi()
   {
      $query = "SELECT * FROM tb_matriks_op WHERE tb_matriks_op.id_matop >= 11 AND tb_matriks_op.id_matop <= 20 
      ORDER BY tb_matriks_op.id_matop LIMIT 10";
      return $this->db->query($query)->result_array();
   }
   // ------------------------------------------------------- DATA KRITERIA MATRIX







   // ------------------------------------------------------- Total Matriks
   public function totalNilaiMatriks()
   {
      $query = "SELECT SUM(productivity) AS sumProc, SUM(kerjasamadankom) AS sumKdk, SUM(pelaksana5r) AS sump5r, SUM(dokumentasi) AS sumDoc, SUM(paham_laksana_k3) AS sumplk3, SUM(paham_sop) AS sumPsop, SUM(paham_tools) AS sumPtls, SUM(hadir) AS sumHdr, SUM(disiplin) AS sumDsp, SUM(inisiatif) AS sumInf, SUM(jumlah) AS sumJum, SUM(prioritas) AS sumPrior, SUM(eigen_value) AS sumEig FROM tb_matriks_op 
      WHERE tb_matriks_op.id_matop >= 1 AND tb_matriks_op.id_matop <= 10 
      ORDER BY tb_matriks_op.id_matop LIMIT 10";
      return $this->db->query($query)->row_array();
   }
   public function totalNilaiMatriksKasi()
   {
      $query = "SELECT SUM(productivity) AS sumProc, SUM(kerjasamadankom) AS sumKdk, SUM(pelaksana5r) AS sump5r, SUM(dokumentasi) AS sumDoc, SUM(paham_laksana_k3) AS sumplk3, SUM(paham_sop) AS sumPsop, SUM(paham_tools) AS sumPtls, SUM(hadir) AS sumHdr, SUM(disiplin) AS sumDsp, SUM(inisiatif) AS sumInf, SUM(jumlah) AS sumJum, SUM(prioritas) AS sumPrior, SUM(eigen_value) AS sumEig FROM tb_matriks_op 
      WHERE tb_matriks_op.id_matop >= 11 AND tb_matriks_op.id_matop <= 20 
      ORDER BY tb_matriks_op.id_matop LIMIT 10";
      return $this->db->query($query)->row_array();
   }
   // ------------------------------------------------------- Total Matriks






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

   // ------------ || ------------
   //Pemahaman dan Pelaksanaan K3
   public function showSubrangePahamdanLaksanaK3()
   {
      $query = "SELECT * FROM tb_subrange_pahamdanlaksanak3";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixPahamdanLaksanaK3()
   {
      $query = "SELECT * FROM tb_submatriks_pahamdanlaksanak3";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangePahamdanLaksanaK3()
   {
      $query = "SELECT SUM(paham) AS sumPHM, SUM(kurang_paham) AS sumKrgPhm, SUM(tidak_paham) AS sumTdkPhm FROM tb_subrange_pahamdanlaksanak3";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixPahamdanLaksanaK3()
   {
      $query = "SELECT SUM(paham) AS sumPHM, SUM(kurang_paham) AS sumKrgPhm, SUM(tidak_paham) AS sumTdkPhm, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_pahamdanlaksanak3";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangePahamdanLaksanaK3OPResArray()
   {
      $query = "SELECT SUM(paham) AS '0', SUM(kurang_paham) AS '1', SUM(tidak_paham) AS '2' FROM tb_subrange_pahamdanlaksanak3";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangePahamdanLaksanaK3()
   {
      $query = "SELECT COUNT(tb_subrange_pahamdanlaksanak3.id_subrange_plk3) AS jumSubPLK3 FROM tb_subrange_pahamdanlaksanak3";
      return $this->db->query($query)->row_array();
   }

   // ------------ || ------------
   //Pemahaman dan Pelaksanaan K3
   public function showSubrangePahamSOPSPK()
   {
      $query = "SELECT * FROM tb_subrange_pahamsopspk";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixPahamSOPSPK()
   {
      $query = "SELECT * FROM tb_submatriks_pahamsopspk";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangePahamSOPSPK()
   {
      $query = "SELECT SUM(sangat_mampu) AS sumSgtMampu, SUM(mampu) AS sumMampu, SUM(kurang_mampu) AS sumKrgMampu, SUM(tidak_mampu) AS sumTdkMampu FROM tb_subrange_pahamsopspk";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixPahamSOPSPK()
   {
      $query = "SELECT SUM(sangat_mampu) AS sumSgtMampu, SUM(mampu) AS sumMampu, SUM(kurang_mampu) AS sumKrgMampu, SUM(tidak_mampu) AS sumTdkMampu, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_pahamsopspk";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangePahamSOPSPKOPResArray()
   {
      $query = "SELECT SUM(sangat_mampu) AS '0', SUM(mampu) AS '1', SUM(kurang_mampu) AS '2', SUM(tidak_mampu) AS '3' FROM tb_subrange_pahamsopspk";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangePahamSOPSPK()
   {
      $query = "SELECT COUNT(tb_subrange_pahamsopspk.id_subrange_pss) AS jumSubPSS FROM tb_subrange_pahamsopspk";
      return $this->db->query($query)->row_array();
   }

   // ------------ || ------------
   //Pemahaman Tools
   public function showSubrangePahamTools()
   {
      $query = "SELECT * FROM tb_subrange_pahamtools";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixPahamTools()
   {
      $query = "SELECT * FROM tb_submatriks_pahamtools";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangePahamTools()
   {
      $query = "SELECT SUM(baik) AS sumBaik, SUM(kurang_baik) AS sumKrgBaik, SUM(tidak_baik) AS sumTdkBaik FROM tb_subrange_pahamtools";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixPahamTools()
   {
      $query = "SELECT SUM(baik) AS sumBaik, SUM(kurang_baik) AS sumKrgBaik, SUM(tidak_baik) AS sumTdkBaik, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_pahamtools";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangePahamToolsOPResArray()
   {
      $query = "SELECT SUM(baik) AS '0', SUM(kurang_baik) AS '1', SUM(tidak_baik) AS '2' FROM tb_subrange_pahamtools";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangePahamTools()
   {
      $query = "SELECT COUNT(tb_subrange_pahamtools.id_subrange_ptls) AS jumSubPTLS FROM tb_subrange_pahamtools";
      return $this->db->query($query)->row_array();
   }

   // ------------ || ------------
   //Kehadiran
   public function showSubrangeKehadiran()
   {
      $query = "SELECT * FROM tb_subrange_kehadiran";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixKehadiran()
   {
      $query = "SELECT * FROM tb_submatriks_kehadiran";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangeKehadiran()
   {
      $query = "SELECT SUM(hadir100) AS sum100, SUM(hadir100t) AS sum100t, SUM(hadir90) AS sum90, SUM(hadir90t) AS sum90t, SUM(hadir80) AS sum80, SUM(hadir80t) AS sum80t, SUM(hadir70) AS sum70, SUM(hadir70t) AS sum70t FROM tb_subrange_kehadiran";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixKehadiran()
   {
      $query = "SELECT SUM(hadir100) AS sum100, SUM(hadir100t) AS sum100t, SUM(hadir90) AS sum90, SUM(hadir90t) AS sum90t, SUM(hadir80) AS sum80, SUM(hadir80t) AS sum80t, SUM(hadir70) AS sum70, SUM(hadir70t) AS sum70t, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_kehadiran";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangeKehadiranOPResArray()
   {
      $query = "SELECT SUM(hadir100) AS '0', SUM(hadir100t) AS '1', SUM(hadir90) AS '2', SUM(hadir90t) AS '3', SUM(hadir80) AS '4', SUM(hadir80t) AS '5', SUM(hadir70) AS '6', SUM(hadir70t) AS '7' FROM tb_subrange_kehadiran";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangeKehadiran()
   {
      $query = "SELECT COUNT(tb_subrange_kehadiran.id_subrange_hdr) AS jumSubHDR FROM tb_subrange_kehadiran";
      return $this->db->query($query)->row_array();
   }

   // ------------ || ------------
   //Kehadiran
   public function showSubrangeKedisiplinan()
   {
      $query = "SELECT * FROM tb_subrange_kedisiplinan";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixKedisiplinan()
   {
      $query = "SELECT * FROM tb_submatriks_kedisiplinan";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangeKedisiplinan()
   {
      $query = "SELECT SUM(tidak_melanggar) AS sumTDK_MLGR, SUM(sedikit_melanggar) AS sumSDK_MLGR, SUM(banyak_melanggar) AS sumBYK_MLGR FROM tb_subrange_kedisiplinan";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixKedisiplinan()
   {
      $query = "SELECT SUM(tidak_melanggar) AS sumTDK_MLGR, SUM(sedikit_melanggar) AS sumSDK_MLGR, SUM(banyak_melanggar) AS sumBYK_MLGR, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_kedisiplinan";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangeKedisiplinanOPResArray()
   {
      $query = "SELECT SUM(tidak_melanggar) AS '0', SUM(sedikit_melanggar) AS '1', SUM(banyak_melanggar) AS '2' FROM tb_subrange_kedisiplinan";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangeKedisiplinan()
   {
      $query = "SELECT COUNT(tb_subrange_kedisiplinan.id_subrange_dsp) AS jumSubDSP FROM tb_subrange_kedisiplinan";
      return $this->db->query($query)->row_array();
   }

   // ------------ || ------------
   //Inisiatif
   public function showSubrangeInisiatif()
   {
      $query = "SELECT * FROM tb_subrange_inisiatif";
      return $this->db->query($query)->result_array();
   }
   public function showSubmatrixInisiatif()
   {
      $query = "SELECT * FROM tb_submatriks_inisiatif";
      return $this->db->query($query)->result_array();
   }
   public function sumSubrangeInisiatif()
   {
      $query = "SELECT SUM(sangat_bagus) AS sumSGT_BGS, SUM(bagus) AS sumBGS, SUM(kurang_bagus) AS sumKRG_BGS, SUM(tidak_bagus) AS sumTDK_BGS FROM tb_subrange_inisiatif";
      return $this->db->query($query)->row_array();
   }
   public function sumSubmatrixInisiatif()
   {
      $query = "SELECT SUM(sangat_bagus) AS sumSGT_BGS, SUM(bagus) AS sumBGS, SUM(kurang_bagus) AS sumKRG_BGS, SUM(tidak_bagus) AS sumTDK_BGS, SUM(jumlah) AS submtxJum, SUM(prioritas) AS submtxPrior, SUM(eigen_value) AS submtxEig FROM tb_submatriks_inisiatif";
      return $this->db->query($query)->row_array();
   }
   public function sumSubrangeInisiatifOPResArray()
   {
      $query = "SELECT SUM(sangat_bagus) AS '0', SUM(bagus) AS '1', SUM(kurang_bagus) AS '2', SUM(tidak_bagus) AS '3' FROM tb_subrange_inisiatif";
      return $this->db->query($query)->row_array();
   }
   public function countSubrangeInisiatif()
   {
      $query = "SELECT COUNT(tb_subrange_inisiatif.id_subrange_inf) AS jumSubINF FROM tb_subrange_inisiatif";
      return $this->db->query($query)->row_array();
   }
}
