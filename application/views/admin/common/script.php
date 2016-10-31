<!-- jQuery -->
<script src="<?php echo base_url('asset/asset_index/vendors/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('asset/asset_index/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/asset_index/vendors/fastclick/lib/fastclick.js')?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('asset/asset_index/vendors/nprogress/nprogress.js')?>"></script>
<!-- Chart.js -->
<script src="<?php echo base_url('asset/asset_index/vendors/Chart.js/dist/Chart.min.js')?>"></script>
<!-- gauge.js -->
<script src="<?php echo base_url('asset/asset_index/vendors/bernii/gauge.js/dist/gauge.min.js')?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url('asset/asset_index/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('asset/asset_index/vendors/iCheck/icheck.min.js')?>"></script>
<!-- Skycons -->
<script src="<?php echo base_url('asset/asset_index/vendors/skycons/skycons.js')?>"></script>
<!-- Flot -->
<script src="<?php echo base_url('asset/asset_index/vendors/Flot/jquery.flot.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/Flot/jquery.flot.pie.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/Flot/jquery.flot.time.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/Flot/jquery.flot.stack.js')?>"></script>

<!-- Flot plugins -->
<script src="<?php echo base_url('asset/asset_index/js/flot/jquery.flot.orderBars.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/js/flot/date.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/js/flot/jquery.flot.spline.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/js/flot/curvedLines.js')?>"></script>

<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url('asset/asset_index/js/moment/moment.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/js/datepicker/daterangepicker.js')?>"></script>
<!-- <script src="<?php echo base_url('asset/asset_index/js/datepicker/datepicker.js')?>"></script> -->

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('asset/asset_index/build/js/custom.min.js')?>"></script>

<script src="<?php echo base_url('asset/asset_index/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')?>"></script>
<!-- Flot -->



<!-- bootstrap-daterangepicker -->
<script>
  $(document).ready(function() {
    $('#birthday').daterangepicker({
      "singleDatePicker": true,
      format: 'YYYY-MM-DD',
      "minDate": "1945/01/01",
      "showDropdowns":true
    });
    $('#calon_tetap').daterangepicker({
      "singleDatePicker": true,
      format: 'YYYY-MM-DD',
      "minDate": "1970/01/01",
      "showDropdowns":true
    });
    $('#tetap').daterangepicker({
      "singleDatePicker": true,
      format: 'YYYY-MM-DD',
      "minDate": "1970/01/01",
      "showDropdowns":true
    });
    $('#tahun_sertifikasi').daterangepicker({
      "singleDatePicker": true,
      format: 'YYYY',
      "minDate": "1980/01/01",
      "showDropdowns":true
    });
    $('#mulai_tugas').daterangepicker({
      "singleDatePicker": true,
      format: 'YYYY-MM-DD',
      "minDate": "1980/01/01",
      "showDropdowns":true
    });
  });
</script>
<!-- /bootstrap-daterangepicker -->