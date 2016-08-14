<?php 
require_once "conexion/sql_server.php";
$prueba=conecta();
echo $prueba;
echo "prueba";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<h2 align="center">Registro Empleado</h2>
</head>
<body>
<hr>
<form name="registrarse" method="get" action="gracias.php" >
<br>
	Nombre:    <input type="text" name="nombre" required=" "><br> <br>
	Dirección: <input type="text" name="edad" required=""><br> <br>
	<input type="submit" name="Enviar" value="Enviar">
</form name="cliente" action="gracias.php">
<hr>

</body>
</html>
