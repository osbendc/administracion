<?php
class database {
    private $server;
    private $user;
    private $pass;
    private $table;
    private $pdo;
    public function __construct() {
        $this->server = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->table = 'administacion';
    }
    public function nuevaBD(){
        $this->pdo = new PDO('mysql:host='.$this->server.';dbname='.$this->table, $this->user, $this->pass);
    }
    public function guardar_ficha($nombre, $producto, $telefono, $fecha){
        $exQuery = $this->pdo->prepare("INSERT INTO fichas(id,nombre,producto,telefono,fecha,historico) "
                . "VALUES(:id, :nombre, :producto, :telefono, :fecha, :historico)");
        $exQuery->execute(array(':id' => null,"nombre"=> $nombre,"producto"=> $producto,"telefono"=> $telefono,"fecha"=> $fecha,"historico"=>0));
    }
    public function editar_ficha($id,$nombre, $producto, $telefono, $fecha){
        $Msql = "UPDATE fichas SET nombre=?,producto=?,telefono=?,fecha=? WHERE id=?";
        $actMysql = $this->pdo->prepare($Msql);
        $actMysql->execute(array($nombre, $producto, $telefono, $fecha, $id));
    }
	public function archivar_ficha($id,$historico){
        $Msql = "UPDATE fichas SET historico=? WHERE id=?";
        $actMysql = $this->pdo->prepare($Msql);
        $actMysql->execute(array($historico, $id));
    }
    public function eliminar_ficha($id){
        $count = $this->pdo->exec("DELETE FROM fichas WHERE id = ".$id);
    }
	public function mostrar_ficha($id){
        $dataMysql = 'SELECT * FROM fichas WHERE id = '.$id;
        return $this->pdo->query($dataMysql);
	}
    public function mostrar_usuarios(){
        $dataMysql = 'SELECT * FROM usuarios';
        return $this->pdo->query($dataMysql);
    }
	public function mostrar_usuario($nic, $pass){
        $dataMysql = 'SELECT * FROM usuarios WHERE nombre = "'.$nic.'" AND password = "'.$pass.'"';
        return $this->pdo->query($dataMysql);
	}
    
}
?>