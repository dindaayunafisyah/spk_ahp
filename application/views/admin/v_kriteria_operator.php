<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kriteria untuk Operator</h6>
    </div>
    <div class="card-content collapse show">
      <div class="card-body">
        <a href="<?= base_url() . 'admin/master_data/tambah_kriteria_op'; ?>"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Kriteria</button></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Kriteria Operator</th>
                <th>Kriteria Penilaian</th>
                <th>Nilai Banding</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($kriteria_op as $kri) { ?>
                <tr>
                  <td><?= $kri->id_kriteria_op ?></td>
                  <td><?= $kri->nama_kriteria_op ?></td>
                  <td><?= $kri->nilai_kriteria_op; ?></td>
                  <td>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-data-kriteria<?= $kri->id_kriteria_op ?>">
                      Edit
                    </button>
                    <!-- <a class="btn btn-primary" href="<?php echo base_url('admin/master_data/edit_kriteria_op/' . $kri->id_kriteria_op); ?>">Edit</a> -->
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin/master_data/hapus_kriteria_op/' . $kri->id_kriteria_op) ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th></th>
                <?php foreach ($kriteria_op as $kri) : ?>
                  <th><?= $kri->nama_kriteria_op ?></th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($kriteria_op as $kri) { ?>
                <tr>
                  <td><?= $kri->nama_kriteria_op ?></td>
                  <?php foreach ($kriteria_op as $kri1) : ?>
                    <?php
                    $res = $kri1->nilai_kriteria_op / $kri->nilai_kriteria_op;
                    if ($res == 1) : ?>
                      <td style="background-color: aqua;"><?= $res; ?></td>
                    <?php else : ?>
                      <td><?= $res; ?></td>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>


      <!-- Modal Edit -->
      <?php foreach ($kriteria_op as $kri) : ?>
        <div class="modal fade text-left" id="edit-data-kriteria<?= $kri->id_kriteria_op;  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="Myedit-data-operator">Edit <?= $title; ?></h4>
                <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x">x</i>
                </button>
              </div>
              <form action="<?= base_url('admin/master_data/update_kriteria_op'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                  <label for="id_divisi"> ID Kriteria Operator : </label>
                  <div class="form-group">
                    <input type="text" name="id_kriteria_op" id="id_kriteria_op" value="<?= $kri->id_kriteria_op; ?>" class="form-control" readonly>
                  </div>
                  <label for="nama_divisi"> Kriteria Penilaian : </label>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama_kriteria_op" name="nama_kriteria_op" value="<?= $kri->nama_kriteria_op ?>" required>
                  </div>
                  <label for="Nilai Banding"> Nilai Banding : </label>
                  <div class="form-group">
                    <select class="form-control form-control-user" id="nilai_banding" name="nilai_banding" required>
                      <option value="<?= $kri->nilai_kriteria_op ?>"><?= $kri->nilai_kriteria_op ?></option>
                      <?php foreach ($data_nilban as $dnb) : ?>
                        <option value="<?= $dnb['nilai'] ?>"><?= $dnb['nama_nilai'] . ' - ' . $dnb['nilai'] ?></option>
                      <?php endforeach; ?>
                    </select>
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

  <!-- modal delete -->