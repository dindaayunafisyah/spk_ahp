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
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Subrange Pelaksanaan 5 R</a>
                                </li>
                            </ul>
                            <!--  -->
                            <div class="tab-content" id="myTabContent">
                                <!--  -->
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

                                        <table class="table table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
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
                                                        <?= round($sum_submatrixproduct['sum90']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['sum8090']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['sum6079']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['sum59']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['submtxJum']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['submtxPrior']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['submtxEig']); ?>
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
                                            <form action="<?php echo base_url() . 'admin/master_data/update_subrange_Productivity'; ?>" method="POST">
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

                                        <table class="table table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
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
                                                        <?= round($sum_submatrixproduct['sum90']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['sum8090']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['sum6079']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['sum59']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['submtxJum']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['submtxPrior']); ?>
                                                    </td>
                                                    <td>
                                                        <?= round($sum_submatrixproduct['submtxEig']); ?>
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
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <p class="mt-2">Duis ultrices purus non eros fermentum hendrerit. Aenean ornare interdum
                                        viverra. Sed ut odio velit. Aenean eu diam
                                        dictum nibh rhoncus mattis quis ac risus. Vivamus eu congue ipsum. Maecenas id
                                        sollicitudin ex. Cras in ex vestibulum,
                                        posuere orci at, sollicitudin purus. Morbi mollis elementum enim, in cursus sem
                                        placerat ut.</p>
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