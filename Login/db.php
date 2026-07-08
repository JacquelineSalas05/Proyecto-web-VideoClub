<?php
class conexion{

  function conectar(){
  return mysqli_connect("localhost", "root", "","db_peliculas");

  }

}


$cnn = new conexion();
if ($cnn->conectar()) {
  header("Location: ../Admin/admin.php");
}else{
  header("Location: ../Login/login.php");
}
 ?>
