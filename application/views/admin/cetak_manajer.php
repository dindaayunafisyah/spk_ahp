<!-- <div class="page-heading">
    <h3>Tabel <?= $titleex; ?></h3>
</div> -->

<div class="page-heading">


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
                        <table id="data-op" class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
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
                            <!-- <tfoot>
                                <tr>
                                    <td></td>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('admin/master_data/show_penilaian_manajer') ?>" type="button" class="btn btn-outline-success">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row">

        </div>
    </section>
</div>