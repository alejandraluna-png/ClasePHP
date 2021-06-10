<?php 
   include_once("BDconect.php");

  if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['categoria']) && isset($_POST['edad']) && isset($_POST['marca_coche']) && isset($_POST['modelo']) && isset($_POST['numero_de_competidor'])){
      if ($_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['categoria'] !== "" && $_POST['edad'] !== "" && $_POST['marca_coche'] !== "" && $_POST['modelo'] !== "" && $_POST['numero_de_competidor'] !== ""){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $categoria = $_POST['categoria'];
        $edad =  $_POST['edad'];
        $marca_coche =  $_POST['marca_coche'];
        $modelo =  $_POST['modelo'];
        $numero_de_competidor = $_POST['numero_de_competidor'];


        $conexion = new Database;
        $confirm = $conexion->insertar($nombre, $apellido, $categoria, $edad, $marca_coche, $modelo, $numero_de_competidor);
      }else{
          $confirm = 2;
      }
  } 
  header('Location: ../intex.php?confirm='.$confirm)

?>