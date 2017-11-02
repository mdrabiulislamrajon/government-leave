<script type="text/javascript">
	$(document).ready(function() {
		$('.datatable').DataTable({
            "iDisplayLength": 40,
            dom: 'Bfrti',
	        responsive: true,
	        "bSort": false,
            "bInfo" : false,
	        "buttons": [
                {
                    extend: 'excelHtml5',
                    title: "<?php echo e($heading); ?>",
                    exportOptions: {
                        columns: [ <?php echo e($columns); ?> ]
                    }
                },
                {
                    extend: 'print',
		            title: "<?php echo e($heading); ?>",
                    exportOptions: {
                        columns: [ <?php echo e($columns); ?> ],
                        modifier: {
		                    page: 'current'
		                }
                    }
                }
            ]
	    });
	});
</script>