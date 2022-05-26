<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Divisi</h6>
    </div>
    <div class="card-content collapse show">
      <div class="card-body">
        <a href="<?= base_url() . 'admin/master_data/tambah_divisi'; ?>"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Divisi</button></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Divisi</th>
                <th>Nama Divisi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($divisi as $div) { ?>
                <tr>
                  <td><?= $div->id_divisi ?></td>
                  <td><?= $div->nama_divisi ?></td>
                  <td>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-divisi<?= $div->id_divisi; ?>">
                      Edit
                    </button>
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin/master_data/hapus_divisi/' . $div->id_divisi) ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  <!-- modal delete -->


  <!-- Modal Edit -->
  <?php foreach ($divisi as $div) : ?>
    <div class="modal fade text-left" id="edit-divisi<?= $div->id_divisi; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="Myedit-divisi">Edit <?= $title; ?></h4>
            <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
              <i data-feather="x">x</i>
            </button>
          </div>
          <form action="<?= base_url('admin/master_data/update_divisi'); ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <label>Nama Divisi</label>
              <div class="form-group">
                <input type="text" name="nama_divisi" id="nama_divisi" class="form-control" value="<?= $div->nama_divisi ?>">
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $div->id_divisi ?>">
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