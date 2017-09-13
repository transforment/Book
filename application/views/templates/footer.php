

</div><!-- /#container -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>
      <script src="<?php echo base_url('css/temp.css'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('js/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-confirmation.min.js'); ?>"></script>

  <script>
  $(function() {
  $('[data-toggle=confirmation]').confirmation({
  rootSelector: '[data-toggle=confirmation]',
  btnOkLabel: 'Yes',
  btnCancelLabel: 'No',
  title:'Are you sure?'
});
// DataTable
$(document).ready(function() {
    $('#table').DataTable( {
        "dom": '<"row"<"marTop col-sm-2"l><"marTop col-sm-5"f><"col-sm-5"p><"clear">>rt<"row"<"marTop col-sm-6"l><"marTop col-sm-6"p><"clear">>',
        "decimal": false,
        "info": false,
        "searching": false,
        "infoEmpty": false,
        "infoFiltered": false,
        "infoPostFix": false,
        "pagingType": "full_numbers",
        "displayLength": 25,
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "emptyTable": "No data",
            "thousands": ",",
            "lengthMenu": "Show _MENU_",
            "loadingRecords": "Loading...",
            "processing": "Processing...",
            "search": "Search",
            "zeroRecords": "Not found",
            "paginate": {
                "first": '<span class="glyphicon glyphicon-backward">',
                "last": '<span class="glyphicon glyphicon-forward"></span>',
                "next": '<span class="glyphicon glyphicon-step-forward">',
                "previous": '<span class="glyphicon glyphicon-step-backward"></span>'
            }
        }
    } );
} );
  });

  </script>  

</body>
</html>