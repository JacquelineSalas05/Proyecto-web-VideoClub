<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesion</title>
  </head>
  <body>
    <?php
    session_start();
    if ($_SESSION['usuario']['time'] >   time()) {
    }else {
      header('Location: salir.php');
    }*/

//if (isset($_SESSION['usuario'])) {
  //echo $_SESSION['usuario']['Nombre'];
  //var_dump($_SESSION['usuario']);
  //echo "</pre>";
//}else {
  //echo "Inicie session";
  //header('Location: login.php');
}
  /*  echo "<pre>";
    var_dump($_SESSION['usuario']);
    //unset($_SESSION['usuario']);
    echo "</pre>";*/
    ?>
  </body>
</html>
