<?php 
require_once "conexion/postgres.php";
$conexion=conecta();
	$sql1="select max(id_record) from schema_test.employees";


  		$quer= ejecuta($conexion,$sql1);
		$row=traer_fila($quer);		
		$cod=$row[0] + 1;
		$num=$cod;

		$a= $_GET['nombre'];
		$b= $_GET['last'];
		$c=$_GET['depto'];
		$d=$_GET['posicion'];
		$e=$_GET['telefono'];
		$f=$_GET['ciudad'];
		$h=$_GET['direccion'];
		$i=$_GET['codigo_postal'];

$sql="insert into schema_test.employees values($num,'$a','$b','$c','$d')";
		 ejecuta($conexion,$sql);
$sql1="insert into schema_test.adresses values($num,$num,'$h','RD','$f','R.D',$i)";
  		 ejecuta($conexion,$sql1);
$sql12="insert into schema_test.phones values($num,$num,'$e')";
		ejecuta($conexion,$sql12);

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<h1 align="center"> Este empleado ha sido registrado exitosamente..!!</h1> 
<form></form>
</body>
</html>