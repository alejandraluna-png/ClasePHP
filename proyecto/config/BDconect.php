<?php
   class Database{
      public $db;
      private static $dns = "mysql:host=localhost;dbname=mqueencars";
      private static $user = "root";
      private static $pass = "";
      private static $instance;
      
      public function __construct(){
         $this->db = new PDO(self::$dns, self::$user, self::$pass);
     }

     public static function getInstance(){
      if(!isset(self::$instance)){
          $object = __class__;
          self::$instance = new $object;
      }
      return self::$instance;
  }



  public function insertar($nombre, $apellido, $categoria, $edad, $marca_coche, $modelo, $numero_de_competidor){

   try {
       $conexion = database::getInstance();
       $query = $conexion->db->prepare("INSERT INTO  mcqueencars (nombre, apellido, categoria, edad, marca_coche, modelo, numero_de_competidor) VALUES (:nombre, :apellido, :categoria, :edad, :marca_coche, :modelo, :numero_de_competidor)");
       $query->execute(
           array(
               ':nombre' => $nombre,
               ':apellido' => $apellido,
               ':categoria' => $categoria,
               ':edad' => $edad,
               ':marca_coche' => $marca_coche,
               ':modelo' => $modelo,
               ':numero_de_competidor' => $numero_de_competidor
           )
           );
       return 1;

   } catch(PDOexception $error){
       return 0;
   }

}
public function validarCorredor($numero_de_competidor){
    $conexion = Database::getInstance();
    $query =$conexion->db->prepare("SELECT numero_de_competidor FROM mqueencars WHERE numero_de_competidor=:numero_de_competidor");
    $query->execute(
        array(
            ":numero_de_competidor" => $numero_de_competidor
        )
        );
        return ($query);
}

   }

?>