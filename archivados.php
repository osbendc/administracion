<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}else{
include("layout/header.php");
?>
<script>
	$(document).ready(function() {
		var table = $('#example').DataTable( {
			"processing": true,
			"scrollX": true,
			"autoWidth": true,
			dom: 'Bfrtip',
			language: {
				buttons: {
					pageLength: {
						10: "Mostrar: 10",
						25: "Mostrar: 25",
						50: "Mostrar: 50",
						_: "Mostrar: Todo"
					}
				},
				"url": "Spanish.json"
			},
			buttons: [
				'pageLength',
				{
					extend: 'csv',
					exportOptions: {
						columns: ':visible'
					}
				},  
				{
					extend: 'excel',
					exportOptions: {
						columns: ':visible'
					}
				}, 
				{
					extend: 'pdf',
					exportOptions: {
						columns: ':visible'
					}
				},
				{
					extend: 'print',
					exportOptions: {
						columns: ':visible'
					}
				},
				{
					extend: 'colvis',
					text: 'esconder'
				}
			],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
			"serverSide": true,
			"ajax": "server_side2.php",
			"columnDefs": [ {
				"targets": 5,
				"data": null,
				"defaultContent": '<span class="glyphicon glyphicon-pencil text-info" style="cursor:pointer;" aria-hidden="true"></span>'
			},
			{
				"targets": 6,
				"data": null,
				"defaultContent": '<label class="glyphicon glyphicon-level-up text-info" style="cursor:pointer;" aria-hidden="true"></label>'
			},
			{
				"targets": 7,
				"data": null,
				"defaultContent": '<b class="glyphicon glyphicon-remove text-info" style="cursor:pointer;" aria-hidden="true"></b>'
			} ]
		} );
		$('#example tbody').on( 'click', 'span', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location="editar_ficha.php?id="+data[0];
		} );
		$('#example tbody').on( 'click', 'label', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location="actions/desarchivar_ficha.php?id="+data[0];
		} );
		$('#example tbody').on( 'click', 'b', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location="actions/eliminar_ficha.php?id="+data[0];
		} );
	} );
</script>
<div class="col-xs-12 col-sm-12 col-md-12">
<h1 class="text-center text-info">Archivados</h1><hr />
	<table id="example" class="table table-striped responsive">
		<thead> 
			<tr> 
				<th>#</th>
				<th>Nombre</th>
				<th>Producto</th>
				<th>Teléfono</th>
				<th>Fecha Alta</th>
				<th>Editar</th>
				<th>Desarchivar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr> 
				<th>#</th>
				<th>Nombre</th>
				<th>Producto</th>
				<th>Teléfono</th>
				<th>Fecha Alta</th>
				<th>Editar</th>
				<th>Desarchivar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
	</table>
</div>
<?php include("layout/footer.php"); }?>