$(document).ready( function(){
	
	// bootstrap default tooltips
	$('.tip').tooltip();
	
	// bootstra-sepect enabled selects
	$('.selectpicker').selectpicker();
	
	// autosubmit forms on option change
	$('.submit-on-change').change(function(){
		$(this).closest('form').submit();
	});
	
	// clase generica para confirmar botones
	$('.confirm').click(function(){
		var prompt = $(this).attr('data-confirm') ? $(this).attr('data-confirm') : '¿Seguro?';
		return confirm(prompt);
	});
	
	// datatables
	$('table.datatable').dataTable({
		dom: 'T<"clear">lfrtip',
		"tableTools": {
			"sSwfPath": "/swf/copy_csv_xls.swf",
			"aButtons": [
				{
					"sExtends": "copy",
					"sButtonText": '<span class="fa fa-clipboard"></span>'
				},
				{
					"sExtends": "print",
					"sButtonText": '<span class="fa fa-print"></span>'
				}
			]
		},
		language: {
			url: '/js/dataTables.es.json'
		}
	});
	
});
