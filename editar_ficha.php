<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}else{
require 'db/database.php';
$database = new database();
$database->nuevaBD();
include("layout/header.php");
?>
<?php foreach($database->mostrar_ficha($_REQUEST['id']) as $datos):?>
	<form class="form-horizontal col-md-10" action="actions/editar_ficha.php" method="post">
	  <input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>">
	  <div class="form-group">
		<label class="col-sm-2 control-label">Nombre</label>
		<div class="col-sm-10">
		  <input type="text" name="d1" class="form-control" value="<?php echo $datos['nombre'];?>">
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">Producto</label>
		<div class="col-sm-10">
		  <textarea name="d2" class="form-control"><?php echo $datos['producto'];?></textarea>
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">Teléfono</label>
		<div class="col-sm-10">
		  <input type="text" name="d4" class="form-control" value="<?php echo $datos['telefono'];?>">
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-sm-2 control-label">Fecha Alta</label>
		<div class="col-sm-10">
		  <input type="date" name="d7" class="form-control" value="<?php echo $datos['fecha'];?>">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-5 col-sm-10">
		  <button type="submit" class="btn btn-default">Editar</button>
		</div>
	  </div>
	</form>
<?php endforeach;?>
<?php include("layout/footer.php"); }?>