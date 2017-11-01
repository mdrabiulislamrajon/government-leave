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
                    title: "{{ $heading }}",
                    exportOptions: {
                        columns: [ {{ $columns }} ]
                    }
                },
                {
                    extend: 'print',
		            title: "{{ $heading }}",
                    exportOptions: {
                        columns: [ {{ $columns }} ],
                        modifier: {
		                    page: 'current'
		                }
                    }
                }
            ]
	    });
	});
</script>