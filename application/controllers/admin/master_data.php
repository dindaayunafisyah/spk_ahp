<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_data extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data_jabatan');
        $this->load->model('m_data_divisi');
        $this->load->model('m_data_kriteria');
        $this->load->model('m_data_nilai');
        $this->load->model('m_data_kuis');
        $this->load->model('DataKaryawan_Model');
        $this->load->helper('url', 'form', 'file');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    //  method yang akan diakses saat controller ini diakses
    public function tampil_jabatan()
    {
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['jabatan'] = $this->m_data_jabatan->tampil_jabatan()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_jabatan', $data);
        $this->load->view('admin/tamplate/footer');
    }

    public function tambah_jabatan()
    {
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
        // Mendapatkan jumlah produk yang ada di database
        $jumlahJabatan = $this->m_data_jabatan->tampil_jabatan()->num_rows();
        // Jika jumlah produk lebih dari 0
        if ($jumlahJabatan > 0) {
            // Mengambil id produk sebelumnya
            $lastId = $this->m_data_jabatan->tampil_jabatan_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id produk
                $rawIdJabatan = substr($row->id_jabatan, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
                $idJabatanInt = intval($rawIdJabatan);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($idJabatanInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_jabatan = "JB00" . ($idJabatanInt + 1);
                } else if (strlen($idJabatanInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_jabatan = "JB0" . ($idJabatanInt + 1);
                } else if (strlen($idJabatanInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_jabatan = "JB" . ($idJabatanInt + 1);
                }
            }
        } else {
            // Jika jumlah paket soal kurang dari sama dengan 0
            $id_jabatan = "JB001";
        }


        $data = array(
            'id_jabatan' => $id_jabatan
        );
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_tambah_jabatan', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function aksitambah_jabatan()
    {
        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
        $id_jabatan = $this->input->post('id_jabatan');
        $nama_jabatan = $this->input->post('nama_jabatan');
        // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
        $data = array(
            'id_jabatan' => $id_jabatan,
            'nama_jabatan' => $nama_jabatan

        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
        $this->m_data_jabatan->tambah_jabatan($data, 'tb_jabatan');
        // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
        <strong>Selamat!</strong> Anda Berhasil Menambahkan Data Jabatan. Data yang baru ditambahkan dapat dilihat di tabel.
        </div>
        ');

        redirect('admin/master_data/tampil_jabatan');
    }

    public function hapus_jabatan($id)
    {
        $where = array(
            'id_jabatan' => $id
        );

        $this->m_data_jabatan->delete_jabatan($where, 'tb_jabatan');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
        <strong>Berhasil!</strong> Data anda telah terhapus.
        </div>
        ');
        redirect('admin/master_data/tampil_jabatan');
    }

    public function tampil_divisi()
    {
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['divisi'] = $this->m_data_divisi->tampil_divisi()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_divisi', $data);
        $this->load->view('admin/tamplate/footer');
    }

    public function tambah_divisi()
    {
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
        // Mendapatkan jumlah produk yang ada di database
        $jumlahDivisi = $this->m_data_divisi->tampil_divisi()->num_rows();
        // Jika jumlah produk lebih dari 0
        if ($jumlahDivisi > 0) {
            // Mengambil id produk sebelumnya
            $lastId = $this->m_data_divisi->tampil_divisi_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id produk
                $rawIdDivisi = substr($row->id_divisi, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
                $idDivisiInt = intval($rawIdDivisi);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($idDivisiInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_divisi = "DV00" . ($idDivisiInt + 1);
                } else if (strlen($idDivisiInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_divisi = "DV0" . ($idDivisiInt + 1);
                } else if (strlen($idDivisiInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_divisi = "DV" . ($idDivisiInt + 1);
                }
            }
        } else {
            // Jika jumlah paket soal kurang dari sama dengan 0
            $id_divisi = "DV001";
        }


        $data = array(
            'id_divisi' => $id_divisi
        );
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_tambah_divisi', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function aksitambah_divisi()
    {
        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
        $id_divisi = $this->input->post('id_divisi');
        $nama_divisi = $this->input->post('nama_divisi');
        // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
        $data = array(
            'id_divisi' => $id_divisi,
            'nama_divisi' => $nama_divisi

        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
        $this->m_data_divisi->tambah_divisi($data, 'tb_divisi');
        // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
        $this->session->set_flashdata('pesan', '
         <div class="alert alert-success" role="alert">
         <strong>Selamat!</strong> Anda Berhasil Menambahkan Data Divisi. Data yang baru ditambahkan dapat dilihat di tabel.
         </div>
         ');

        redirect('admin/master_data/tampil_divisi');
    }

    public function hapus_divisi($id)
    {
        $where = array(
            'id_divisi' => $id
        );

        $this->m_data_divisi->delete_divisi($where, 'tb_divisi');
        $this->session->set_flashdata('pesan', '
         <div class="alert alert-success" role="alert">
         <strong>Berhasil!</strong> Data anda telah terhapus.
         </div>
         ');
        redirect('admin/master_data/tampil_divisi');
    }






    // ---------------------- Data Karyawan ----------------------

    // ---------------------- Data Operator ----------------------
    public function data_operator()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        // $this->form_validation->set_rules('id_jabatan', 'ID JABATAN', 'required|trim', [
        //     'required' => '%s tidak boleh kosong',
        // ]);
        $this->form_validation->set_rules('id_divisi', 'ID DIVISI', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Data Operator';
            $data['data_operator'] = $this->DataKaryawan_Model->showDataOperator();
            $data['data_divisi'] = $this->m_data_divisi->showDataDivisi();
            // $data['data_jabatan'] = $this->m_data_jabatan->tampil_jabatan()->result();
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/data_operator', $data);
            $this->load->view('admin/tamplate/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'id_jabatan' => 'JB004',
                'id_divisi' => $this->input->post('id_divisi'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
            ];
            $true = $this->db->insert('tb_karyawan', $data);
            if ($true) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Sukses ditambah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/data_operator');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Gagal ditambah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/data_operator');
            }
        }
    }

    public function update_data_operator()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        // $this->form_validation->set_rules('id_jabatan', 'ID JABATAN', 'required|trim', [
        //     'required' => '%s tidak boleh kosong',
        // ]);
        $this->form_validation->set_rules('id_divisi', 'ID DIVISI', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Data Operator';
            $data['data_operator'] = $this->DataKaryawan_Model->showDataOperator();
            $data['data_divisi'] = $this->m_data_divisi->showDataDivisi();
            // $data['data_jabatan'] = $this->m_data_jabatan->tampil_jabatan()->result();
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/data_operator', $data);
            $this->load->view('admin/tamplate/footer');
        } else {
            $id = $this->input->post('id');
            $data = [
                'nik' => $this->input->post('nik'),
                'id_jabatan' => 'JB004',
                'id_divisi' => $this->input->post('id_divisi'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
            ];
            $this->db->where('id_karyawan', $id);
            $true = $this->db->update('tb_karyawan', $data);
            if ($true) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sukses diperbarui
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
                );
                redirect('admin/master_data/data_operator');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal diperbarui
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
                );
                redirect('admin/master_data/data_operator');
            }
        }
    }

    public function delete_data_operator($id)
    {
        $this->db->where('id_karyawan', $id);
        $true = $this->db->delete('tb_karyawan');
        if ($true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sukses dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/data_operator');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/data_operator');
        }
    }
    // ---------------------- End Data Operator ----------------------



    // ---------------------- Data Operator ----------------------
    public function data_kepdis()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        // $this->form_validation->set_rules('id_jabatan', 'ID JABATAN', 'required|trim', [
        //     'required' => '%s tidak boleh kosong',
        // ]);
        $this->form_validation->set_rules('id_divisi', 'ID DIVISI', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kepala Divisi';
            $data['data_kepdis'] = $this->DataKaryawan_Model->showDataKepdis();
            $data['data_divisi'] = $this->m_data_divisi->showDataDivisi();
            // $data['data_jabatan'] = $this->m_data_jabatan->tampil_jabatan()->result();
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/data_kepdis', $data);
            $this->load->view('admin/tamplate/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'id_jabatan' => 'JB003',
                'id_divisi' => $this->input->post('id_divisi'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
            ];
            $true = $this->db->insert('tb_karyawan', $data);
            if ($true) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Sukses ditambah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/data_kepdis');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Gagal ditambah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/data_kepdis');
            }
        }
    }

    public function update_data_kepdis()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        // $this->form_validation->set_rules('id_jabatan', 'ID JABATAN', 'required|trim', [
        //     'required' => '%s tidak boleh kosong',
        // ]);
        $this->form_validation->set_rules('id_divisi', 'ID DIVISI', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required|trim', [
            'required' => '%s tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kepala Divisi';
            $data['data_kepdis'] = $this->DataKaryawan_Model->showDataKepdis();
            $data['data_divisi'] = $this->m_data_divisi->showDataDivisi();
            // $data['data_jabatan'] = $this->m_data_jabatan->tampil_jabatan()->result();
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/data_kepdis', $data);
            $this->load->view('admin/tamplate/footer');
        } else {
            $id = $this->input->post('id');
            $data = [
                'nik' => $this->input->post('nik'),
                'id_jabatan' => 'JB003',
                'id_divisi' => $this->input->post('id_divisi'),
                'nama_karyawan' => $this->input->post('nama_karyawan'),
            ];
            $this->db->where('id_karyawan', $id);
            $true = $this->db->update('tb_karyawan', $data);
            if ($true) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sukses diperbarui
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
                );
                redirect('admin/master_data/data_kepdis');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal diperbarui
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
                );
                redirect('admin/master_data/data_kepdis');
            }
        }
    }

    public function delete_data_kepdis($id)
    {
        $this->db->where('id_karyawan', $id);
        $true = $this->db->delete('tb_karyawan');
        if ($true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sukses dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/data_kepdis');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/data_kepdis');
        }
    }
    // ---------------------- End Data Operator ----------------------

    // ---------------------- End Data Karyawan ----------------------









    // ---------------------- Kriteria OP ----------------------
    public function tampil_kriteria_op()
    {
        $data['title'] = 'Data Kriteria';
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['kriteria_op'] = $this->m_data_kriteria->tampil_kriteria_op()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user

        // echo '<pre>';
        // // print_r($data['data_countop']);
        // $data[] = $data['data_sum1'];
        // print_r($data);
        // die;
        // echo '</pre>';

        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_kriteria_operator', $data);
        $this->load->view('admin/tamplate/footer');
    }

    public function update_kriteria_op()
    {
        $data['title'] = 'Data Kriteria';
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['kriteria_op'] = $this->m_data_kriteria->tampil_kriteria_op()->result();
        $data['data_nilban'] = $this->m_data_nilai->tampil_nilai()->result_array();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $update = [
            'nama_kriteria_op' => $this->input->post('nama_kriteria_op'),
        ];
        $id = $this->input->post('id_kriteria_op');
        $this->db->where('id_kriteria_op', $id);
        $true = $this->db->update('tb_kriteria_operator', $update);
        if ($true) {
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/v_kriteria_operator', $data);
            $this->load->view('admin/tamplate/footer');
            $this->session->set_flashdata(
                'pesan_update_kriteria_op',
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sukses diupdate
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/tampil_kriteria_op');
        } else {
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/v_kriteria_operator', $data);
            $this->load->view('admin/tamplate/footer');
            $this->session->set_flashdata(
                'pesan_update_kriteria_op',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal diupdate
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/tampil_kriteria_op');
        }
    }

    public function tambah_kriteria_op()
    {
        $idDivisiInt = 0;
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
        // Mendapatkan jumlah produk yang ada di database
        $jumlahKriteriaOp = $this->m_data_kriteria->tampil_kriteria_op()->num_rows();
        // Jika jumlah produk lebih dari 0
        if ($jumlahKriteriaOp > 0) {
            // Mengambil id produk sebelumnya
            $lastId = $this->m_data_kriteria->tampil_kriteria_akhir_op()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id produk
                $rawIdKriteriaOp = substr($row->id_kriteria_op, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
                $idKriteriaOpInt = intval($rawIdKriteriaOp);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($idKriteriaOpInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_kriteria_op = "KOP00" . ($idKriteriaOpInt + 1);
                } else if (strlen($idDivisiInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_kriteria_op = "KOP0" . ($idKriteriaOpInt + 1);
                } else if (strlen($idKriteriaOpInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_kriteria_op = "KOP" . ($idKriteriaOpInt + 1);
                }
            }
        } else {
            // Jika jumlah paket soal kurang dari sama dengan 0
            $id_kriteria_op = "KOP001";
        }


        $data = array(
            'id_kriteria_op' =>  $id_kriteria_op
        );
        $data['data_nilban'] = $this->m_data_nilai->tampil_nilai()->result_array();
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_tambah_kriteria_op', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function aksitambah_kriteria_op()
    {
        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
        $id_kriteria_op = $this->input->post('id_kriteria_op');
        $nama_kriteria_op = $this->input->post('nama_kriteria_op');
        // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
        $data = array(
            'id_kriteria_op' =>  $id_kriteria_op,
            'nama_kriteria_op' => $nama_kriteria_op,
        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
        $this->m_data_kriteria->tambah_kriteria_op($data, 'tb_kriteria_operator');
        // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
        $this->session->set_flashdata('pesan', '
         <div class="alert alert-success" role="alert">
         <strong>Selamat!</strong> Anda Berhasil Menambahkan Data Kriteria. Data yang baru ditambahkan dapat dilihat di tabel.
         </div>
         ');

        redirect('admin/master_data/tampil_kriteria_op');
    }

    public function hapus_kriteria_op($id)
    {
        $where = array(
            'id_kriteria_op' => $id
        );

        $this->m_data_kriteria->delete_kriteria_op($where, 'tb_kriteria_operator');
        $this->session->set_flashdata('pesan', '
         <div class="alert alert-success" role="alert">
         <strong>Berhasil!</strong> Data anda telah terhapus.
         </div>
         ');
        redirect('admin/master_data/tampil_kriteria_op');
    }
    //---------------------- End Kriteria OP ----------------------










    //---------------------- Analisa Perbandingan ----------------------

    public function update_analisa_perbandingan()
    {


        $pro = $this->input->post('productivity[]');
        $kdk = $this->input->post('kerjasamadankom[]');
        $p5r = $this->input->post('pelaksana5r[]');
        $doc = $this->input->post('dokumentasi[]');
        $ppk3 = $this->input->post('paham_laksana_k3[]');
        $psop = $this->input->post('paham_sop[]');
        $ptls = $this->input->post('paham_tools[]');
        $hdr = $this->input->post('hadir[]');
        $dsp = $this->input->post('disiplin[]');
        $inf = $this->input->post('inisiatif[]');
        $data = array();
        for ($x = 0; $x < sizeof($pro); $x++) {
            $data[] = [
                'productivity' => $pro[$x],
                'kerjasamadankom' => $kdk[$x],
                'pelaksana5r' => $p5r[$x],
                'dokumentasi' => $doc[$x],
                'paham_laksana_k3' => $ppk3[$x],
                'paham_sop' => $psop[$x],
                'paham_tools' => $ptls[$x],
                'hadir' => $hdr[$x],
                'disiplin' => $dsp[$x],
                'inisiatif' => $inf[$x],
                'id_anop' => $x + 1,
            ];
        }
        $query = $this->db->update_batch('tb_analisa_op', $data, 'id_anop');
        //
        // var_dump($query);
        // die;
        if ($query) {
            $data['data_sum'] = $this->DataKaryawan_Model->sumAnalyzeOP();
            $proc = $data['data_sum']['sumProc'];
            $kedako = $data['data_sum']['sumKdk'];
            $pel5r = $data['data_sum']['sump5r'];
            $docs = $data['data_sum']['sumDoc'];
            $plk3 = $data['data_sum']['sumplk3'];
            $pasop = $data['data_sum']['sumPsop'];
            $patols = $data['data_sum']['sumPtls'];
            $hadr = $data['data_sum']['sumHdr'];
            $displ = $data['data_sum']['sumDsp'];
            $inis = $data['data_sum']['sumInf'];
            $data['data_countop'] = $this->DataKaryawan_Model->countKritOp();
            $countKrit = $data['data_countop']['jumKritOp'];
            $data['data_sum1'] = $this->DataKaryawan_Model->sumAnalyzeOPResArray();
            $sumEigen = $data['data_sum1'];

            // print_r($countKrit);
            // die;

            $data = array();
            for ($x = 0; $x < sizeof($pro); $x++) {
                $data1[] = [
                    'productivity' => $pro[$x] / $proc,
                    'kerjasamadankom' => $kdk[$x] / $kedako,
                    'pelaksana5r' => $p5r[$x] / $pel5r,
                    'dokumentasi' => $doc[$x] / $docs,
                    'paham_laksana_k3' => $ppk3[$x] / $plk3,
                    'paham_sop' => $psop[$x] / $pasop,
                    'paham_tools' => $ptls[$x] / $patols,
                    'hadir' => $hdr[$x] / $hadr,
                    'disiplin' => $dsp[$x] / $displ,
                    'inisiatif' => $inf[$x] / $inis,
                    'jumlah' => (($pro[$x] / $proc) + ($kdk[$x] / $kedako) + ($p5r[$x] / $pel5r) + ($doc[$x] / $docs) + ($ppk3[$x] / $plk3) + ($psop[$x] / $pasop) + ($ptls[$x] / $patols) + ($hdr[$x] / $hadr) + ($dsp[$x] / $displ) + ($inf[$x] / $inis)),

                    'prioritas' => (($pro[$x] / $proc) + ($kdk[$x] / $kedako) + ($p5r[$x] / $pel5r) + ($doc[$x] / $docs) + ($ppk3[$x] / $plk3) + ($psop[$x] / $pasop) + ($ptls[$x] / $patols) + ($hdr[$x] / $hadr) + ($dsp[$x] / $displ) + ($inf[$x] / $inis)) / $countKrit,

                    'eigen_value' => ((($pro[$x] / $proc) + ($kdk[$x] / $kedako) + ($p5r[$x] / $pel5r) + ($doc[$x] / $docs) + ($ppk3[$x] / $plk3) + ($psop[$x] / $pasop) + ($ptls[$x] / $patols) + ($hdr[$x] / $hadr) + ($dsp[$x] / $displ) + ($inf[$x] / $inis)) / $countKrit) * $sumEigen[$x],

                    'id_matop' => $x + 1,
                ];
            }
            $query1 = $this->db->update_batch('tb_matriks_op', $data1, 'id_matop');

            if ($query1) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success success-dismissible fade show" role="alert">
                        Sukses dianalisa
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/pembobotan_KriOp');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Gagal dianalisa
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/pembobotan_KriOp');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal dianalisa tahap nilai
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/pembobotan_KriOp');
        }
    }

    //---------------------- End Analisa Perbandingan ----------------------












    //---------------------- Pembobotan Kriteria Operator ----------------------
    public function pembobotan_KriOp()
    {
        $data['title'] = 'Pembobotan Kriteria';
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 

        $data['data_anop'] = $this->DataKaryawan_Model->showAnalyzeOP();
        $data['data_sum'] = $this->DataKaryawan_Model->sumAnalyzeOP();
        $data['data_nilban'] = $this->m_data_nilai->tampil_nilai()->result_array();
        $data['data_nilban1'] = $this->m_data_nilai->tampil_nilai_awal()->result_array();
        $data['data_matrix'] = $this->DataKaryawan_Model->showMatrixOp();
        $data['total_matrix'] = $this->DataKaryawan_Model->totalNilaiMatriks();
        $data['data_countop'] = $this->DataKaryawan_Model->countKritOp();
        $data['ri'] = 1.49;
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user

        // echo '<pre>';
        // // print_r($data['data_countop']);
        // $data[] = $data['data_sum1'];
        // print_r($data);
        // die;
        // echo '</pre>';

        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_pembobotan_kriop', $data);
        $this->load->view('admin/tamplate/footer');
    }

    //---------------------- End Pembobotan Kriteria Operator ----------------------














    //---------------------- Subrange Kriteria Operator ----------------------
    public function subrange_KriOp()
    {
        $data['title'] = 'Subrange Kriteria';
        $data['title1'] = 'Productivity';
        $data['title2'] = 'Kerjasama dan Komunikasi';
        $data['title3'] = 'Pelaksanaan 5 R';
        $data['title4'] = 'Dokumentasi';
        $data['title5'] = 'Pemahaman dan Pelaksanaan K3';
        $data['title6'] = 'Pemahaman SOP dan SPK';
        $data['title7'] = 'Pemahaman Tools';
        $data['title8'] = 'Kehadiran';
        $data['title9'] = 'Kedisiplinan';
        $data['title10'] = 'Inisiatif';
        //Productiviity
        $data['subrange_product'] = $this->DataKaryawan_Model->showSubrangeProductivity();
        $data['submatrix_product'] = $this->DataKaryawan_Model->showSubmatrixProductivity();
        $data['count_subproduct'] = $this->DataKaryawan_Model->countSubrangeProductivity();
        $data['sum_subproduct'] = $this->DataKaryawan_Model->sumSubrangeProductivity();
        $data['sum_submatrixproduct'] = $this->DataKaryawan_Model->sumSubmatrixProductivity();

        //Kerjasama dan Komunikasi
        $data['subrange_komdanker'] = $this->DataKaryawan_Model->showSubrangeKomdanKer();
        $data['submatrix_komdanker'] = $this->DataKaryawan_Model->showSubmatrixKomdanKer();
        $data['count_subkomdanker'] = $this->DataKaryawan_Model->countSubrangeKomdanKer();
        $data['sum_subkomdanker'] = $this->DataKaryawan_Model->sumSubrangeKomdanKer();
        $data['sum_submatrixkomdanker'] = $this->DataKaryawan_Model->sumSubmatrixKomdanKer();

        //Pelaksanaan 5 R
        $data['subrange_pelaksana5r'] = $this->DataKaryawan_Model->showSubrangePelaksana5R();
        $data['submatrix_pelaksana5r'] = $this->DataKaryawan_Model->showSubmatrixPelaksana5R();
        $data['count_subpelaksana5r'] = $this->DataKaryawan_Model->countSubrangePelaksana5R();
        $data['sum_subpelaksana5r'] = $this->DataKaryawan_Model->sumSubrangePelaksana5R();
        $data['sum_submatrixpelaksana5r'] = $this->DataKaryawan_Model->sumSubmatrixPelaksana5R();

        //Dokumentasi
        $data['subrange_dokumentasi'] = $this->DataKaryawan_Model->showSubrangeDokumentasi();
        $data['submatrix_dokumentasi'] = $this->DataKaryawan_Model->showSubmatrixDokumentasi();
        $data['count_subdokumentasi'] = $this->DataKaryawan_Model->countSubrangeDokumentasi();
        $data['sum_subdokumentasi'] = $this->DataKaryawan_Model->sumSubrangeDokumentasi();
        $data['sum_submatrixdokumentasi'] = $this->DataKaryawan_Model->sumSubmatrixDokumentasi();

        // 
        $data['data_nilban'] = $this->m_data_nilai->tampil_nilai()->result_array();
        $data['data_nilban1'] = $this->m_data_nilai->tampil_nilai_awal()->result_array();
        // 
        $data['ri'] = 0.90;
        //
        $data['ri3'] = 0.58;

        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_subrange_op', $data);
        $this->load->view('admin/tamplate/footer');
    }





    //---------------------------------------------------------- Productivity ------------------------------------------------------------
    public function update_subrange_Productivity()
    {
        $_90 = $this->input->post('pekerjaan_90[]');
        $_8090 = $this->input->post('pekerjaan_80_90[]');
        $_6079 = $this->input->post('pekerjaan_60_79[]');
        $_59 = $this->input->post('pekerjaan_59[]');
        $data = array();
        for ($x = 0; $x < sizeof($_90); $x++) {
            $data[] = [
                'pekerjaan_90' => $_90[$x],
                'pekerjaan_80_90' => $_8090[$x],
                'pekerjaan_60_79' => $_6079[$x],
                'pekerjaan_59' => $_59[$x],
                'id_subrange_proc' => $x + 1,
            ];
        }
        $query = $this->db->update_batch('tb_subrange_productivity', $data, 'id_subrange_proc');
        if ($query) {
            $data['sum_subproduct'] = $this->DataKaryawan_Model->sumSubrangeProductivity();
            $sum90 = $data['sum_subproduct']['sum90'];
            $sum8090 = $data['sum_subproduct']['sum8090'];
            $sum6079 = $data['sum_subproduct']['sum6079'];
            $sum59 = $data['sum_subproduct']['sum59'];

            $data['count_subproduct'] = $this->DataKaryawan_Model->countSubrangeProductivity();
            $count_subproduct = $data['count_subproduct']['jumSubProc'];

            $data['sumArray_subproduct'] = $this->DataKaryawan_Model->sumSubrangeProductivityOPResArray();
            $sumSubProducEigen = $data['sumArray_subproduct'];

            $data = array();
            for ($x = 0; $x < sizeof($_90); $x++) {
                $data[] = [
                    'pekerjaan_90' => $_90[$x] / $sum90,
                    'pekerjaan_80_90' => $_8090[$x] / $sum8090,
                    'pekerjaan_60_79' => $_6079[$x] / $sum6079,
                    'pekerjaan_59' => $_59[$x] / $sum59,
                    'jumlah' => (($_90[$x] / $sum90) + ($_8090[$x] / $sum8090) + ($_6079[$x] / $sum6079) + ($_59[$x] / $sum59)),

                    'prioritas' => (($_90[$x] / $sum90) + ($_8090[$x] / $sum8090) + ($_6079[$x] / $sum6079) + ($_59[$x] / $sum59)) / $count_subproduct,

                    'eigen_value' => ((($_90[$x] / $sum90) + ($_8090[$x] / $sum8090) + ($_6079[$x] / $sum6079) + ($_59[$x] / $sum59)) / $count_subproduct) * $sumSubProducEigen[$x],

                    'id_submatrix_proc' => $x + 1,
                ];
            }
            $query1 = $this->db->update_batch('tb_submatriks_productivity', $data, 'id_submatrix_proc');
            if ($query1) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success success-dismissible fade show" role="alert">
                        Sukses dianalisa Subrange Productivity
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/subrange_KriOp');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Gagal dianalisa Subrange Productivity
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/subrange_KriOp');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal dianalisa tahap nilai Productivity
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/subrange_KriOp');
        }
    }






    //---------------------------------------------------------- Kerjasama dan Komunikasi ------------------------------------------------------------
    public function update_subrange_KerjasamadanKomunikasi()
    {
        $_sb = $this->input->post('sangat_baik[]');
        $_baik = $this->input->post('baik[]');
        $_krg = $this->input->post('kurang[]');
        $_tkm = $this->input->post('tidak_mampu[]');
        $data = array();
        for ($x = 0; $x < sizeof($_sb); $x++) {
            $data[] = [
                'sangat_baik' => $_sb[$x],
                'baik' => $_baik[$x],
                'kurang' => $_krg[$x],
                'tidak_mampu' => $_tkm[$x],
                'id_subrange_kdk' => $x + 1,
            ];
        }
        $query = $this->db->update_batch('tb_subrange_komdanker', $data, 'id_subrange_kdk');
        if ($query) {
            $data['sum_subkomdanker'] = $this->DataKaryawan_Model->sumSubrangeKomdanKer();
            $sumSB = $data['sum_subkomdanker']['sumSB'];
            $sumBaik = $data['sum_subkomdanker']['sumBaik'];
            $sumKurang = $data['sum_subkomdanker']['sumKurang'];
            $sumTK = $data['sum_subkomdanker']['sumTK'];

            $data['count_subkomdanker'] = $this->DataKaryawan_Model->countSubrangeKomdanKer();
            $count_subkomdanker = $data['count_subkomdanker']['jumSubKdk'];

            $data['sumArray_subkomdanker'] = $this->DataKaryawan_Model->sumSubrangeKomdanKerOPResArray();
            $sumSubKomdankerEigen = $data['sumArray_subkomdanker'];

            $data = array();
            for ($x = 0; $x < sizeof($_sb); $x++) {
                $data[] = [
                    'sangat_baik' => $_sb[$x] / $sumSB,
                    'baik' => $_baik[$x] / $sumBaik,
                    'kurang' => $_krg[$x] / $sumKurang,
                    'tidak_mampu' => $_tkm[$x] / $sumTK,
                    'jumlah' => (($_sb[$x] / $sumSB) + ($_baik[$x] / $sumBaik) + ($_krg[$x] / $sumKurang) + ($_tkm[$x] / $sumTK)),

                    'prioritas' => (($_sb[$x] / $sumSB) + ($_baik[$x] / $sumBaik) + ($_krg[$x] / $sumKurang) + ($_tkm[$x] / $sumTK)) / $count_subkomdanker,

                    'eigen_value' => ((($_sb[$x] / $sumSB) + ($_baik[$x] / $sumBaik) + ($_krg[$x] / $sumKurang) + ($_tkm[$x] / $sumTK)) / $count_subkomdanker) * $sumSubKomdankerEigen[$x],

                    'id_submatrix_kdk' => $x + 1,
                ];
            }
            $query1 = $this->db->update_batch('tb_submatriks_komdanker', $data, 'id_submatrix_kdk');
            if ($query1) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success success-dismissible fade show" role="alert">
                        Sukses dianalisa Subrange Kerjasama dan Komunikasi
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/subrange_KriOp');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Gagal dianalisa Subrange Kerjasama dan Komunikasi
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/subrange_KriOp');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal dianalisa tahap nilai Kerjasama dan Komunikasi
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/subrange_KriOp');
        }
    }







    //---------------------------------------------------------- Pelaksanaan 5R ------------------------------------------------------------
    public function update_subrange_Pelaksana5R()
    {
        $_laks = $this->input->post('melaksanakan[]');
        $_kurlaks = $this->input->post('kurang_melaksanakan[]');
        $_tidlaks = $this->input->post('tidak_melaksanakan[]');
        $data = array();
        for ($x = 0; $x < sizeof($_laks); $x++) {
            $data[] = [
                'melaksanakan' => $_laks[$x],
                'kurang_melaksanakan' => $_kurlaks[$x],
                'tidak_melaksanakan' => $_tidlaks[$x],
                'id_subrange_p5r' => $x + 1,
            ];
        }
        $query = $this->db->update_batch('tb_subrange_pelaksana5r', $data, 'id_subrange_p5r');
        if ($query) {
            $data['sum_subpelaksana5r'] = $this->DataKaryawan_Model->sumSubrangePelaksana5R();
            $sumLaks = $data['sum_subpelaksana5r']['sumLaks'];
            $sumKurLaks = $data['sum_subpelaksana5r']['sumKurLaks'];
            $sumTidLaks = $data['sum_subpelaksana5r']['sumTidLaks'];

            $data['count_subpelaksana5r'] = $this->DataKaryawan_Model->countSubrangePelaksana5R();
            $count_subpelaksana5r = $data['count_subpelaksana5r']['jumSubp5r'];

            $data['sumArray_subpelaksana5r'] = $this->DataKaryawan_Model->sumSubrangePelaksana5ROPResArray();
            $sumSubPelaksana5r = $data['sumArray_subpelaksana5r'];

            $data = array();
            for ($x = 0; $x < sizeof($_laks); $x++) {
                $data[] = [
                    'melaksanakan' => $_laks[$x] / $sumLaks,
                    'kurang_melaksanakan' => $_kurlaks[$x] / $sumKurLaks,
                    'tidak_melaksanakan' => $_tidlaks[$x] / $sumTidLaks,
                    'jumlah' => (($_laks[$x] / $sumLaks) + ($_kurlaks[$x] / $sumKurLaks) + ($_tidlaks[$x] / $sumTidLaks)),

                    'prioritas' => (($_laks[$x] / $sumLaks) + ($_kurlaks[$x] / $sumKurLaks) + ($_tidlaks[$x] / $sumTidLaks)) / $count_subpelaksana5r,

                    'eigen_value' => ((($_laks[$x] / $sumLaks) + ($_kurlaks[$x] / $sumKurLaks) + ($_tidlaks[$x] / $sumTidLaks)) / $count_subpelaksana5r) * $sumSubPelaksana5r[$x],

                    'id_submatrix_p5r' => $x + 1,
                ];
            }
            $query1 = $this->db->update_batch('tb_submatriks_pelaksana5r', $data, 'id_submatrix_p5r');
            if ($query1) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success success-dismissible fade show" role="alert">
                        Sukses dianalisa Subrange Pelaksanaan 5 R
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/subrange_KriOp');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Gagal dianalisa Subrange Pelaksanaan 5 R
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                redirect('admin/master_data/subrange_KriOp');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal dianalisa tahap nilai Pelaksanaan 5 R
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/subrange_KriOp');
        }
    }
    //---------------------- End Subrange Kriteria Operator ----------------------
















    //

    public function tampil_kriteria_kasi()
    {
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['kriteria_kasi'] = $this->m_data_kriteria->tampil_kriteria_kasi()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_kriteria_kasi', $data);
        $this->load->view('admin/tamplate/footer');
    }

    public function tambah_kriteria_kasi()
    {
        $idDivisiInt = 0;
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
        // Mendapatkan jumlah produk yang ada di database
        $jumlahKriteriaKasi = $this->m_data_kriteria->tampil_kriteria_kasi()->num_rows();
        // Jika jumlah produk lebih dari 0
        if ($jumlahKriteriaKasi > 0) {
            // Mengambil id produk sebelumnya
            $lastId = $this->m_data_kriteria->tampil_kriteria_akhir_kasi()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id produk
                $rawIdKriteriaKasi = substr($row->id_kriteria_kasi, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
                $idKriteriaKasiInt = intval($rawIdKriteriaKasi);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($idKriteriaKasiInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_kriteria_kasi = "KKS00" . ($idKriteriaKasiInt + 1);
                } else if (strlen($idDivisiInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_kriteria_kasi = "KKS0" . ($idKriteriaKasiInt + 1);
                } else if (strlen($idKriteriaKasiInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_kriteria_kasi = "KKS" . ($idKriteriaKasiInt + 1);
                }
            }
        } else {
            // Jika jumlah paket soal kurang dari sama dengan 0
            $id_kriteria_kasi = "KKS001";
        }


        $data = array(
            'id_kriteria_kasi' =>  $id_kriteria_kasi
        );
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_tambah_kriteria_kasi', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function aksitambah_kriteria_kasi()
    {
        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
        $id_kriteria_kasi = $this->input->post('id_kriteria_kasi');
        $nama_kriteria_kasi = $this->input->post('nama_kriteria_kasi');
        // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
        $data = array(
            'id_kriteria_kasi' =>  $id_kriteria_kasi,
            'nama_kriteria_kasi' => $nama_kriteria_kasi

        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
        $this->m_data_kriteria->tambah_kriteria_kasi($data, 'tb_kriteria_kasi');
        // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
        $this->session->set_flashdata('pesan', '
         <div class="alert alert-success" role="alert">
         <strong>Selamat!</strong> Anda Berhasil Menambahkan Data Kriteria. Data yang baru ditambahkan dapat dilihat di tabel.
         </div>
         ');

        redirect('admin/master_data/tampil_kriteria_kasi');
    }

    public function hapus_kriteria_kasi($id)
    {
        $where = array(
            'id_kriteria_kasi' => $id
        );

        $this->m_data_kriteria->delete_kriteria_kasi($where, 'tb_kriteria_kasi');
        $this->session->set_flashdata('pesan', '
         <div class="alert alert-success" role="alert">
         <strong>Berhasil!</strong> Data anda telah terhapus.
         </div>
         ');
        redirect('admin/master_data/tampil_kriteria_kasi');
    }










    //
    public function tampil_nilai()
    {
        $data['title'] = 'Nilai Banding';
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['nilai'] = $this->m_data_nilai->tampil_nilai()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_nilai_banding', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function update_nilai_banding()
    {
        $data['title'] = 'Nilai Banding';
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['nilai'] = $this->m_data_nilai->tampil_nilai()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $update = [
            'nama_nilai' => $this->input->post('nama_nilai'),
            'nilai' => $this->input->post('nilai'),
        ];
        $id = $this->input->post('id_nilai');
        $this->db->where('id_nilai', $id);
        $true = $this->db->update('nilai_banding', $update);
        if ($true) {
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/v_nilai_banding', $data);
            $this->load->view('admin/tamplate/footer');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sukses diupdate
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/tampil_nilai');
        } else {
            $this->load->view('admin/tamplate/header');
            $this->load->view('admin/tamplate/sidebar');
            $this->load->view('admin/v_nilai_banding', $data);
            $this->load->view('admin/tamplate/footer');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal diupdate
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/tampil_nilai');
        }
    }
    public function delete_nilai_banding($id)
    {
        $this->db->where('id_nilai', $id);
        $true = $this->db->delete('nilai_banding');
        if ($true) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sukses dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/tampil_nilai');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal dihapus
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/master_data/tampil_nilai');
        }
    }
    //










    public function tambah_nilai()
    {
        $idDivisiInt = 0;
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
        // Mendapatkan jumlah produk yang ada di database
        $jumlahNilai = $this->m_data_nilai->tampil_nilai()->num_rows();
        // Jika jumlah produk lebih dari 0
        if ($jumlahNilai > 0) {
            // Mengambil id produk sebelumnya
            $lastId = $this->m_data_nilai->tampil_nilai_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id produk
                $rawIdNilai = substr($row->id_nilai, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
                $idNilaiInt = intval($rawIdNilai);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($idNilaiInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_nilai = "NL00" . ($idNilaiInt + 1);
                } else if (strlen($idDivisiInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_nilai = "NL0" . ($idNilaiInt + 1);
                } else if (strlen($idNilaiInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_nilai = "NL" . ($idNilaiInt + 1);
                }
            }
        } else {
            // Jika jumlah paket soal kurang dari sama dengan 0
            $id_nilai = "NL001";
        }


        $data = array(
            'id_nilai' =>  $id_nilai
        );
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_tambah_nilai', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function aksitambah_nilai()
    {
        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
        $id_nilai = $this->input->post('id_nilai');
        $nama_nilai = $this->input->post('nama_nilai');
        $nilai = $this->input->post('nilai');
        // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
        $data = array(
            'id_nilai' =>  $id_nilai,
            'nama_nilai' => $nama_nilai,
            'nilai' => $nilai

        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
        $this->m_data_nilai->tambah_nilai($data, 'nilai_banding');
        // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
          <strong>Selamat!</strong> Anda Berhasil Menambahkan Data Nilai. Data yang baru ditambahkan dapat dilihat di tabel.
          </div>
          ');

        redirect('admin/master_data/tampil_nilai');
    }

    public function tampil_kuisioner_op()
    {
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['kriteria_op'] = $this->m_data_kriteria->tampil_kriteria_op()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_kuisioner_op', $data);
        $this->load->view('admin/tamplate/footer');
    }

    function detail_kuisioner_op($id)
    {

        $where = array('tb_kriteria_operator.id_kriteria_op' => $id);
        // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
        $result = $this->m_data_kriteria->edit_kriteria_op($where, 'tb_kriteria_operator')->result();
        $resultKuisioner = $this->m_data_kuis->tampil_kuisop_where($where, 'data_kuisioner_op')->result();
        // kode ini memuat vie edit dan membawa data hasil query diatas
        $data = array(
            'tb_kriteria_operator' => $result,
            'data_kuisioner_op' => $resultKuisioner
        );

        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_detailkuis_op', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function tambah_kuis_op($id)
    {
        $where = array('tb_kriteria_operator.id_kriteria_op' => $id);
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
        // Mendapatkan jumlah produk yang ada di database
        $jumlahKuis = $this->m_data_kuis->tampil_kuisop()->num_rows();
        // Jika jumlah produk lebih dari 0
        if ($jumlahKuis > 0) {
            // Mengambil id produk sebelumnya
            $lastId = $this->m_data_kuis->tampil_kuisop_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id produk
                $rawIdKuis = substr($row->id_kuis_op, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
                $idKuisInt = intval($rawIdKuis);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($idKuisInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_kuis_op = "KP00" . ($idKuisInt + 1);
                } else if (strlen($idKuisInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_kuis_op = "KP0" . ($idKuisInt + 1);
                } else if (strlen($idKuisInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_kuis_op = "KP" . ($idKuisInt + 1);
                }
            }
        } else {
            // Jika jumlah paket soal kurang dari sama dengan 0
            $id_kuis_op = "KP001";
        }

        $result = $this->m_data_kriteria->edit_kriteria_op($where, 'tb_kriteria_operator')->result();
        $data = array(
            'id_kuis_op' =>  $id_kuis_op,
            'tb_kriteria_operator' => $result
        );
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_tambah_kuisop', $data);
        $this->load->view('admin/tamplate/footer');
    }

    public function aksitambah_kuisop()
    {

        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
        $id_kuis_op = $this->input->post('id_kuis_op');
        $id_kriteria_op = $this->input->post('id_kriteria_op');
        $kuis_op = $this->input->post('kuis_op');

        $data = array(
            'id_kuis_op' => $id_kuis_op,
            'id_kriteria_op' => $id_kriteria_op,
            'kuis_op' => $kuis_op
        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
        $this->m_data_kuis->tambah_kuisop($data, 'data_kuisioner_op');
        // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
        $this->session->set_flashdata('pesan', '
              <div class="alert alert-success" role="alert">
              <strong>Selamat!</strong> Data telah di Tambahkan. Scroll layar kebawah untuk melihat data yang baru ditambahkan.
              </div>
              ');
        redirect('admin/master_data/detail_kuisioner_op/' . $id_kriteria_op);
    }
    function hapus_kuis_op($id_kuis_op, $id_kriteria_op)
    {
        //function hapus menangkap NIK dari pengiriman NIK yang ditampilkan di view masuk
        $where = array('id_kuis_op' => $id_kuis_op); // kemudian diubah menjadi array
        $this->m_data_kuis->delete_kuis_kasi($where, 'data_kuisioner_op'); //dan barulah kita kirim data array hapus tersebut pada m_data_soal yang ditangkap oleh function hapus_data
        // id paket disini merujuk pada id paket soal mana yang digunakan sekarang

        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
          <strong>Berhasil!</strong> Data anda telah terhapus.
          </div>
          ');
        redirect('admin/master_data/detail_kuisioner_op/' . $id_kriteria_op); // setelah itu langsung diarah kan ke function index yang menampilkan v_masuk
    }

    public function tampil_kuisioner_kasi()
    {
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['kriteria_kasi'] = $this->m_data_kriteria->tampil_kriteria_kasi()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_kuisioner_kasi', $data);
        $this->load->view('admin/tamplate/footer');
    }

    function detail_kuisioner_kasi($id)
    {

        $where = array('tb_kriteria_kasi.id_kriteria_kasi' => $id);
        // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
        $result = $this->m_data_kriteria->edit_kriteria_kasi($where, 'tb_kriteria_kasi')->result();
        $resultKuisionerkasi = $this->m_data_kuis->tampil_kuiskasi_where($where, 'data_kuisioner_kasi')->result();
        // kode ini memuat vie edit dan membawa data hasil query diatas
        $data = array(
            'tb_kriteria_kasi' => $result,
            'data_kuisioner_kasi' => $resultKuisionerkasi
        );

        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_detailkuis_kasi', $data);
        $this->load->view('admin/tamplate/footer');
    }
    public function tambah_kuis_kasi($id)
    {
        $where = array('tb_kriteria_kasi.id_kriteria_kasi' => $id);
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
        // Mendapatkan jumlah produk yang ada di database
        $jumlahKuis = $this->m_data_kuis->tampil_kuiskasi()->num_rows();
        // Jika jumlah produk lebih dari 0
        if ($jumlahKuis > 0) {
            // Mengambil id produk sebelumnya
            $lastId = $this->m_data_kuis->tampil_kuiskasi_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id produk
                $rawIdKuis = substr($row->id_kuis_kasi, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
                $idKuisInt = intval($rawIdKuis);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($idKuisInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_kuis_kasi = "KS00" . ($idKuisInt + 1);
                } else if (strlen($idKuisInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_kuis_kasi = "KS0" . ($idKuisInt + 1);
                } else if (strlen($idKuisInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_kuis_kasi = "KS" . ($idKuisInt + 1);
                }
            }
        } else {
            // Jika jumlah paket soal kurang dari sama dengan 0
            $id_kuis_kasi = "KS001";
        }

        $result = $this->m_data_kriteria->edit_kriteria_kasi($where, 'tb_kriteria_kasi')->result();
        $data = array(
            'id_kuis_kasi' =>  $id_kuis_kasi,
            'tb_kriteria_kasi' => $result
        );
        $this->load->view('admin/tamplate/header');
        $this->load->view('admin/tamplate/sidebar');
        $this->load->view('admin/v_tambah_kuiskasi', $data);
        $this->load->view('admin/tamplate/footer');
    }

    public function aksitambah_kuiskasi()
    {

        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
        $id_kuis_kasi = $this->input->post('id_kuis_kasi');
        $id_kriteria_kasi = $this->input->post('id_kriteria_kasi');
        $kuis_kasi = $this->input->post('kuis_kasi');

        $data = array(
            'id_kuis_kasi' => $id_kuis_kasi,
            'id_kriteria_kasi' => $id_kriteria_kasi,
            'kuis_kasi' => $kuis_kasi
        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
        $this->m_data_kuis->tambah_kuiskasi($data, 'data_kuisioner_kasi');
        // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-success" role="alert">
                <strong>Selamat!</strong> Data telah di Tambahkan. Scroll layar kebawah untuk melihat data yang baru ditambahkan.
                </div>
                ');
        redirect('admin/master_data/detail_kuisioner_kasi/' . $id_kriteria_kasi);
    }
    function hapus_kuis_kasi($id_kuis_kasi, $id_kriteria_kasi)
    {
        //function hapus menangkap NIK dari pengiriman NIK yang ditampilkan di view masuk
        $where = array('id_kuis_kasi' => $id_kuis_kasi); // kemudian diubah menjadi array
        $this->m_data_kuis->delete_kuis_kasi($where, 'data_kuisioner_kasi'); //dan barulah kita kirim data array hapus tersebut pada m_data_soal yang ditangkap oleh function hapus_data
        // id paket disini merujuk pada id paket soal mana yang digunakan sekarang

        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success" role="alert">
          <strong>Berhasil!</strong> Data anda telah terhapus.
          </div>
          ');
        redirect('admin/master_data/detail_kuisioner_kasi/' . $id_kriteria_kasi); // setelah itu langsung diarah kan ke function index yang menampilkan v_masuk
    }
}
