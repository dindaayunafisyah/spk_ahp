<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= validation_errors(); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message') ?>
        <!-- Content Row -->
        <!-- Disini tempat membuat Edit Profil nya! -->
    </div>
    <div class="col-lg-10">
        <form action="<?php echo base_url() . 'admin/master_data/analisa_perbandingan'; ?>" method="post">
            <table class="table table-responsive table-hover">
                <?php foreach ($data_kriop as $dko) : ?>
                    <?php foreach ($data_kriop as $dko1) : ?>
                        <tr>
                            <td>
                                <?= $dko['nama_kriteria_op'] . '&nbsp;&nbsp;&nbsp;&nbsp;' ?>
                            </td>
                            <td>
                                <select name="<?= str_replace(" ", "_", $dko['nama_kriteria_op']) ?>[]" id="<?= str_replace(" ", "_", $dko['nama_kriteria_op']) ?>" class="form-control">
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
                                <?= '&nbsp;&nbsp;&nbsp;&nbsp;' . $dko1['nama_kriteria_op']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
            <div class="row">
                <div class="col-lg-2">
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
                </div>
                <div class="col-lg-2">
                    <a href="<?php echo base_url('admin/master_data/tampil_kriteria_op'); ?>" class="btn btn-outline-secondary btn-user btn-block">Batal</a>
                </div>
            </div>
        </form>
        <br>
        <div class="text-center">
            <div class="row">

            </div>
            <!-- Batas edit profil -->
            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-6 mb-4">

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>