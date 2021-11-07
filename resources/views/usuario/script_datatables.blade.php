<script>
$('#tabla_resultados').DataTable
({      
	"bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bInfo": true,
    "bAutoWidth": true,
	"order": [[ 0, "desc" ]],
	pageLength : 10,
	lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
	language: 
	{
	"lengthMenu": "Mostrar _MENU_ registros",
	"zeroRecords": "No se encontraron resultados",
	"info": "Datos del _START_ al _END_ de un total de _TOTAL_ registros",
	"infoEmpty": "Datos del 0 al 0 de un total de 0 registros",
	"infoFiltered": "(filtrado de un total de _MAX_ registros)",
	"sSearch": "Buscar",
	"searchPlaceholder": "Busque por palabra o parte de ella...",
	"oPaginate": 
		{
		"sFirst": "Primero",
		"sLast": "Último",
		"sNext": "Siguiente",
		"sPrevious": "Anterior"
		},
	"sProcessing": "Procesando...",
	},
	//para usar los botones   
	//responsive: "true",
	dom: 'Blfrtip',
	buttons: 
	[
	{
		extend: 'csvHtml5',
		text: '<i class="fas fa-file-csv"></i> ',
		titleAttr: 'Exportar a CSV (separado por comas, se puede abrir en Excel)',
		className: 'btn btn-success'
	},
	{
		extend: 'excel',
		text: '<i class="fas fa-file-excel"></i> ',
		titleAttr: 'Exportar a Excel',
		className: 'btn btn-success'
	},
	{
		extend: 'pdfHtml5',
		text: '<i class="fas fa-file-pdf"></i> ',
		titleAttr: 'Exportar a PDF',
		className: 'btn btn-danger'
	},
	{
		extend: 'print',
		text: '<i class="fa fa-print"></i> ',
		titleAttr: 'Imprimir',
		className: 'btn btn-info'
	}
	]
	
});

</script>