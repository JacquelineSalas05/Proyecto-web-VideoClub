<?php
include("conexion.php");


if (isset($_POST['nickname']) && isset($_POST['clave'])) {
  $usuario=$_POST['nickname'];
  $clave=$_POST['clave'];
    if ($usuario=="Jacqui") {
        $consulta="SELECT * FROM tbl_empleado WHERE Nickname='$usuario' and Contra='$clave'";
        $resultado=mysqli_query($conexion, $consulta);
        $filas=mysqli_num_rows($resultado);
        if ($filas>0) {
            header("Location: ../Admin/admin.php");
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }else{
        ?>
        <!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <meta charset="utf-8">
            <script>alert("Cuenta o usuario no valido, ingrese la informacion nuevamente ")</script>
            <title></title>
          </head>
          <body>
          </body>
          </html>
          <?php
        }
    }
  else{

    $consulta="SELECT * FROM tbl_cliente WHERE Nickname='$usuario' and Contra='$clave'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);
    if ($filas>0) {
      header("Location: ../Cliente/cliente.php");
      mysqli_free_result($resultado);
      mysqli_close($conexion);
      }else{
    ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <script>alert("Cuenta o usuario no valido, ingrese la informacion nuevamente ")</script>
         <title></title>
       </head>
       <body>
         </body>
      </html>
      <?php
    }
  }
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bienvenido</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>


	<div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
				<div class="login100-form-title">
					<span class="login100-form-title-1">
						Bienvenido
					</span>
				</div>

				<form class="login100-form validate-form" action="login.php" method="post" >
						<span class="label-input100">Nickname</span>
						<input class="input100" type="text" name="nickname" placeholder="Ingrese el nickname">


					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="clave" placeholder="Ingrese la contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="#" class="contraseña">
								<h3>¿Olvidó la contraseña?</h3>
							</a>
						</div>
					</div>

						<button type="submit" name="button" class="Iniciar">Iniciar sesión</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../js/main.js"></script>
</body>
</html>
