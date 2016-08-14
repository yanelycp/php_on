<?php 
//require_once "conexion/sql_server.php";
require_once "conexion/postgres.php";
$conexion=conecta();
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
	First name:<input type="text" name="nombre" required=" "><br> <br>
	Last name:<input type="text" name="last" required=" "><br> <br>
	Departamento:<select name="depto" required="" >
	<option value="1">Informatica</option>
	<option value="2">Administracion</option>
	<option value="3">Mercadeo</option>
	<option value="4">Recursos humanos</option>
</select>
 <br><br>
Posicion:<select name="posicion" required="" >
	<option value="1">Supervisor</option>
	<option value="2">Asistente</option>
</select>
 <br><br>	
	Telefono <input type="text" name="telefono" required=" "><br> <br>
	Ciudad  <input type="text" name="ciudad" required=" "><br> <br>
	Direccion <input type="text" name="direccion" required=" "><br> <br>
	Codigo Postal <input type="text" name="codigo_postal" required=" "><br> <br>
	
<input type="submit" name="Enviar" value="Enviar">
  <?php 				

		 
	/*			$sql="select id_record,descripcion from schema_test.departaments"; 
				$resultado = ejecuta($Conexion,$sql);		
					 	
				while($fila=pg_fetch_array($resultado))
			  	{
			  		echo $fila;
				   echo "<option value=\"$fila[id_record]\">$fila[descripcion]</option>"; 
			   	}	 	*/			
  ?>


<hr>
</form action="gracias.php">


</body>
</html>
