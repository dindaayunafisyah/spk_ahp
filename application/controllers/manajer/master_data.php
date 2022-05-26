<?php
defined('BASEPATH') or exit('No direct script access allowed');

class master_data extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data_jabatan');
        $this->load->model('m_data_divisi');
        $this->load->model('m_data_kriteria');
        $this->load->model('M_data_nilai', 'mdn');
        $this->load->model('M_data_kuis', 'mdk');
        $this->load->model('DataKaryawan_Model', 'dkm');
        $this->load->helper('url', 'form', 'file');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function penilaian_kasi()
    {
        $this->form_validation->set_rules('productivity', 'Kuis Productivity', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('komker', 'Kuis Komunikasi dan Kerjasama', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('pelaksana5r', 'Kuis Pelaksanaan 5 R', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('dokumentasi', 'Kuis Dokumentasi', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('pahamdanlaksanak3', 'Kuis Pemahaman dan Pelaksanaan K3', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('pahamsop', 'Kuis Paham SOP dan SPK', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('pahamtools', 'Kuis Paham Tools', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('hadir', 'Kuis Kehadiran', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('disiplin', 'Kuis Kedisiplinan', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('inisiatif', 'Kuis Inisiatif', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        // <===>
        $this->form_validation->set_rules('nama_karyawan', 'Nama', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('id_divisi', 'ID Divisi', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('id_jabatan', 'ID Jabatan', 'required', [
            'required' => '%s tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {

            $data['title'] = "penilaian_kasi";
            $data['data'] = $this->mdn->showPenilaianKasi()->result_array();
            $data['karyawan'] = $this->dkm->showDataKepdis();
            $data['quiz'] = $this->mdk->showQuisionerKepalaDivisi();
            $data['jawaban_productivity'] = $this->mdk->showKasiPrioritasProductivity();
            $data['jawaban_komker'] = $this->mdk->showKasiPrioritasLeadership();
            $data['jawaban_pelaksana5r'] = $this->mdk->showKasiPrioritasPelaksana5r();
            $data['jawaban_dokumentasi'] = $this->mdk->showKasiPrioritasDokumentasi();
            $data['jawaban_pahamdanlaksanak3'] = $this->mdk->showKasiPrioritasPahamdanLaksanaK3();
            $data['jawaban_pahamsop'] = $this->mdk->showKasiPrioritasPahamSOP();
            $data['jawaban_pahamtools'] = $this->mdk->showKasiPrioritasKPM();
            $data['jawaban_hadir'] = $this->mdk->showKasiPrioritasKehadiran();
            $data['jawaban_disiplin'] = $this->mdk->showKasiPrioritasDisiplin();
            $data['jawaban_inisiatif'] = $this->mdk->showKasiPrioritasInisiatif();

            // echo "<pre>";
            // print_r($data['product']);
            // die;
            // echo "</pre>";
            $this->load->view('manajer/tamplate/header');
            $this->load->view('manajer/tamplate/sidebar', $data);
            $this->load->view('manajer/tamplate/penilaian_kasi', $data);
            $this->load->view('manajer/tamplate/footer', $data);
        } else {
            $data['kriteria'] = $this->mdk->showPriorMatrixOP();
            $product = $data['kriteria'][10]['prioritas'];
            $komker = $data['kriteria'][11]['prioritas'];
            $pl5r = $data['kriteria'][12]['prioritas'];
            $doc = $data['kriteria'][13]['prioritas'];
            $plk3 = $data['kriteria'][14]['prioritas'];
            $pss = $data['kriteria'][15]['prioritas'];
            $ptls = $data['kriteria'][16]['prioritas'];
            $hdr = $data['kriteria'][17]['prioritas'];
            $dsp = $data['kriteria'][18]['prioritas'];
            $inf = $data['kriteria'][19]['prioritas'];

            $p1 = $this->input->post('productivity');
            $p2 = $this->input->post('komker');
            $p3 = $this->input->post('pelaksana5r');
            $p4 = $this->input->post('dokumentasi');
            $p5 = $this->input->post('pahamdanlaksanak3');
            $p6 = $this->input->post('pahamsop');
            $p7 = $this->input->post('pahamtools');
            $p8 = $this->input->post('hadir');
            $p9 = $this->input->post('disiplin');
            $p10 = $this->input->post('inisiatif');

            $q1 = doubleval($p1) * $product;
            $q2 = doubleval($p2) * $komker;
            $q3 = doubleval($p3) * $pl5r;
            $q4 = doubleval($p4) * $doc;
            $q5 = doubleval($p5) * $plk3;
            $q6 = doubleval($p6) * $pss;
            $q7 = doubleval($p7) * $ptls;
            $q8 = doubleval($p8) * $hdr;
            $q9 = doubleval($p9) * $dsp;
            $q10 = doubleval($p10) * $inf;

            $total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10;


            $data = [
                'productivity' => $q1,
                // <===>
                'komker' => $q2,
                // <===>
                'pelaksana5r' => $q3,
                // <===>
                'dokumentasi' => $q4,
                // <===>
                'pahamdanlaksanak3' => $q5,
                // <===>
                'pahamsop' => $q6,
                // <===>
                'pahamtools' => $q7,
                // <===>
                'kehadiran' => $q8,
                // <===>
                'kedisiplinan' => $q9,
                // <===>
                'inisiatif' => $q10,
                // <===>
                'nama_karyawan' => $this->input->post('nama_karyawan'),
                'id_divisi' => $this->input->post('id_divisi'),
                'id_jabatan' => $this->input->post('id_jabatan'),
                // 
                'total' => $total
            ];

            // echo "<pre>";
            // print_r($data);
            // die;
            // echo "</pre>";

            $query = $this->db->insert('tb_penilaian', $data);
            if ($query) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Kasi Sukses dinilai
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('manajer/master_data/penilaian_kasi');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       Kasi  Gagal dinilai
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('manajer/master_data/penilaian_kasi');
            }
        }
    }

    public function ajax_show_karyawan()
    {
        $nama_karyawan = $this->input->post('nama_karyawan');

        $bio = $this->mdn->ajax_show_karyawan($nama_karyawan);

        $data = array(
            'id_divisi' => $bio['id_divisi'],
            'id_jabatan' => $bio['id_jabatan'],
        );

        echo json_encode($data);
    }
}
