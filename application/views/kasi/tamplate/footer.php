<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/vendors/dayjs/dayjs.min.js'); ?>"></script>
<script src=" <?php echo base_url('assets/vendors/apexcharts/apexcharts.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/ui-apexchart.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pages/dashboard.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/mazer.js'); ?>"></script>

<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
    //---------------------- JQUERY AUTOFILL DATA KARYAWAN ------------------------
    $(document).on("click change", ".autofill-karyawan", function() {
        let nama_karyawan = $(this).val();
        $.ajax({
            type: 'POST',
            url: '<?= base_url('kasi/master_data/ajax_show_karyawan') ?>',
            data: 'nama_karyawan=' + nama_karyawan,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $(".id-divisi").val(obj.id_divisi);
                $(".id-jabatan").val(obj.id_jabatan);
            },
        })
    });
    //---------------------- JQUERY AUTOFILL DATA KARYAWAN ----------------------- 
</script>

</body>


</html>