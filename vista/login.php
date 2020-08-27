<?php  
require_once("../modelo/class.conexion.php");
require_once("../modelo/class.user.php");
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
	$usuario = new Usuarios();
	$usuario->login();
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<title>loginxd</title>
</head>

<br><br>
<br>
<br>
<center>
  <p> Login </p>
  <br>
<br>
<body >
  
<div class="">
  <div class="form">
    <form class="login-form" action="" method="post">
      <input type="text" name="user" placeholder="usuario"/>
      <input type="password" name="pass" placeholder="contraseña"/>
      <input type="hidden" name="grabar" value="si">
      <button>login</button>
    </form>
  </div>
</div>

</body>
</center>
</html>

