<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel <?= $title; ?></h6>
        </div>
        <div class="card-content collapse show">
            <div class="card-body">
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#tambah-data-operator">
                    Tambah <?= $title; ?>
                </button>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= validation_errors(); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?= $this->session->flashdata('message') ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>ID jabatan</th>
                                <th>ID Divisi</th>
                                <th>Nama Karyawan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_kepdis as $kdis) : ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td><?= $kdis['nik'] ?></td>
                                    <td><?= $kdis['id_jabatan'] ?></td>
                                    <td><?= $kdis['id_divisi'] ?></td>
                                    <td><?= $kdis['nama_karyawan'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-data-operator<?= $kdis['id_karyawan'] ?>">
                                            Edit
                                        </button>
                                        <!-- <a class="btn btn-primary" href="<?php echo base_url('admin/master_data/edit_divisi/' . $kdis['id_karyawan']); ?>">Edit</a> -->
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin/master_data/delete_data_kepdis/' .  $kdis['id_karyawan']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Modal Tambah -->
            <div class="modal fade text-left" id="tambah-data-operator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="Mytambah-data-operator">Tambah <?= $title; ?></h4>
                            <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x">x</i>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/master_data/data_kepdis'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <label>NIK</label>
                                <div class="form-group">
                                    <input type="text" name="nik" id="nik" class="form-control">
                                </div>
                                <!-- <label>ID Jabatan</label>
                                                <div class="form-group">
                                                    <select name="id_jabatan" id="id_jabatan" class="form-control">
                                                        <?php foreach ($data_jabatan as $djb) : ?>
                                                            <option value="<?= $djb['id_jabatan']; ?>"><?= $djb['id_jabatan'] . ' - ' . $djb['nama_jabatan']; ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div> -->
                                <label>ID Divisi</label>
                                <div class="form-group">
                                    <select name="id_divisi" id="id_divisi" class="form-control">
                                        <?php foreach ($data_divisi as $dvs) : ?>
                                            <option value="<?= $dvs['id_divisi']; ?>"><?= $dvs['id_divisi'] . ' - ' . $dvs['nama_divisi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <label>Nama Karyawan</label>
                                <div class="form-group">
                                    <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Kembali</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Modal Tambah -->


            <!-- Modal Edit -->
            <?php foreach ($data_kepdis as $kdis) : ?>
                <div class="modal fade text-left" id="edit-data-operator<?= $kdis['id_karyawan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="Myedit-data-operator">Edit <?= $title; ?></h4>
                                <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x">x</i>
                                </button>
                            </div>
                            <form action="<?= base_url('admin/master_data/update_data_kepdis'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <label>NIK</label>
                                    <div class="form-group">
                                        <input type="text" name="nik" id="nik" class="form-control" value="<?= $kdis['nik'] ?>">
                                        <input type="hidden" name="id" id="id" class="form-control" value="<?= $kdis['id_karyawan'] ?>">
                                    </div>
                                    <label>ID Divisi</label>
                                    <div class="form-group">
                                        <select name="id_divisi" id="id_divisi" class="form-control">
                                            <option value="<?= $kdis['id_divisi'] ?>"><?= $kdis['id_divisi'] ?></option>
                                            <?php foreach ($data_divisi as $dvs) : ?>
                                                <option value="<?= $dvs['id_divisi']; ?>"><?= $dvs['id_divisi'] . ' - ' . $dvs['nama_divisi']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label>Nama Karyawan</label>
                                    <div class="form-group">
                                        <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control" value="<?= $kdis['nama_karyawan'] ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Kembali</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary ml-1">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Simpan</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- End Modal Edit -->
        </div>

    </div>
    <!-- /.container-fluid -->