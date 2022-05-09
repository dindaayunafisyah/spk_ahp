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
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($kriteria_op as $kri) : ?>
                <tr>
                  <?php if ($kri->id_kriteria_op != "KOP01") : ?>
                    <td><?= $kri->id_kriteria_op ?></td>
                  <?php else : ?>
                    <td>KOP0010</td>
                  <?php endif; ?>
                  <td><?= $kri->nama_kriteria_op ?></td>
                  <td>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-data-kriteria<?= $kri->id_kriteria_op ?>">
                      Edit
                    </button>
                    <!-- <a class="btn btn-primary" href="<?php echo base_url('admin/master_data/edit_kriteria_op/' . $kri->id_kriteria_op); ?>">Edit</a> -->
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin/master_data/hapus_kriteria_op/' . $kri->id_kriteria_op) ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <td colspan="11">
                  <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <?= validation_errors(); ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php endif; ?>
                  <?= $this->session->flashdata('message') ?>
                </td>
              </tr>
              <tr>
                <th></th>
                <?php
                foreach ($data_anop as $dao) : ?>
                  <th>
                    <?php
                    switch ($dao):
                      case $dao['id_anop'] == 1:
                        echo 'Productivty';
                        break;
                      case $dao['id_anop'] == 2:
                        echo 'Kerjasama dan Komunikasi';
                        break;
                      case $dao['id_anop'] == 3:
                        echo 'Pelaksanaan 5 R';
                        break;
                      case $dao['id_anop'] == 4:
                        echo 'Dokumentasi';
                        break;
                      case $dao['id_anop'] == 5:
                        echo 'Pemahaman dan Pelaksanaan K3';
                        break;
                      case $dao['id_anop'] == 6:
                        echo 'Pemahaman SOP';
                        break;
                      case $dao['id_anop'] == 7:
                        echo 'Pemahaman Tools';
                        break;
                      case $dao['id_anop'] == 8:
                        echo 'Kehadiran';
                        break;
                      case $dao['id_anop'] == 9:
                        echo 'Kedisiplinan';
                        break;
                      case $dao['id_anop'] == 10:
                        echo 'Inisiatif';
                        break;
                    ?>
                    <?php endswitch; ?>
                  </th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <form action="<?php echo base_url() . 'admin/master_data/update_analisa_perbandingan'; ?>" method="POST">
              <tbody>
                <tr>
                </tr>
                <?php
                foreach ($data_anop as $dao) : ?>
                  <tr>
                    <td>
                      <?php
                      switch ($dao):
                        case $dao['id_anop'] == 1:
                          echo 'Productivty';
                          break;
                        case $dao['id_anop'] == 2:
                          echo 'Kerjasama dan Komunikasi';
                          break;
                        case $dao['id_anop'] == 3:
                          echo 'Pelaksanaan 5 R';
                          break;
                        case $dao['id_anop'] == 4:
                          echo 'Dokumentasi';
                          break;
                        case $dao['id_anop'] == 5:
                          echo 'Pemahaman dan Pelaksanaan K3';
                          break;
                        case $dao['id_anop'] == 6:
                          echo 'Pemahaman SOP';
                          break;
                        case $dao['id_anop'] == 7:
                          echo 'Pemahaman Tools';
                          break;
                        case $dao['id_anop'] == 8:
                          echo 'Kehadiran';
                          break;
                        case $dao['id_anop'] == 9:
                          echo 'Kedisiplinan';
                          break;
                        case $dao['id_anop'] == 10:
                          echo 'Inisiatif';
                          break;
                      ?>
                      <?php endswitch; ?>
                    </td>

                    <td>
                      <select name="productivity[]" id="productivity" class="form-control">
                        <option value="<?= $dao['productivity'] ?>"> <?= $dao['productivity'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>



                    <td>
                      <select name="kerjasamadankom[]" id="kerjasamadankom" class="form-control">
                        <option value="<?= $dao['kerjasamadankom'] ?>"> <?= $dao['kerjasamadankom'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>



                    <td>
                      <select name="pelaksana5r[]" id="pelaksana5r" class="form-control">
                        <option value=" <?= $dao['pelaksana5r'] ?>"> <?= $dao['pelaksana5r'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>



                    <td>
                      <select name="dokumentasi[]" id="dokumentasi" class="form-control">
                        <option value="<?= $dao['dokumentasi'] ?>"> <?= $dao['dokumentasi'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>

                    <td>
                      <select name="paham_laksana_k3[]" id="paham_laksana_k3" class="form-control">
                        <option value="<?= $dao['paham_laksana_k3'] ?>"> <?= $dao['paham_laksana_k3'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>

                    </td>

                    <td>
                      <select name="paham_sop[]" id="paham_sop" class="form-control">
                        <option value="<?= $dao['paham_sop'] ?>"> <?= $dao['paham_sop'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>

                    <td>
                      <select name="paham_tools[]" id="paham_tools" class="form-control">
                        <option value="<?= $dao['paham_tools'] ?>"> <?= $dao['paham_tools'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>

                    <td>
                      <select name="hadir[]" id="hadir" class="form-control">
                        <option value="<?= $dao['hadir'] ?>"> <?= $dao['hadir'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>

                    <td>
                      <select name="disiplin[]" id="disiplin" class="form-control">
                        <option value="<?= $dao['disiplin'] ?>"> <?= $dao['disiplin'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>

                    <td>
                      <select name="inisiatif[]" id="inisiatif" class="form-control">
                        <option value="<?= $dao['inisiatif'] ?>"> <?= $dao['inisiatif'] ?></option>
                        <?php foreach ($data_nilban as $dbn) : ?>
                          <option value="<?= $dbn['nilai'] ?>"><?= $dbn['nama_nilai'] . ' - ' . $dbn['nilai'] ?></option>
                          <?php foreach ($data_nilban1 as $dbn1) : ?>
                            <?php if ($dbn1 != $dbn) : ?>
                              <option value="<?= $dbn1['nilai'] / $dbn['nilai'] ?>"><?= '1 dibagi ' . $dbn['nama_nilai'] . ' - &sup' . $dbn1['nilai'] . ' / ' . $dbn['nilai'] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </select>
                    </td>
                  </tr>
                <?php endforeach; ?>

                <?php foreach ($data_sum as $dsm) : ?>
                  <tr style="font-weight: bold; font-size:15px;">
                    <td><strong>Total</strong></td>
                    <td>
                      <?= $dsm['sumProc']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumKdk']; ?>
                    </td>
                    <td>
                      <?= $dsm['sump5r']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumDoc']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumplk3']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumPsop']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumPtls']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumHdr']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumDsp']; ?>
                    </td>
                    <td>
                      <?= $dsm['sumInf']; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="5"></td>
                  <td>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                  </td>
                  <td colspan="5"></td>
                </tr>
              </tfoot>
            </form>
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