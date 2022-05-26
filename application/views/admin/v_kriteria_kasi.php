<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kriteria untuk Kepala Divisi</h6>
    </div>
    <div class="card-content collapse show">
      <div class="card-body">
        <?php if (validation_errors()) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= validation_errors(); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <?= $this->session->flashdata('pesan_update_kriteria_kasi') ?>
        <a href="<?= base_url() . 'admin/master_data/tambah_kriteria_kasi'; ?>"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Kriteria</button></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Kriteria Kasi</th>
                <th>Kriteria Penilaian</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($kriteria_kasi as $kri) { ?>
                <tr>

                  <?= ($kri->id_kriteria_kasi == 'KKS010' ? '<td>KKS0010</td>' : "<td>" . $kri->id_kriteria_kasi . "</td>") ?>

                  <td><?= $kri->nama_kriteria_kasi ?></td>
                  <td>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-data-krikasi<?= $kri->id_kriteria_kasi ?>">
                      Edit
                    </button>
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin/master_data/hapus_kriteria_kasi/' . $kri->id_kriteria_kasi) ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Modal Edit -->
      <?php foreach ($kriteria_kasi as $kri) : ?>
        <div class="modal fade text-left" id="edit-data-krikasi<?= $kri->id_kriteria_kasi;  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="Myedit-data-operator">Edit <?= $title; ?></h4>
                <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x">x</i>
                </button>
              </div>
              <form action="<?= base_url('admin/master_data/update_kriteria_kasi'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                  <label for="id_divisi"> ID Kriteria Kasi : </label>
                  <div class="form-group">
                    <input type="text" name="id_kriteria_kasi" id="id_kriteria_kasi" value="<?= $kri->id_kriteria_kasi; ?>" class="form-control" readonly>
                  </div>
                  <label for="nama_divisi"> Kriteria Penilaian : </label>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama_kriteria_kasi" name="nama_kriteria_kasi" value="<?= $kri->nama_kriteria_kasi ?>" required>
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