<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                                <h6 class="text-muted font-semibold">WELCOME!</h6>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item <?= (($this->uri->uri_string() == 'admin/dashboard') ? 'active' : '');  ?>">
                            <a href="<?= base_url('admin/dashboard') ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Master Data</span>
                            </a>
                            <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <li class="sidebar-title"><a href="<?= base_url('admin/master_data/tampil_jabatan') ?>">
                                        Data Jabatan</a></li>
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <li class="sidebar-title"><a href="<?= base_url('admin/master_data/tampil_divisi') ?>">
                                        Data Divisi</a></li>
                        </li>
                        <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                        <li class="sidebar-title"><a href="<?= base_url('admin/master_data/tampil_nilai') ?>">
                                Nilai Banding</a>
                        </li>
                        </li>
                        <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                Data Karyawan</a>
                            <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="<?= base_url('admin/master_data/data_operator') ?>">Operator</a>
                                </li>
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="<?= base_url('admin/master_data/data_kepdis') ?>">Kepala Divisi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                Data Kriteria</a>
                            <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="<?= base_url('admin/master_data/tampil_kriteria_op') ?>"> Operator</a>
                                </li>
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="<?= base_url('admin/master_data/tampil_kriteria_kasi') ?>">Kepala Divisi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                            <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                Data Subrange</a>
                            <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="component-alert.html">Operator</a>
                                </li>
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="component-badge.html">Kepala Divisi</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                Data Kuisioner</a>
                            <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="<?= base_url('admin/master_data/kuisioner_op') ?>">Operator</a>
                                </li>
                                <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <a href="<?= base_url('admin/master_data/kuisioner_kasi') ?>">Kepala Divisi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </li>

                    <li class="sidebar-item  has-sub<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Pembobotan</span>
                        </a>
                        <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                            <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    Kriteria</a>
                                <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                        <a href="<?= base_url('admin/master_data/pembobotan_KriOp') ?>">Operator</a>
                                    </li>
                                    <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                        <a href="<?= base_url('admin/master_data/pembobotan_KriKepdis') ?>">Kepala Divisi</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    Subrange</a>
                                <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                    <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                        <a href="<?= base_url('admin/master_data/subrange_KriOp') ?>">Operator</a>
                                    </li>
                                    <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                        <a href="<?= base_url('admin/master_data/subrange_KriKasi') ?>">Kepala Divisi</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Penentuan Bonus</li>

                    <li class="sidebar-item  has-sub<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Hasil Perangkingan</span>
                        </a>
                        <ul class="submenu <?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                            <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <a href="<?= base_url('admin/master_data/show_penilaian_kasi') ?>">Hasil dari Kasi</a>
                            </li>
                            <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <a href="<?= base_url('admin/master_data/show_penilaian_manajer') ?>">Hasil dari Manajer</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Laporan</span>
                        </a>
                        <ul class="submenu<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                            <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <a href="<?= base_url('admin/master_data/cetak_penilaian_kasi') ?>">Hasil dari Kasi</a>
                            </li>
                            <li class="submenu-item<?= $this->uri->segment(3) == $title ? ' active' : '' ?>">
                                <a href="<?= base_url('admin/master_data/cetak_penilaian_manajer') ?>">Hasil dari Manajer</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Akun</li>
                    <li class="sidebar-item  ">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Manajemen User</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="<?php echo site_url('login/logout'); ?>" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>LOG OUT</span>
                        </a>
                    </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>