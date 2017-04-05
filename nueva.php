<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}else{
include("layout/header.php");
?>
<form class="form-horizontal col-md-10" action="actions/agregar_ficha.php" method="post">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="d1" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Producto</label>
    <div class="col-sm-10">
      <textarea name="d2" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Teléfono</label>
    <div class="col-sm-10">
      <input type="text" name="d4" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Fecha Alta</label>
    <div class="col-sm-10">
      <input type="date" name="d7" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="btn btn-default">Agregar</button>
    </div>
  </div>
</form>
<?php include("layout/footer.php"); }?>