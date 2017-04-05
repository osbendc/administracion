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
			"ajax": "server_side.php",
			"columnDefs": [ {
				"targets": 5,
				"data": null,
				"defaultContent": '<span class="glyphicon glyphicon-pencil text-info" style="cursor:pointer;" aria-hidden="true"></span>'
			},
			{
				"targets": 6,
				"data": null,
				"defaultContent": '<label class="glyphicon glyphicon-paperclip text-info" style="cursor:pointer;" aria-hidden="true"></label>'
			} ]
		} );
		$('#example tbody').on( 'click', 'span', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location="editar_ficha.php?id="+data[0];
		} );
		$('#example tbody').on( 'click', 'label', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location="actions/archivar_ficha.php?id="+data[0];
		} );
	} );
</script>
<?php 
	$host= gethostname();
	$ip = gethostbyname($host);
	echo "<p class='text-info' style='margin-left:15px;'><b>Dirección de la aplicación:</b> http://".$ip."/adm</p>";	
?>
<div class="col-xs-12 col-sm-12 col-md-12">
	<table id="example" class="table table-striped responsive">
		<thead> 
			<tr> 
				<th>#</th>
				<th>Nombre</th>
				<th>Producto</th>
				<th>Teléfono</th>
				<th>Fecha Alta</th>
				<th>Editar</th>
				<th>Archivar</th>
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
				<th>Archivar</th>
			</tr>
		</tfoot>
	</table>
</div>
<?php include("layout/footer.php"); }?>