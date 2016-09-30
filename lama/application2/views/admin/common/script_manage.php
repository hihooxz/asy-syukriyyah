<!-- Datatables -->
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/datatables.net-scroller/js/datatables.scroller.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/jszip/dist/jszip.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('asset/asset_index/vendors/pdfmake/build/vfs_fonts.js')?>"></script>

<!-- Datatables -->
<script>
  $(document).ready(function() {
    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
            {
              extend: "copy",
              className: "btn-sm"
            },
            {
              extend: "csv",
              className: "btn-sm"
            },
            {
              extend: "excel",
              className: "btn-sm"
            },
            {
              extend: "pdfHtml5",
              className: "btn-sm"
            },
            {
              extend: "print",
              className: "btn-sm"
            },
          ],
          responsive: true
        });
      }
    };

    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons();
        }
      };
    }();

    $('#datatable').dataTable();
    $('#datatable-keytable').DataTable({
      keys: true
    });

    $('#datatable-responsive').DataTable();

    $('#datatable-scroller').DataTable({
      ajax: "<?php echo base_url('asset/asset_index/js/datatables/json/scroller-demo.json')?>",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });

    var table = $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });

    TableManageButtons.init();
  });
</script>
