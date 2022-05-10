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
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?= $title2 ?></a>
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
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Integer interdum diam eleifend metus lacinia, quis gravida eros mollis. Fusce non sapien
                                    sit amet magna dapibus
                                    ultrices. Morbi tincidunt magna ex, eget faucibus sapien bibendum non. Duis a mauris ex.
                                    Ut finibus risus sed massa
                                    mattis porta. Aliquam sagittis massa et purus efficitur ultricies. Integer pretium dolor
                                    at sapien laoreet ultricies.
                                    Fusce congue et lorem id convallis. Nulla volutpat tellus nec molestie finibus. In nec
                                    odio tincidunt eros finibus
                                    ullamcorper. Ut sodales, dui nec posuere finibus, nisl sem aliquam metus, eu accumsan
                                    lacus felis at odio. Sed lacus
                                    quam, convallis quis condimentum ut, accumsan congue massa. Pellentesque et quam vel
                                    massa pretium ullamcorper vitae eu
                                    tortor.
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