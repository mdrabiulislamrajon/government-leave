<script type="text/javascript">
	$(document).ready(function() {
		$('.datatable').dataTable({
            "iDisplayLength": <?php echo e(isset($perPage) ? $perPage : 15); ?>,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": false,
            "bInfo": true,
            "bAutoWidth": false 
	    });
	});
</script>