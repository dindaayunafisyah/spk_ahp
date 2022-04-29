<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Nilai Banding</h6>
    </div>
    <div class="card-content collapse show">
      <div class="card-body">
        <a href="<?= base_url() . 'admin/master_data/tambah_nilai'; ?>"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">
            <i class="ft-plus"></i>
            Tambah Data
          </button>
        </a>
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
                <th>ID Nilai</th>
                <th>Nama Nilai</th>
                <th>Nilai</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($nilai as $ni) { ?>
                <tr>
                  <td><?= $ni->id_nilai ?></td>
                  <td><?= $ni->nama_nilai ?></td>
                  <td><?= $ni->nilai ?></td>
                  <td>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-nilai-banding<?= $ni->id_nilai; ?>">
                      Edit
                    </button>
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin/master_data/delete_nilai_banding/' .  $ni->id_nilai) ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Modal Edit -->
      <?php foreach ($nilai as $ni) : ?>
        <div class="modal fade text-left" id="edit-nilai-banding<?= $ni->id_nilai ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="Myedit-data-operator">Edit <?= $title; ?></h4>
                <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x">x</i>
                </button>
              </div>
              <form action="<?= base_url('admin/master_data/update_nilai_banding'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                  <label for="id_divisi"> ID Nilai : </label>
                  <div class="form-group">
                    <input type="text" name="id_nilai" id="id_nilai" value="<?= $ni->id_nilai; ?>" class="form-control" readonly>
                  </div>
                  <label for="nama_divisi"> Nama Nilai : </label>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama_nilai" name="nama_nilai" value="<?= $ni->nama_nilai; ?>" required>
                  </div>
                  <label for="nama_divisi"> Nilai : </label>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nilai" name="nilai" value="<?= $ni->nilai; ?>" required>
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