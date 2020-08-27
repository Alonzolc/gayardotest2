<?php  
	require_once("../../modelo/class.conexion.php");

	if(isset($_SESSION["backend_id"])){	

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>inicio</title>
	
</head>
<body> xdxdxddx
</body>
</html>
<?php  
	}else{
		header("Location: ../login.php");
	}
?>