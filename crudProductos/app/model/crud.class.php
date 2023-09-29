<?php 
class Crud{
    private $conexion;
    private $host ="localhost";
    private $user = "tomatox";
    private $pass = "";
    private $bd = "crudProductos";

    public function __construct(){
        $this->conexion=new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->pass);
    }
    public function read(){
        $query = "SELECT * FROM t_producto";
        $stmt = $this->conexion->prepare($query);
        $stmt-> execute();
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function create($datos){
        $query = "INSERT INTO t_producto(nombre, precio, fecha_caducidad) VALUES (:nombre, :precio, :fecha_caducidad)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":precio",$datos["precio"]);
        $stmt->bindParam(":fecha_caducidad",$datos["fecha_caducidad"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }

    public function createUser($datos){
        $query = "INSERT INTO t_usuario(nombres, apellidos, usuarios, pass) VALUES (:nombres, :apellidos, :usuarios, :pass)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombres",$datos["nombres"]);
        $stmt->bindParam(":apellidos",$datos["apellidos"]);
        $stmt->bindParam(":usuario",$datos["usuario"]);
        $stmt->bindParam("pass",$datos["pass"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }

    public function update($datos){
        $query = "UPDATE t_producto SET nombre=:nombre, precio=:precio, fecha_caducidad=:fecha_caducidad WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id",$datos["id"]);
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":precio",$datos["precio"]);
        $stmt->bindParam(":fecha_caducidad",$datos["fecha_caducidad"]);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }


    public function delate($id){
        $query = "DELETE FROM t_producto WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }

    public function show($id){
        $query = "SELECT * FROM t_producto WHERE id=:id";
        $stmt = $this->conexion->prepare($query);
        $stmt ->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result; 
    }
}

?>