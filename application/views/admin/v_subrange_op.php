<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?> Operator</h6>
        </div>
        <div class="card-content collapse show">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="productivity-tab" data-bs-toggle="tab" href="#productivity" role="tab" aria-controls="productivity" aria-selected="true"><?= $title1; ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="kerdankom-tab" data-bs-toggle="tab" href="#kerdankom" role="tab" aria-controls="kerdankom" aria-selected="false"><?= $title2 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pelaksana5r-tab" data-bs-toggle="tab" href="#pelaksana5r" role="tab" aria-controls="pelaksana5r" aria-selected="false"><?= $title3 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="dokumentasi-tab" data-bs-toggle="tab" href="#dokumentasi" role="tab" aria-controls="dokumentasi" aria-selected="false"><?= $title4 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="<?= str_replace(" ", "_", $title5) ?>-tab" data-bs-toggle="tab" href="#<?= str_replace(" ", "_", $title5) ?>" role="tab" aria-controls="<?= str_replace(" ", "_", $title5) ?>" aria-selected="false"><?= $title5 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="<?= str_replace(" ", "_", $title6) ?>-tab" data-bs-toggle="tab" href="#<?= str_replace(" ", "_", $title6) ?>" role="tab" aria-controls="<?= str_replace(" ", "_", $title6) ?>" aria-selected="false"><?= $title6 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="<?= str_replace(" ", "_", $title7) ?>-tab" data-bs-toggle="tab" href="#<?= str_replace(" ", "_", $title7) ?>" role="tab" aria-controls="<?= str_replace(" ", "_", $title7) ?>" aria-selected="false"><?= $title7 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="<?= str_replace(" ", "_", $title8) ?>-tab" data-bs-toggle="tab" href="#<?= str_replace(" ", "_", $title8) ?>" role="tab" aria-controls="<?= str_replace(" ", "_", $title8) ?>" aria-selected="false"><?= $title8 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="<?= str_replace(" ", "_", $title9) ?>-tab" data-bs-toggle="tab" href="#<?= str_replace(" ", "_", $title9) ?>" role="tab" aria-controls="<?= str_replace(" ", "_", $title9) ?>" aria-selected="false"><?= $title9 ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="<?= str_replace(" ", "_", $title10) ?>-tab" data-bs-toggle="tab" href="#<?= str_replace(" ", "_", $title10) ?>" role="tab" aria-controls="<?= str_replace(" ", "_", $title10) ?>" aria-selected="false"><?= $title10 ?></a>
                                </li>
                            </ul>
                            <!--  -->
                            <div class="tab-content" id="myTabContent">




                                <!-- ------------------------------------------- Productivity ------------------------------------------- -->


                                <div class="tab-pane fade show active" id="productivity" role="tabpanel" aria-labelledby="productivity-tab">
                                    <!--  -->
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_product as $supro) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($supro):
                                                                case $supro['id_subrange_proc'] == 1:
                                                                    echo 'Pekerjaan Selesai > 90 %';
                                                                    break;
                                                                case $supro['id_subrange_proc'] == 2:
                                                                    echo 'Pekerjaan Selesai 80 % - 90 %';
                                                                    break;
                                                                case $supro['id_subrange_proc'] == 3:
                                                                    echo 'Pekerjaan Selesai 60 % - 79 %';
                                                                    break;
                                                                case $supro['id_subrange_proc'] == 4:
                                                                    echo 'Pekerjaan Selesai < 60 %';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_Productivity'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_product as $supro) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($supro):
                                                                    case $supro['id_subrange_proc'] == 1:
                                                                        echo 'Pekerjaan Selesai > 90 %';
                                                                        break;
                                                                    case $supro['id_subrange_proc'] == 2:
                                                                        echo 'Pekerjaan Selesai 80 % - 90 %';
                                                                        break;
                                                                    case $supro['id_subrange_proc'] == 3:
                                                                        echo 'Pekerjaan Selesai 60 % - 79 %';
                                                                        break;
                                                                    case $supro['id_subrange_proc'] == 4:
                                                                        echo 'Pekerjaan Selesai < 60 %';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($supro['pekerjaan_90'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="pekerjaan_90[]" id="pekerjaan_90" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $supro['pekerjaan_90'] ?>"> <?= $supro['pekerjaan_90'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="pekerjaan_90[]" id="pekerjaan_90" class="form-control">
                                                                        <option value="<?= $supro['pekerjaan_90'] ?>"> <?= $supro['pekerjaan_90'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($supro['pekerjaan_80_90'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="pekerjaan_80_90[]" id="pekerjaan_80_90" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $supro['pekerjaan_80_90'] ?>"> <?= $supro['pekerjaan_80_90'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="pekerjaan_80_90[]" id="pekerjaan_80_90" class="form-control">
                                                                        <option value="<?= $supro['pekerjaan_80_90'] ?>"> <?= $supro['pekerjaan_80_90'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($supro['pekerjaan_60_79'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="pekerjaan_60_79[]" id="pekerjaan_60_79" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $supro['pekerjaan_60_79'] ?>"> <?= $supro['pekerjaan_60_79'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="pekerjaan_60_79[]" id="pekerjaan_60_79" class="form-control">
                                                                        <option value="<?= $supro['pekerjaan_60_79'] ?>"> <?= $supro['pekerjaan_60_79'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($supro['pekerjaan_59'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="pekerjaan_59[]" id="pekerjaan_59" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $supro['pekerjaan_59'] ?>"> <?= $supro['pekerjaan_59'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="pekerjaan_59[]" id="pekerjaan_59" class="form-control">
                                                                        <option value="<?= $supro['pekerjaan_59'] ?>"> <?= $supro['pekerjaan_59'] ?></option>
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
                                                            <?php endif; ?>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subproduct['sum90']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subproduct['sum8090']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subproduct['sum6079']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subproduct['sum59']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_product as $supro) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($supro):
                                                                case $supro['id_subrange_proc'] == 1:
                                                                    echo 'Pekerjaan Selesai > 90 %';
                                                                    break;
                                                                case $supro['id_subrange_proc'] == 2:
                                                                    echo 'Pekerjaan Selesai 80 % - 90 %';
                                                                    break;
                                                                case $supro['id_subrange_proc'] == 3:
                                                                    echo 'Pekerjaan Selesai 60 % - 79 %';
                                                                    break;
                                                                case $supro['id_subrange_proc'] == 4:
                                                                    echo 'Pekerjaan Selesai < 60 %';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_product as $submproc) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($submproc):
                                                                case $submproc['id_submatrix_proc'] == 1:
                                                                    echo 'Pekerjaan Selesai > 90 %';
                                                                    break;
                                                                case $submproc['id_submatrix_proc'] == 2:
                                                                    echo 'Pekerjaan Selesai 80 % - 90 %';
                                                                    break;
                                                                case $submproc['id_submatrix_proc'] == 3:
                                                                    echo 'Pekerjaan Selesai 60 % - 79 %';
                                                                    break;
                                                                case $submproc['id_submatrix_proc'] == 4:
                                                                    echo 'Pekerjaan Selesai < 60 %';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $submproc['pekerjaan_90'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submproc['pekerjaan_80_90'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submproc['pekerjaan_60_79'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submproc['pekerjaan_59'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submproc['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submproc['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submproc['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixproduct['sum90']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixproduct['sum8090']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixproduct['sum6079']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixproduct['sum59']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixproduct['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixproduct['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixproduct['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixproduct['submtxEig'] - $count_subproduct['jumSubProc']) / ($count_subproduct['jumSubProc'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>

                                    </div>
                                </div>






                                <!-- ------------------------------------------- Kerjasama dan Komunikasi ------------------------------------------- -->


                                <div class="tab-pane fade" id="kerdankom" role="tabpanel" aria-labelledby="kerdankom-tab">
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_komdanker as $kdk) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($kdk):
                                                                case $kdk['id_subrange_kdk'] == 1:
                                                                    echo 'Sangat Baik';
                                                                    break;
                                                                case $kdk['id_subrange_kdk'] == 2:
                                                                    echo 'Baik';
                                                                    break;
                                                                case $kdk['id_subrange_kdk'] == 3:
                                                                    echo 'Kurang';
                                                                    break;
                                                                case $kdk['id_subrange_kdk'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_KerjasamadanKomunikasi'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_komdanker as $kdk) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($kdk):
                                                                    case $kdk['id_subrange_kdk'] == 1:
                                                                        echo 'Sangat Baik';
                                                                        break;
                                                                    case $kdk['id_subrange_kdk'] == 2:
                                                                        echo 'Baik';
                                                                        break;
                                                                    case $kdk['id_subrange_kdk'] == 3:
                                                                        echo 'Kurang';
                                                                        break;
                                                                    case $kdk['id_subrange_kdk'] == 4:
                                                                        echo 'Tidak Mampu';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($kdk['sangat_baik'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="sangat_baik[]" id="sangat_baik" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $kdk['sangat_baik'] ?>"> <?= $kdk['sangat_baik'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="sangat_baik[]" id="sangat_baik" class="form-control">
                                                                        <option value="<?= $kdk['sangat_baik'] ?>"> <?= $kdk['sangat_baik'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($kdk['baik'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="baik[]" id="baik" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $kdk['baik'] ?>"> <?= $kdk['baik'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="baik[]" id="baik" class="form-control">
                                                                        <option value="<?= $kdk['baik'] ?>"> <?= $kdk['baik'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($kdk['kurang'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="kurang[]" id="kurang" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $kdk['kurang'] ?>"> <?= $kdk['kurang'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="kurang[]" id="kurang" class="form-control">
                                                                        <option value="<?= $kdk['kurang'] ?>"> <?= $kdk['kurang'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($kdk['tidak_mampu'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="tidak_mampu[]" id="tidak_mampu" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $kdk['tidak_mampu'] ?>"> <?= $kdk['tidak_mampu'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="tidak_mampu[]" id="tidak_mampu" class="form-control">
                                                                        <option value="<?= $kdk['tidak_mampu'] ?>"> <?= $kdk['tidak_mampu'] ?></option>
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
                                                            <?php endif; ?>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subkomdanker['sumSB']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkomdanker['sumBaik']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkomdanker['sumKurang']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkomdanker['sumTK']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_komdanker as $kdk) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($kdk):
                                                                case $kdk['id_subrange_kdk'] == 1:
                                                                    echo 'Sangat Baik';
                                                                    break;
                                                                case $kdk['id_subrange_kdk'] == 2:
                                                                    echo 'Baik';
                                                                    break;
                                                                case $kdk['id_subrange_kdk'] == 3:
                                                                    echo 'Kurang';
                                                                    break;
                                                                case $kdk['id_subrange_kdk'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_komdanker as $submkdk) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($submkdk):
                                                                case $submkdk['id_submatrix_kdk'] == 1:
                                                                    echo 'Sangat Baik';
                                                                    break;
                                                                case $submkdk['id_submatrix_kdk'] == 2:
                                                                    echo 'Baik';
                                                                    break;
                                                                case $submkdk['id_submatrix_kdk'] == 3:
                                                                    echo 'Kurang';
                                                                    break;
                                                                case $submkdk['id_submatrix_kdk'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $submkdk['sangat_baik'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submkdk['baik'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submkdk['kurang'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submkdk['tidak_mampu'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submkdk['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submkdk['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submkdk['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixkomdanker['sumSB']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkomdanker['sumBaik']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkomdanker['sumKurang']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkomdanker['sumTK']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkomdanker['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkomdanker['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkomdanker['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixkomdanker['submtxEig'] - $count_subkomdanker['jumSubKdk']) / ($count_subkomdanker['jumSubKdk'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>

                                    </div>
                                </div>









                                <!-- ------------------------------------------- Pelaksananaan 5 R ------------------------------------------- -->



                                <div class="tab-pane fade" id="pelaksana5r" role="tabpanel" aria-labelledby="pelaksana5r-tab">
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_pelaksana5r as $spl5r) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($spl5r):
                                                                case $spl5r['id_subrange_p5r'] == 1:
                                                                    echo 'Melaksanakan';
                                                                    break;
                                                                case $spl5r['id_subrange_p5r'] == 2:
                                                                    echo 'Kurang Melaksanakan';
                                                                    break;
                                                                case $spl5r['id_subrange_p5r'] == 3:
                                                                    echo 'Tidak Melaksanakan';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_Pelaksana5R'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_pelaksana5r as $spl5r) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($spl5r):
                                                                    case $spl5r['id_subrange_p5r'] == 1:
                                                                        echo 'Melaksanakan';
                                                                        break;
                                                                    case $spl5r['id_subrange_p5r'] == 2:
                                                                        echo 'Kurang Melaksanakan';
                                                                        break;
                                                                    case $spl5r['id_subrange_p5r'] == 3:
                                                                        echo 'Tidak Melaksanakan';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($spl5r['melaksanakan'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="melaksanakan[]" id="melaksanakan" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $spl5r['melaksanakan'] ?>"> <?= $spl5r['melaksanakan'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="melaksanakan[]" id="melaksanakan" class="form-control">
                                                                        <option value="<?= $spl5r['melaksanakan'] ?>"> <?= $spl5r['melaksanakan'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($spl5r['kurang_melaksanakan'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="kurang_melaksanakan[]" id="kurang_melaksanakan" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $spl5r['kurang_melaksanakan'] ?>"> <?= $spl5r['kurang_melaksanakan'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="kurang_melaksanakan[]" id="kurang_melaksanakan" class="form-control">
                                                                        <option value="<?= $spl5r['kurang_melaksanakan'] ?>"> <?= $spl5r['kurang_melaksanakan'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($spl5r['tidak_melaksanakan'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="tidak_melaksanakan[]" id="tidak_melaksanakan" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $spl5r['tidak_melaksanakan'] ?>"> <?= $spl5r['tidak_melaksanakan'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="tidak_melaksanakan[]" id="tidak_melaksanakan" class="form-control">
                                                                        <option value="<?= $spl5r['tidak_melaksanakan'] ?>"> <?= $spl5r['tidak_melaksanakan'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subpelaksana5r['sumLaks']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpelaksana5r['sumKurLaks']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpelaksana5r['sumTidLaks']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_pelaksana5r as $spl5r) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($spl5r):
                                                                case $spl5r['id_subrange_p5r'] == 1:
                                                                    echo 'Melaksanakan';
                                                                    break;
                                                                case $spl5r['id_subrange_p5r'] == 2:
                                                                    echo 'Kurang Melaksanakan';
                                                                    break;
                                                                case $spl5r['id_subrange_p5r'] == 3:
                                                                    echo 'Tidak Melaksanakan';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_pelaksana5r as $submpl5r) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($submpl5r):
                                                                case $submpl5r['id_submatrix_p5r'] == 1:
                                                                    echo 'Melaksanakan';
                                                                    break;
                                                                case $submpl5r['id_submatrix_p5r'] == 2:
                                                                    echo 'Kurang Melaksanakan';
                                                                    break;
                                                                case $submpl5r['id_submatrix_p5r'] == 3:
                                                                    echo 'Tidak Melaksanakan';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $submpl5r['melaksanakan'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submpl5r['kurang_melaksanakan'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submpl5r['tidak_melaksanakan'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submpl5r['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submpl5r['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $submpl5r['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixpelaksana5r['sumLaks']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpelaksana5r['sumKurLaks']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpelaksana5r['sumTidLaks']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpelaksana5r['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpelaksana5r['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpelaksana5r['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixpelaksana5r['submtxEig'] - $count_subpelaksana5r['jumSubp5r']) / ($count_subpelaksana5r['jumSubp5r'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri3;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri3;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>

                                    </div>
                                </div>











                                <!-- ------------------------------------------- Dokumentasi ------------------------------------------- -->



                                <div class="tab-pane fade" id="dokumentasi" role="tabpanel" aria-labelledby="dokumentasi-tab">
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_dokumentasi as $subdoc) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subdoc):
                                                                case $subdoc['id_subrange_doc'] == 1:
                                                                    echo 'Sangat Lengkap dan Sesuai';
                                                                    break;
                                                                case $subdoc['id_subrange_doc'] == 2:
                                                                    echo 'Lengkap';
                                                                    break;
                                                                case $subdoc['id_subrange_doc'] == 3:
                                                                    echo 'Kurang Lengkap dan Tidak Sesuai';
                                                                    break;
                                                                case $subdoc['id_subrange_doc'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_dokumentasi'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_dokumentasi as $subdoc) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($subdoc):
                                                                    case $subdoc['id_subrange_doc'] == 1:
                                                                        echo 'Sangat Lengkap dan Sesuai';
                                                                        break;
                                                                    case $subdoc['id_subrange_doc'] == 2:
                                                                        echo 'Lengkap';
                                                                        break;
                                                                    case $subdoc['id_subrange_doc'] == 3:
                                                                        echo 'Kurang Lengkap dan Tidak Sesuai';
                                                                        break;
                                                                    case $subdoc['id_subrange_doc'] == 4:
                                                                        echo 'Tidak Mampu';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($subdoc['sgt_lkp_sesuai'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="sangat_lengkap_sesuai[]" id="sangat_lengkap_sesuai" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subdoc['sgt_lkp_sesuai'] ?>"> <?= $subdoc['sgt_lkp_sesuai'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="sangat_lengkap_sesuai[]" id="sangat_lengkap_sesuai" class="form-control">
                                                                        <option value="<?= $subdoc['sgt_lkp_sesuai'] ?>"> <?= $subdoc['sgt_lkp_sesuai'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subdoc['lkp'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="lengkap[]" id="lengkap" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subdoc['lkp'] ?>"> <?= $subdoc['lkp'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="lengkap[]" id="lengkap" class="form-control">
                                                                        <option value="<?= $subdoc['lkp'] ?>"> <?= $subdoc['lkp'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subdoc['krg_lkp_tdk_sesuai'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="kurang_lengkap_tidak_sesuai[]" id="kurang_lengkap_tidak_sesuai" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subdoc['krg_lkp_tdk_sesuai'] ?>"> <?= $subdoc['krg_lkp_tdk_sesuai'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="kurang_lengkap_tidak_sesuai[]" id="kurang_lengkap_tidak_sesuai" class="form-control">
                                                                        <option value="<?= $subdoc['krg_lkp_tdk_sesuai'] ?>"> <?= $subdoc['krg_lkp_tdk_sesuai'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subdoc['tidak_mampu'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="tidak_mampu[]" id="tidak_mampu" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subdoc['tidak_mampu'] ?>"> <?= $subdoc['tidak_mampu'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="tidak_mampu[]" id="tidak_mampu" class="form-control">
                                                                        <option value="<?= $subdoc['tidak_mampu'] ?>"> <?= $subdoc['tidak_mampu'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subdokumentasi['sumSLS']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subdokumentasi['sumLengkap']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subdokumentasi['sumKLTS']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subdokumentasi['sumTdkMampu']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_dokumentasi as $subdoc) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subdoc):
                                                                case $subdoc['id_subrange_doc'] == 1:
                                                                    echo 'Sangat Lengkap dan Sesuai';
                                                                    break;
                                                                case $subdoc['id_subrange_doc'] == 2:
                                                                    echo 'Lengkap';
                                                                    break;
                                                                case $subdoc['id_subrange_doc'] == 3:
                                                                    echo 'Kurang Lengkap dan Tidak Sesuai';
                                                                    break;
                                                                case $subdoc['id_subrange_doc'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_dokumentasi as $smtxdoc) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($smtxdoc):
                                                                case $smtxdoc['id_submatrix_doc'] == 1:
                                                                    echo 'Sangat Lengkap dan Sesuai';
                                                                    break;
                                                                case $smtxdoc['id_submatrix_doc'] == 2:
                                                                    echo 'Lengkap';
                                                                    break;
                                                                case $smtxdoc['id_submatrix_doc'] == 3:
                                                                    echo 'Kurang Lengkap dan Tidak Sesuai';
                                                                    break;
                                                                case $smtxdoc['id_submatrix_doc'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxdoc['sgt_lkp_sesuai'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxdoc['lkp'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxdoc['krg_lkp_tdk_sesuai'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxdoc['tidak_mampu'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxdoc['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxdoc['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxdoc['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixdokumentasi['sumSLS']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixdokumentasi['sumLengkap']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixdokumentasi['sumKLTS']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixdokumentasi['sumTdkMampu']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixdokumentasi['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixdokumentasi['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixdokumentasi['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixdokumentasi['submtxEig'] - $count_subdokumentasi['jumSubDoc']) / ($count_subdokumentasi['jumSubDoc'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>














                                <!-- ------------------------------------------- Pemahaman dan Pelaksanaan K3 ------------------------------------------- -->
                                <div class="tab-pane fade" id="<?= str_replace(" ", "_", $title5) ?>" role="tabpanel" aria-labelledby="<?= str_replace(" ", "_", $title5) ?>-tab">
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_pahamdanlaksanak3 as $subplk3) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subplk3):
                                                                case $subplk3['id_subrange_plk3'] == 1:
                                                                    echo 'Paham dan Melaksanakan';
                                                                    break;
                                                                case $subplk3['id_subrange_plk3'] == 2:
                                                                    echo 'Kurang Memahami';
                                                                    break;
                                                                case $subplk3['id_subrange_plk3'] == 3:
                                                                    echo 'Tidak Memahami dan Melaksanakan';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_pahamdanlaksanak3'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_pahamdanlaksanak3 as $subplk3) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($subplk3):
                                                                    case $subplk3['id_subrange_plk3'] == 1:
                                                                        echo 'Paham dan Melaksanakan';
                                                                        break;
                                                                    case $subplk3['id_subrange_plk3'] == 2:
                                                                        echo 'Kurang Memahami';
                                                                        break;
                                                                    case $subplk3['id_subrange_plk3'] == 3:
                                                                        echo 'Tidak Memahami dan Melaksanakan';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($subplk3['paham'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="paham[]" id="paham" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subplk3['paham'] ?>"> <?= $subplk3['paham'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="paham[]" id="paham" class="form-control">
                                                                        <option value="<?= $subplk3['paham'] ?>"> <?= $subplk3['paham'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subplk3['kurang_paham'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="kurang_paham[]" id="kurang_paham" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subplk3['kurang_paham'] ?>"> <?= $subplk3['kurang_paham'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="kurang_paham[]" id="kurang_paham" class="form-control">
                                                                        <option value="<?= $subplk3['kurang_paham'] ?>"> <?= $subplk3['kurang_paham'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subplk3['tidak_paham'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="tidak_paham[]" id="tidak_paham" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subplk3['tidak_paham'] ?>"> <?= $subplk3['tidak_paham'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="tidak_paham[]" id="tidak_paham" class="form-control">
                                                                        <option value="<?= $subplk3['tidak_paham'] ?>"> <?= $subplk3['tidak_paham'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subpahamdanlaksanak3['sumPHM']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpahamdanlaksanak3['sumKrgPhm']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpahamdanlaksanak3['sumTdkPhm']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_pahamdanlaksanak3 as $subplk3) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subplk3):
                                                                case $subplk3['id_subrange_plk3'] == 1:
                                                                    echo 'Paham dan Melaksanakan';
                                                                    break;
                                                                case $subplk3['id_subrange_plk3'] == 2:
                                                                    echo 'Kurang Memahami';
                                                                    break;
                                                                case $subplk3['id_subrange_plk3'] == 3:
                                                                    echo 'Tidak Memahami dan Melaksanakan';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_pahamdanlaksanak3 as $smtxplk3) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($smtxplk3):
                                                                case $smtxplk3['id_submatrix_plk3'] == 1:
                                                                    echo 'Paham dan Melaksanakan';
                                                                    break;
                                                                case $smtxplk3['id_submatrix_plk3'] == 2:
                                                                    echo 'Kurang Memahami';
                                                                    break;
                                                                case $smtxplk3['id_submatrix_plk3'] == 3:
                                                                    echo 'Tidak Memahami dan Melaksanakan';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxplk3['paham'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxplk3['kurang_paham'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxplk3['tidak_paham'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxplk3['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxplk3['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxplk3['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixpahamdanlaksanak3['sumPHM']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamdanlaksanak3['sumKrgPhm']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamdanlaksanak3['sumTdkPhm']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamdanlaksanak3['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamdanlaksanak3['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamdanlaksanak3['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixpahamdanlaksanak3['submtxEig'] - $count_subpahamdanlaksanak3['jumSubPLK3']) / ($count_subpahamdanlaksanak3['jumSubPLK3'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri3;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri3;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>














                                <!-- ------------------------------------------- Pemahaman SOP dan SPK ------------------------------------------- -->
                                <div class="tab-pane fade" id="<?= str_replace(" ", "_", $title6) ?>" role="tabpanel" aria-labelledby="<?= str_replace(" ", "_", $title6) ?>-tab">
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_pahamsopspk as $subpss) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subpss):
                                                                case $subpss['id_subrange_pss'] == 1:
                                                                    echo 'Sangat Mampu';
                                                                    break;
                                                                case $subpss['id_subrange_pss'] == 2:
                                                                    echo 'Mampu';
                                                                    break;
                                                                case $subpss['id_subrange_pss'] == 3:
                                                                    echo 'Kurang Mampu';
                                                                    break;
                                                                case $subpss['id_subrange_pss'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_pahamsopspk'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_pahamsopspk as $subpss) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($subpss):
                                                                    case $subpss['id_subrange_pss'] == 1:
                                                                        echo 'Sangat Mampu';
                                                                        break;
                                                                    case $subpss['id_subrange_pss'] == 2:
                                                                        echo 'Mampu';
                                                                        break;
                                                                    case $subpss['id_subrange_pss'] == 3:
                                                                        echo 'Kurang Mampu';
                                                                        break;
                                                                    case $subpss['id_subrange_pss'] == 4:
                                                                        echo 'Tidak Mampu';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($subpss['sangat_mampu'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="sangat_mampu[]" id="sangat_mampu" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subpss['sangat_mampu'] ?>"> <?= $subpss['sangat_mampu'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="sangat_mampu[]" id="sangat_mampu" class="form-control">
                                                                        <option value="<?= $subpss['sangat_mampu'] ?>"> <?= $subpss['sangat_mampu'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subpss['mampu'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="mampu[]" id="mampu" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subpss['mampu'] ?>"> <?= $subpss['mampu'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="mampu[]" id="mampu" class="form-control">
                                                                        <option value="<?= $subpss['mampu'] ?>"> <?= $subpss['mampu'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subpss['kurang_mampu'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="kurang_mampu[]" id="kurang_mampu" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subpss['kurang_mampu'] ?>"> <?= $subpss['kurang_mampu'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="kurang_mampu[]" id="kurang_mampu" class="form-control">
                                                                        <option value="<?= $subpss['kurang_mampu'] ?>"> <?= $subpss['kurang_mampu'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subpss['tidak_mampu'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="tidak_mampu[]" id="tidak_mampu" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subpss['tidak_mampu'] ?>"> <?= $subpss['tidak_mampu'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="tidak_mampu[]" id="tidak_mampu" class="form-control">
                                                                        <option value="<?= $subpss['tidak_mampu'] ?>"> <?= $subpss['tidak_mampu'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subpahamsopspk['sumSgtMampu']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpahamsopspk['sumMampu']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpahamsopspk['sumKrgMampu']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpahamsopspk['sumTdkMampu']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_pahamsopspk as $subpss) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subpss):
                                                                case $subpss['id_subrange_pss'] == 1:
                                                                    echo 'Sangat Mampu';
                                                                    break;
                                                                case $subpss['id_subrange_pss'] == 2:
                                                                    echo 'Mampu';
                                                                    break;
                                                                case $subpss['id_subrange_pss'] == 3:
                                                                    echo 'Kurang Mampu';
                                                                    break;
                                                                case $subpss['id_subrange_pss'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_pahamsopspk as $smtxpss) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($smtxpss):
                                                                case $smtxpss['id_submatrix_pss'] == 1:
                                                                    echo 'Sangat Mampu';
                                                                    break;
                                                                case $smtxpss['id_submatrix_pss'] == 2:
                                                                    echo 'Mampu';
                                                                    break;
                                                                case $smtxpss['id_submatrix_pss'] == 3:
                                                                    echo 'Kurang Mampu';
                                                                    break;
                                                                case $smtxpss['id_submatrix_pss'] == 4:
                                                                    echo 'Tidak Mampu';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxpss['sangat_mampu'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxpss['mampu'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxpss['kurang_mampu'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxpss['tidak_mampu'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxpss['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxpss['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxpss['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixpahamsopspk['sumSgtMampu']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamsopspk['sumMampu']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamsopspk['sumKrgMampu']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamsopspk['sumTdkMampu']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamsopspk['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamsopspk['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamsopspk['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixpahamsopspk['submtxEig'] - $count_subpahamsopspk['jumSubPSS']) / ($count_subpahamsopspk['jumSubPSS'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>














                                <!-- ------------------------------------------- Pemahaman Tools ------------------------------------------- -->
                                <div class="tab-pane fade" id="<?= str_replace(" ", "_", $title7) ?>" role="tabpanel" aria-labelledby="<?= str_replace(" ", "_", $title7) ?>-tab">
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_pahamtools as $subptls) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subptls):
                                                                case $subptls['id_subrange_ptls'] == 1:
                                                                    echo 'Pemahaman Baik';
                                                                    break;
                                                                case $subptls['id_subrange_ptls'] == 2:
                                                                    echo 'Pemahaman Kurang Baik';
                                                                    break;
                                                                case $subptls['id_subrange_ptls'] == 3:
                                                                    echo 'Tidak Memahami';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_pahamtools'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_pahamtools as $subptls) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($subptls):
                                                                    case $subptls['id_subrange_ptls'] == 1:
                                                                        echo 'Pemahaman Baik';
                                                                        break;
                                                                    case $subptls['id_subrange_ptls'] == 2:
                                                                        echo 'Pemahaman Kurang Baik';
                                                                        break;
                                                                    case $subptls['id_subrange_ptls'] == 3:
                                                                        echo 'Tidak Memahami';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($subptls['baik'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="baik[]" id="baik" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subptls['baik'] ?>"> <?= $subptls['baik'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="baik[]" id="baik" class="form-control">
                                                                        <option value="<?= $subptls['baik'] ?>"> <?= $subptls['baik'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subptls['kurang_baik'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="kurang_baik[]" id="kurang_baik" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subptls['kurang_baik'] ?>"> <?= $subptls['kurang_baik'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="kurang_baik[]" id="kurang_baik" class="form-control">
                                                                        <option value="<?= $subptls['kurang_baik'] ?>"> <?= $subptls['kurang_baik'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subptls['tidak_baik'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="tidak_baik[]" id="tidak_baik" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subptls['tidak_baik'] ?>"> <?= $subptls['tidak_baik'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="tidak_baik[]" id="tidak_baik" class="form-control">
                                                                        <option value="<?= $subptls['tidak_baik'] ?>"> <?= $subptls['tidak_baik'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subpahamtools['sumBaik']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpahamtools['sumKrgBaik']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subpahamtools['sumTdkBaik']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_pahamtools as $subptls) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subptls):
                                                                case $subptls['id_subrange_ptls'] == 1:
                                                                    echo 'Pemahaman Baik';
                                                                    break;
                                                                case $subptls['id_subrange_ptls'] == 2:
                                                                    echo 'Pemahaman Kurang Baik';
                                                                    break;
                                                                case $subptls['id_subrange_ptls'] == 3:
                                                                    echo 'Tidak Memahami';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_pahamtools as $smtxptls) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($smtxptls):
                                                                case $smtxptls['id_submatrix_ptls'] == 1:
                                                                    echo 'Pemahaman Baik';
                                                                    break;
                                                                case $smtxptls['id_submatrix_ptls'] == 2:
                                                                    echo 'Pemahaman Kurang Baik';
                                                                    break;
                                                                case $smtxptls['id_submatrix_ptls'] == 3:
                                                                    echo 'Tidak Memahami';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxptls['baik'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxptls['kurang_baik'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxptls['tidak_baik'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxptls['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxptls['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxptls['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixpahamtools['sumBaik']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamtools['sumKrgBaik']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamtools['sumTdkBaik']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamtools['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamtools['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixpahamtools['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixpahamtools['submtxEig'] - $count_subpahamtools['jumSubPTLS']) / ($count_subpahamtools['jumSubPTLS'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri3;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri3;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>














                                <!-- ------------------------------------------- Kehadiran ------------------------------------------- -->
                                <div class="tab-pane fade" id="<?= str_replace(" ", "_", $title8) ?>" role="tabpanel" aria-labelledby="<?= str_replace(" ", "_", $title8) ?>-tab">
                                    <div class="card">
                                        <table class="table table-responsive table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                                    foreach ($subrange_kehadiran as $subhdr) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subhdr):
                                                                case $subhdr['id_subrange_hdr'] == 1:
                                                                    echo 'Hadir 100%';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 2:
                                                                    echo 'Hadir 100% ada terlambat';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 3:
                                                                    echo 'Hadir >= 90%';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 4:
                                                                    echo 'Hadir > 90% ada terlambat';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 5:
                                                                    echo 'Hadir 80-90 %';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 6:
                                                                    echo 'Hadir 80-90% ada terlambat';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 7:
                                                                    echo 'Hadir < 80%';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 8:
                                                                    echo 'Hadir < 80% ada terlambat';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_kehadiran'; ?>" method="POST">
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <?php
                                                    foreach ($subrange_kehadiran as $subhdr) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                switch ($subhdr):
                                                                    case $subhdr['id_subrange_hdr'] == 1:
                                                                        echo 'Hadir 100%';
                                                                        break;
                                                                    case $subhdr['id_subrange_hdr'] == 2:
                                                                        echo 'Hadir 100% ada terlambat';
                                                                        break;
                                                                    case $subhdr['id_subrange_hdr'] == 3:
                                                                        echo 'Hadir >= 90%';
                                                                        break;
                                                                    case $subhdr['id_subrange_hdr'] == 4:
                                                                        echo 'Hadir > 90% ada terlambat';
                                                                        break;
                                                                    case $subhdr['id_subrange_hdr'] == 5:
                                                                        echo 'Hadir 80-90 %';
                                                                        break;
                                                                    case $subhdr['id_subrange_hdr'] == 6:
                                                                        echo 'Hadir 80-90% ada terlambat';
                                                                        break;
                                                                    case $subhdr['id_subrange_hdr'] == 7:
                                                                        echo 'Hadir < 80%';
                                                                        break;
                                                                    case $subhdr['id_subrange_hdr'] == 8:
                                                                        echo 'Hadir < 80% ada terlambat';
                                                                        break;
                                                                    default:
                                                                        echo 'No One';
                                                                        break;
                                                                ?>
                                                                <?php endswitch; ?>
                                                            </td>
                                                            <?php if ($subhdr['hadir100'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir100[]" id="hadir100" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir100'] ?>"> <?= $subhdr['hadir100'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir100[]" id="hadir100" class="form-control">
                                                                        <option value="<?= $subhdr['hadir100'] ?>"> <?= $subhdr['hadir100'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subhdr['hadir100t'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir100t[]" id="hadir100t" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir100t'] ?>"> <?= $subhdr['hadir100t'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir100t[]" id="hadir100t" class="form-control">
                                                                        <option value="<?= $subhdr['hadir100t'] ?>"> <?= $subhdr['hadir100t'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subhdr['hadir90'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir90[]" id="hadir90" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir90'] ?>"> <?= $subhdr['hadir90'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir90[]" id="hadir90" class="form-control">
                                                                        <option value="<?= $subhdr['hadir90'] ?>"> <?= $subhdr['hadir90'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subhdr['hadir90t'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir90t[]" id="hadir90t" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir90t'] ?>"> <?= $subhdr['hadir90t'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir90t[]" id="hadir90t" class="form-control">
                                                                        <option value="<?= $subhdr['hadir90t'] ?>"> <?= $subhdr['hadir90t'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subhdr['hadir80'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir80[]" id="hadir80" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir80'] ?>"> <?= $subhdr['hadir80'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir80[]" id="hadir80" class="form-control">
                                                                        <option value="<?= $subhdr['hadir80'] ?>"> <?= $subhdr['hadir80'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subhdr['hadir80t'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir80t[]" id="hadir80t" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir80t'] ?>"> <?= $subhdr['hadir80t'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir80t[]" id="hadir80t" class="form-control">
                                                                        <option value="<?= $subhdr['hadir80t'] ?>"> <?= $subhdr['hadir80t'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subhdr['hadir70'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir70[]" id="hadir70" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir70'] ?>"> <?= $subhdr['hadir70'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir70[]" id="hadir70" class="form-control">
                                                                        <option value="<?= $subhdr['hadir70'] ?>"> <?= $subhdr['hadir70'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->

                                                            <?php if ($subhdr['hadir70t'] == 1) : ?>
                                                                <td style="background-color: aqua ;">
                                                                    <select name="hadir70t[]" id="hadir70t" class="form-control" style="background-color: aqua;">
                                                                        <option value="<?= $subhdr['hadir70t'] ?>"> <?= $subhdr['hadir70t'] ?></option>
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
                                                            <?php else : ?>
                                                                <td>
                                                                    <select name="hadir70t[]" id="hadir70t" class="form-control">
                                                                        <option value="<?= $subhdr['hadir70t'] ?>"> <?= $subhdr['hadir70t'] ?></option>
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
                                                            <?php endif; ?>

                                                            <!--  -->
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum100']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum100t']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum90']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum90t']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum80']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum80t']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum70']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sum_subkehadiran['sum70t']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                        <td>
                                                            <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Analisa</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </form>
                                        </table>

                                        <table class="table table-responsive table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <?php
                                                    foreach ($subrange_kehadiran as $subhdr) : ?>
                                                        <th>
                                                            <?php
                                                            switch ($subhdr):
                                                                case $subhdr['id_subrange_hdr'] == 1:
                                                                    echo 'Hadir 100%';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 2:
                                                                    echo 'Hadir 100% ada terlambat';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 3:
                                                                    echo 'Hadir >= 90%';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 4:
                                                                    echo 'Hadir > 90% ada terlambat';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 5:
                                                                    echo 'Hadir 80-90 %';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 6:
                                                                    echo 'Hadir 80-90% ada terlambat';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 7:
                                                                    echo 'Hadir < 80%';
                                                                    break;
                                                                case $subhdr['id_subrange_hdr'] == 8:
                                                                    echo 'Hadir < 80% ada terlambat';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </th>
                                                    <?php endforeach; ?>
                                                    <th>
                                                        Jumlah
                                                    </th>
                                                    <th>
                                                        Priotitas
                                                    </th>
                                                    <th>
                                                        Eigen Value
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($submatrix_kehadiran as $smtxhdr) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            switch ($smtxhdr):
                                                                case $smtxhdr['id_submatrix_hdr'] == 1:
                                                                    echo 'Hadir 100%';
                                                                    break;
                                                                case $smtxhdr['id_submatrix_hdr'] == 2:
                                                                    echo 'Hadir 100% ada terlambat';
                                                                    break;
                                                                case $smtxhdr['id_submatrix_hdr'] == 3:
                                                                    echo 'Hadir >= 90%';
                                                                    break;
                                                                case $smtxhdr['id_submatrix_hdr'] == 4:
                                                                    echo 'Hadir > 90% ada terlambat';
                                                                    break;
                                                                case $smtxhdr['id_submatrix_hdr'] == 5:
                                                                    echo 'Hadir 80-90 %';
                                                                    break;
                                                                case $smtxhdr['id_submatrix_hdr'] == 6:
                                                                    echo 'Hadir 80-90% ada terlambat';
                                                                    break;
                                                                case $smtxhdr['id_submatrix_hdr'] == 7:
                                                                    echo 'Hadir < 80%';
                                                                    break;
                                                                case $smtxhdr['id_submatrix_hdr'] == 8:
                                                                    echo 'Hadir < 80% ada terlambat';
                                                                    break;
                                                                default:
                                                                    echo 'No One';
                                                                    break;
                                                            ?>
                                                            <?php endswitch; ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir100'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir100t'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir90'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir90t'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir80'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir80t'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir70'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['hadir70t'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['jumlah'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['prioritas'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $smtxhdr['eigen_value'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr style="font-weight: bold; font-size:15px;">
                                                    <td><strong>Total</strong></td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum100']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum100t']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum90']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum90t']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum80']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum80t']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum70']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['sum70t']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['submtxJum']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['submtxPrior']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $sum_submatrixkehadiran['submtxEig']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <th>CI</th>
                                                <th colspan="2">
                                                    <?php
                                                    $ci = ($sum_submatrixkehadiran['submtxEig'] - $count_subkehadiran['jumSubHDR']) / ($count_subkehadiran['jumSubHDR'] - 1);
                                                    echo $ci;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>RI</th>
                                                <th colspan="2">
                                                    <?php
                                                    echo $ri8;
                                                    ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>CR</th>
                                                <th>
                                                    <?php
                                                    $cr = $ci / $ri8;
                                                    echo $cr;
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                    if ($cr <= 0.1) : ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            Konsisten
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            Tidak Konsisten
                                                        </div>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>














                                <!-- ------------------------------------------- Kedisiplinan ------------------------------------------- -->
                                <div class="tab-pane fade" id="<?= str_replace(" ", "_", $title9) ?>" role="tabpanel" aria-labelledby="<?= str_replace(" ", "_", $title9) ?>-tab">
                                    <p class="mt-2">v5</p>
                                </div>














                                <!-- ------------------------------------------- Inisiatif ------------------------------------------- -->
                                <div class="tab-pane fade" id="<?= str_replace(" ", "_", $title10) ?>" role="tabpanel" aria-labelledby="<?= str_replace(" ", "_", $title10) ?>-tab">
                                    <p class="mt-2">v6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- modal delete -->