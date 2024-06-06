<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once __DIR__ . '/../config/db.php';
            $con = new db();
            $this->PDO = $con->conexion();
        }
        
        public function insertar($nombre, $direccion, $telefono, $correo_electronico, $password){
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stament = $this->PDO->prepare("INSERT INTO username (nombre, direccion, telefono, correo_electronico, estado, password) 
                VALUES (:nombre, :direccion, :telefono, :correo_electronico, 1, :password)"
            );
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":direccion", $direccion);
            $stament->bindParam(":telefono", $telefono);
            $stament->bindParam(":correo_electronico", $correo_electronico);
            $stament->bindParam(":password", $hashed_password);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM username order by 1 desc");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update( $id, $nombre, $direccion, $telefono, $correo_electronico){
            $stament = $this->PDO->prepare("UPDATE username SET 
                nombre = :nombre,
                direccion = :direccion,
                telefono = :telefono,
                correo_electronico = :correo_electronico
                WHERE id = :id"
            );
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":direccion", $direccion);
            $stament->bindParam(":telefono", $telefono);
            $stament->bindParam(":correo_electronico", $correo_electronico);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false;
        }

        public function updateEstado($id, $estado){
            $stament = $this->PDO->prepare("UPDATE username SET
                estado = :estado
                WHERE id = :id
            ");
            $stament->bindParam(":id", $id);
            $stament->bindParam(":estado", $estado);
            return ($stament->execute()) ? true : false;
        }

        public function getUserByEmail($correo_electronico) {
            echo "<script>console.log('Usuario no encontrado para el correo electrónico:', '" . $correo_electronico . "');</script>";
            $stament = $this->PDO->prepare("SELECT * FROM username WHERE correo_electronico = :correo_electronico and estado = 1 LIMIT 1");
            $stament->bindParam(":correo_electronico", $correo_electronico);
            $stament->execute();
            return $stament->fetch(PDO::FETCH_ASSOC);
        }
        
    }

?>
