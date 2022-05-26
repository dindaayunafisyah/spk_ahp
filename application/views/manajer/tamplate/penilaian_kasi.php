<div class="page-heading">
    <h3>Tabel <?= $title; ?></h3>
</div>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <!-- <h3>Tabel <?= $title; ?></h3>
                <p class="text-subtitle text-muted"></p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('kasi/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row">
            <div class="card shadow mb-4">
                <div class="card-header">
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
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Divisi</th>
                                    <th>ID Jabatan</th>
                                    <th>Nama</th>
                                    <th>Productiviity</th>
                                    <th>Komunikasi dan Kerjasama</th>
                                    <th>Pelaksanaan 5 R</th>
                                    <th>Dokumentasi</th>
                                    <th>Pemahaman dan Pelaksanaan K3</th>
                                    <th>Pemahaman SOP dan SPK</th>
                                    <th>Pemahaman Tools</th>
                                    <th>Kehadiran</th>
                                    <th>Kedisiplinan</th>
                                    <th>Inisiatif</th>
                                    <th>Total</th>
                                    <th>Nilai</th>
                                    <th>Bonus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data as $dt) : ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?>
                                        </td>
                                        <td>
                                            <?= $dt['id_divisi']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['id_jabatan']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['nama_karyawan']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['productivity']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['komker']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['pelaksana5r']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['dokumentasi']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['pahamdanlaksanak3']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['pahamsop']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['pahamtools']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['kehadiran']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['kedisiplinan']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['inisiatif']; ?>
                                        </td>
                                        <td>
                                            <?= $dt['total'] * 1000; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $nilai = $dt['total'] * 1000;
                                            if ($nilai < 200) {
                                                echo "D";
                                            } elseif ($nilai >= 200 && $nilai < 300) {
                                                echo "C";
                                            } elseif ($nilai >= 300 && $nilai < 375) {
                                                echo "B";
                                            } elseif ($nilai >= 375) {
                                                echo "A";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $nilai = $dt['total'] * 1000;
                                            if ($nilai < 200) {
                                                echo "25% dari pembagaian omset per divisi";
                                            } elseif ($nilai >= 200 && $nilai < 300) {
                                                echo "50% dari pembagaian omset per divisi";
                                            } elseif ($nilai >= 300 && $nilai < 375) {
                                                echo "75% dari pembagaian omset per divisi";
                                            } elseif ($nilai >= 375) {
                                                echo "100% dari pembagaian omset per divisi";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#tambah">
                        Tambah
                    </button>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row">

        </div>
    </section>
</div>



<!-- Modal Tambah -->
<div class="modal fade text-left modal-borderless" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="Mytambah-data-operator">Tambah <?= $title; ?></h4>
                <button type="button" class="close mr-1" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x">x</i>
                </button>
            </div>
            <form action="<?= base_url('manajer/master_data/penilaian_kasi'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <select name="nama_karyawan" id="nama_karyawan" class="form-control form-control-sm autofill-karyawan">
                                    <?php foreach ($karyawan as $kry) : ?>
                                        <option value="<?= $kry['nama_karyawan'] ?>"><?= $kry['nama_karyawan'] . ' - ' . $kry['id_divisi'] . ' - ' . $kry['id_jabatan'] ?></option>
                                    <?php endforeach; ?>
                                    <input type="text" name="id_divisi" id="id_divisi" class="form-control id-divisi">
                                    <input type="text" name="id_jabatan" id="id_jabatan" class="form-control id-jabatan">
                                </select>
                            </div>
                            <div class="form-group">
                                <!-- Leadership -->
                                <?php foreach ($quiz as $qz) : ?>
                                    <p class="text-justify" style="margin-bottom: -1px;">
                                        <?= $qz['kuis_productivity'] ?>
                                    </p>
                                    <?php foreach ($jawaban_komker as $komker) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="productivity" id="productivity" value="<?= $komker['prioritas'] ?>">
                                            <label class="form-check-label" for="productivity">
                                                <?php
                                                switch ($komker):
                                                    case $komker['id_submatrix_kdk'] == 5:
                                                        echo 'Sangat Baik';
                                                        break;
                                                    case $komker['id_submatrix_kdk'] == 6:
                                                        echo 'Baik';
                                                        break;
                                                    case $komker['id_submatrix_kdk'] == 7:
                                                        echo 'Kurang';
                                                        break;
                                                    case $komker['id_submatrix_kdk'] == 8:
                                                        echo 'Tidak Mampu';
                                                        break;
                                                    default:
                                                        echo 'No One';
                                                        break;
                                                ?>
                                                <?php endswitch; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                    <br>
                                    <!--  -->


                                    <!-- Productivity -->
                                    <p class="text-justify" style="margin-bottom: -1px;">
                                        <?= $qz['kuis_komker'] ?>
                                    </p>
                                    <?php foreach ($jawaban_productivity as $jwp) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="komker" id="komker" value="<?= $jwp['prioritas'] ?>">
                                            <label class="form-check-label" for="komker">
                                                <?php
                                                switch ($jwp):
                                                    case $jwp['id_submatrix_proc'] == 5:
                                                        echo 'Pekerjaan Selesai > 90 %';
                                                        break;
                                                    case $jwp['id_submatrix_proc'] == 6:
                                                        echo 'Pekerjaan Selesai 80 % - 90 %';
                                                        break;
                                                    case $jwp['id_submatrix_proc'] == 7:
                                                        echo 'Pekerjaan Selesai 60 % - 79 %';
                                                        break;
                                                    case $jwp['id_submatrix_proc'] == 8:
                                                        echo 'Pekerjaan Selesai < 60 %';
                                                        break;
                                                    default:
                                                        echo 'No One';
                                                        break;
                                                ?>
                                                <?php endswitch; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>

                                    <br>
                                    <!--  -->



                                    <!-- KPM -->
                                    <p class="text-justify" style="margin-bottom: -1px;">
                                        <?= $qz['kuis_pelaksana5r'] ?>
                                    </p>
                                    <?php foreach ($jawaban_pahamtools as $kpm) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pelaksana5r" id="pelaksana5r" value="<?= $kpm['prioritas'] ?>">
                                            <label class="form-check-label" for="pelaksana5r">
                                                <?php
                                                switch ($kpm):
                                                    case $kpm['id_submatrix_pss'] == 9:
                                                        echo 'Sangat Mampu';
                                                        break;
                                                    case $kpm['id_submatrix_pss'] == 10:
                                                        echo 'Mampu';
                                                        break;
                                                    case $kpm['id_submatrix_pss'] == 11:
                                                        echo 'Kurang Mampu';
                                                        break;
                                                    case $kpm['id_submatrix_pss'] == 12:
                                                        echo 'Tidak Mampu';
                                                        break;
                                                    default:
                                                        echo 'No One';
                                                        break;
                                                ?>
                                                <?php endswitch; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                    <br>
                                    <!--  -->

                                    <!-- Realisasi SOP dan SPK -->
                                    <p class="text-justify" style="margin-bottom: -1px;">
                                        <?= $qz['kuis_dokumentasi'] ?>
                                    </p>
                                    <?php foreach ($jawaban_pahamsop as $psop) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dokumentasi" id="dokumentasi" value="<?= $psop['prioritas'] ?>">
                                            <label class="form-check-label" for="dokumentasi">
                                                <?php
                                                switch ($psop):
                                                    case $psop['id_submatrix_pss'] == 5:
                                                        echo 'Sangat Mampu';
                                                        break;
                                                    case $psop['id_submatrix_pss'] == 6:
                                                        echo 'Mampu';
                                                        break;
                                                    case $psop['id_submatrix_pss'] == 7:
                                                        echo 'Kurang Mampu';
                                                        break;
                                                    case $psop['id_submatrix_pss'] == 8:
                                                        echo 'Tidak Mampu';
                                                        break;
                                                    default:
                                                        echo 'No One';
                                                        break;
                                                ?>
                                                <?php endswitch; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>


                                    <br>
                                    <!--  -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Dokumentasi -->
                            <p class="text-justify" style="margin-bottom: -1px;">
                                <?= $qz['kuis_pahamdanlaksanak3'] ?>
                            </p>
                            <?php foreach ($jawaban_dokumentasi as $dokumentasi) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pahamdanlaksanak3" id="pahamdanlaksanak3" value="<?= $dokumentasi['prioritas'] ?>">
                                    <label class="form-check-label" for="pahamdanlaksanak3">
                                        <?php
                                        switch ($dokumentasi):
                                            case $dokumentasi['id_submatrix_doc'] == 5:
                                                echo 'Sangat Lengkap dan Sesuai';
                                                break;
                                            case $dokumentasi['id_submatrix_doc'] == 6:
                                                echo 'Lengkap';
                                                break;
                                            case $dokumentasi['id_submatrix_doc'] == 7:
                                                echo 'Kurang Lengkap dan Tidak Sesuai';
                                                break;
                                            case $dokumentasi['id_submatrix_doc'] == 8:
                                                echo 'Tidak Mampu';
                                                break;
                                            default:
                                                echo 'No One';
                                                break;
                                        ?>
                                        <?php endswitch; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <br>
                            <!--  -->

                            <!-- Pelaksana 5 R -->
                            <p class="text-justify" style="margin-bottom: -1px;">
                                <?= $qz['kuis_pahamsop'] ?>
                            </p>
                            <?php foreach ($jawaban_pelaksana5r as $pelaksana5r) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pahamsop" id="pahamsop" value="<?= $pelaksana5r['prioritas'] ?>">
                                    <label class="form-check-label" for="pahamsop">
                                        <?php
                                        switch ($pelaksana5r):
                                            case $pelaksana5r['id_submatrix_p5r'] == 4:
                                                echo 'Melaksanakan';
                                                break;
                                            case $pelaksana5r['id_submatrix_p5r'] == 5:
                                                echo 'Kurang Melaksanakan';
                                                break;
                                            case $pelaksana5r['id_submatrix_p5r'] == 6:
                                                echo 'Tidak Melaksanakan';
                                                break;
                                            default:
                                                echo 'No One';
                                                break;
                                        ?>
                                        <?php endswitch; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <br>
                            <!--  -->

                            <!-- Pelaksana 5 R -->
                            <p class="text-justify" style="margin-bottom: -1px;">
                                <?= $qz['kuis_pahamtools'] ?>
                            </p>
                            <?php foreach ($jawaban_pahamdanlaksanak3 as $pahamdanlaksanak3) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pahamtools" id="pahamtools" value="<?= $pahamdanlaksanak3['prioritas'] ?>">
                                    <label class="form-check-label" for="pahamtools">
                                        <?php
                                        switch ($pahamdanlaksanak3):
                                            case $pahamdanlaksanak3['id_submatrix_plk3'] == 4:
                                                echo 'Paham dan Melaksanakan';
                                                break;
                                            case $pahamdanlaksanak3['id_submatrix_plk3'] == 5:
                                                echo 'Kurang Memahami';
                                                break;
                                            case $pahamdanlaksanak3['id_submatrix_plk3'] == 6:
                                                echo 'Tidak Memahami dan Melaksanakan';
                                                break;
                                            default:
                                                echo 'No One';
                                                break;
                                        ?>
                                        <?php endswitch; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <br>
                            <!--  -->


                            <p class="text-justify" style="margin-bottom: -1px;">
                                <?= $qz['kuis_kehadiran'] ?>
                            </p>
                            <?php foreach ($jawaban_hadir as $hadir) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hadir" id="hadir" value="<?= $hadir['prioritas'] ?>">
                                    <label class="form-check-label" for="pelaksana5r">
                                        <?php
                                        switch ($hadir):
                                            case $hadir['id_submatrix_hdr'] == 9:
                                                echo 'Hadir 100%';
                                                break;
                                            case $hadir['id_submatrix_hdr'] == 10:
                                                echo 'Hadir 100% ada terlambat';
                                                break;
                                            case $hadir['id_submatrix_hdr'] == 11:
                                                echo 'Hadir >= 90%';
                                                break;
                                            case $hadir['id_submatrix_hdr'] == 12:
                                                echo 'Hadir > 90% ada terlambat';
                                                break;
                                            case $hadir['id_submatrix_hdr'] == 13:
                                                echo 'Hadir 80-90 %';
                                                break;
                                            case $hadir['id_submatrix_hdr'] == 14:
                                                echo 'Hadir 80-90% ada terlambat';
                                                break;
                                            case $hadir['id_submatrix_hdr'] == 15:
                                                echo 'Hadir < 80%';
                                                break;
                                            case $hadir['id_submatrix_hdr'] == 16:
                                                echo 'Hadir < 80% ada terlambat';
                                                break;
                                            default:
                                                echo 'No One';
                                                break;
                                        ?>
                                        <?php endswitch; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <br>
                            <!--  -->
                        </div>
                        <div class="col-lg-4">
                            <p class="text-justify" style="margin-bottom: -1px;">
                                <?= $qz['kuis_disiplin'] ?>
                            </p>
                            <?php foreach ($jawaban_disiplin as $disiplin) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disiplin" id="disiplin" value="<?= $disiplin['prioritas'] ?>">
                                    <label class="form-check-label" for="pelaksana5r">
                                        <?php
                                        switch ($disiplin):
                                            case $disiplin['id_submatrix_dsp'] == 4:
                                                echo 'Tidak ada Pelanggaran';
                                                break;
                                            case $disiplin['id_submatrix_dsp'] == 5:
                                                echo 'Sedikit Melanggar';
                                                break;
                                            case $disiplin['id_submatrix_dsp'] == 6:
                                                echo 'Banyak Melanggar';
                                                break;
                                            default:
                                                echo 'No One';
                                                break;
                                        ?>
                                        <?php endswitch; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <br>
                            <!--  -->

                            <p class="text-justify" style="margin-bottom: -1px;">
                                <?= $qz['kuis_inisiatif'] ?>
                            </p>
                            <?php foreach ($jawaban_inisiatif as $inisiatif) : ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inisiatif" id="inisiatif" value="<?= $inisiatif['prioritas'] ?>">
                                    <label class="form-check-label" for="pelaksana5r">
                                        <?php
                                        switch ($inisiatif):
                                            case $inisiatif['id_submatrix_inf'] == 5:
                                                echo 'Sangat Bagus';
                                                break;
                                            case $inisiatif['id_submatrix_inf'] == 6:
                                                echo 'Bagus';
                                                break;
                                            case $inisiatif['id_submatrix_inf'] == 7:
                                                echo 'Kurang Bagus';
                                                break;
                                            case $inisiatif['id_submatrix_inf'] == 8:
                                                echo 'Tidak Bagus';
                                                break;
                                            default:
                                                echo 'No One';
                                                break;
                                        ?>
                                        <?php endswitch; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <br>
                            <!--  -->

                        <?php endforeach; ?>
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