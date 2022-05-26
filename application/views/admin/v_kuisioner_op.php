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
              <th>
                No
              </th>
              <th>
                ID
              </th>
              <th>
                Kuis
              </th>
            </thead>
            <?php
            $no = 1;
            foreach ($data as $dt) : ?>
              <tbody>
                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_productivity'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_productivity'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_komker'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_komker'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_pelaksana5r'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_pelaksana5r'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_dokumentasi'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_dokumentasi'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_pahamdanlaksanak3'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_pahamdanlaksanak3'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_pahamsop'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_pahamsop'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_pahamtools'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_pahamtools'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_kehadiran'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_kehadiran'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $dt['idk_disiplin'] ?>
                  </td>
                  <td>
                    <?= $dt['kuis_disiplin'] ?>
                  </td>
                </tr>
                <!--  -->

                <tr>
                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?php if ($dt['idk_inisiatif'] == 'KOP01') : ?>
                      KOP0010
                    <?php endif; ?>
                  </td>
                  <td>
                    <?= $dt['kuis_inisiatif'] ?>
                  </td>
                </tr>
                <!--  -->


              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3">
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-kuisioner<?= $dt['id_kuis'] ?>">
                      Edit
                    </button>
                  </td>
                </tr>
              </tfoot>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>


    <!-- Modal Tambah -->
    <div class="modal fade text-left" id="tambah-data-operator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="Mytambah-data-operator">Tambah <?= $title; ?></h4>
            <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
              <i data-feather="x">x</i>
            </button>
          </div>
          <form action="<?= base_url('admin/master_data/kuisioner_op'); ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="form-group">
                    <select name="idk_productivity" id="idk_productivity" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_productivity" id="kuis_productivity" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_komker" id="idk_komker" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_komker" id="kuis_komker" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_pelaksana5r" id="idk_pelaksana5r" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_pelaksana5r" id="kuis_pelaksana5r" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_dokumentasi" id="idk_dokumentasi" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_dokumentasi" id="kuis_dokumentasi" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_pahamdanlaksanak3" id="idk_pahamdanlaksanak3" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_pahamdanlaksanak3" id="kuis_pahamdanlaksanak3" class="form-control">
                  </div>
                  <!--  -->
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <select name="idk_pahamsop" id="idk_pahamsop" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_pahamsop" id="kuis_pahamsop" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_pahamtools" id="idk_pahamtools" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_pahamtools" id="kuis_pahamtools" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_kehadiran" id="idk_kehadiran" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_kehadiran" id="kuis_kehadiran" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_disiplin" id="idk_disiplin" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_disiplin" id="kuis_disiplin" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="idk_inisiatif" id="idk_inisiatif" class="form-control form-control-sm">
                      <?php foreach ($data_kriteria as $dkt) : ?>
                        <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <input type="text" name="kuis_inisiatif" id="kuis_inisiatif" class="form-control">
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <select name="status_kuis" id="status_kuis" class="form-control form-control-sm">
                      <option value="Operator">Operator</option>
                      <!-- <option value="Kepala Divisi">Kepala Divisi</option> -->
                    </select>
                  </div>
                </div>
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
    <?php foreach ($data as $dt) : ?>
      <div class="modal fade text-left" id="edit-kuisioner<?= $dt['id_kuis'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="Myedit-data-operator">Edit <?= $title; ?></h4>
              <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
                <i data-feather="x">x</i>
              </button>
            </div>
            <form action="<?= base_url('admin/master_data/update_kuisioner_op'); ?>" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="row justify-content-center">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <select name="idk_productivity" id="idk_productivity" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_productivity'] ?>"><?= $dt['idk_productivity'] ?></option>
                        <!--  -->
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                        <!--  -->
                      </select>
                      <input type="text" name="kuis_productivity" id="kuis_productivity" value="<?= $dt['kuis_productivity'] ?>" class="form-control">
                      <input type="hidden" name="id" id="id" value="<?= $dt['id_kuis'] ?>">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_komker" id="idk_komker" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_komker'] ?>"><?= $dt['idk_komker'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_komker" id="kuis_komker" value="<?= $dt['kuis_komker'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_pelaksana5r" id="idk_pelaksana5r" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_pelaksana5r'] ?>"><?= $dt['idk_pelaksana5r'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_pelaksana5r" id="kuis_pelaksana5r" value="<?= $dt['kuis_pelaksana5r'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_dokumentasi" id="idk_dokumentasi" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_dokumentasi'] ?>"><?= $dt['idk_dokumentasi'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_dokumentasi" id="kuis_dokumentasi" value="<?= $dt['kuis_dokumentasi'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_pahamdanlaksanak3" id="idk_pahamdanlaksanak3" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_pahamdanlaksanak3'] ?>"><?= $dt['idk_pahamdanlaksanak3'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_pahamdanlaksanak3" id="kuis_pahamdanlaksanak3" value="<?= $dt['kuis_pahamdanlaksanak3'] ?>" class="form-control">
                    </div>
                    <!--  -->

                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <select name="idk_pahamsop" id="idk_pahamsop" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_pahamsop'] ?>"><?= $dt['idk_pahamsop'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_pahamsop" id="kuis_pahamsop" value="<?= $dt['kuis_pahamsop'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_pahamtools" id="idk_pahamtools" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_pahamtools'] ?>"><?= $dt['idk_pahamtools'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_pahamtools" id="kuis_pahamtools" value="<?= $dt['kuis_pahamtools'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_kehadiran" id="idk_kehadiran" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_kehadiran'] ?>"><?= $dt['idk_kehadiran'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_kehadiran" id="kuis_kehadiran" value="<?= $dt['kuis_kehadiran'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_disiplin" id="idk_disiplin" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_disiplin'] ?>"><?= $dt['idk_disiplin'] ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_disiplin" id="kuis_disiplin" value="<?= $dt['kuis_disiplin'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="idk_inisiatif" id="idk_inisiatif" class="form-control form-control-sm">
                        <option value="<?= $dt['idk_inisiatif'] ?>"><?= ($dt['idk_inisiatif'] == 'KOP01' ? 'KOP0010' : '0') ?></option>
                        <?php foreach ($data_kriteria as $dkt) : ?>
                          <option value="<?= $dkt['id_kriteria_op'] ?>"><?= $dkt['nama_kriteria_op'] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <input type="text" name="kuis_inisiatif" id="kuis_inisiatif" value="<?= $dt['kuis_inisiatif'] ?>" class="form-control">
                    </div>
                    <!--  -->

                    <div class="form-group">
                      <select name="status_kuis" id="status_kuis" class="form-control form-control-sm">
                        <option value="<?= $dt['status_kuis'] ?>"><?= $dt['status_kuis'] ?></option>
                        <option value="Operator">Operator</option>
                        <!-- <option value="Kepala Divisi">Kepala Divisi</option> -->
                      </select>
                    </div>
                  </div>
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