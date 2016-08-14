		<!DOCTYPE html>
		<html>
		<head>
			<title>Reporte de los empleados</title>
		</head>
		<body>
		<h2>Reporte de los empleados</h2>
		<hr>
<form name="buscar" method="get" action="ver.php">
<br>
	First name:<input type="text" name="nom"><br> <br>
	Last name:<input type="text" name="apel"><br> <br>	
	Telefono <input type="text" name="tele" ><br> <br>
	Codigo Postal <input type="text" name="postal" ><br> <br>
<input type="submit" name="buscar" value="buscar">
<hr>

<?php /*
require_once "conexion/postgres.php";
$a= $_GET['nombre'];
			$conexion=conecta();
//(isset($_GET['buscar']))

//
			/*
$sql="select schema_test.employees.id_record,first_name,last_name,schema_test.adresses.address1,schema_test.departaments.descripcion,schema_test.phones.phone,schema_test.adresses.zip_code from schema_test.employees 
inner join schema_test.adresses on schema_test.adresses.id_employee=schema_test.employees.id_record 
inner join schema_test.departaments on schema_test.departaments.id_record=schema_test.employees.id_deptament 
inner join schema_test.phones on schema_test.phones.id_employee=schema_test.employees.id_record where schema_test.employees.first_name='".$a."'";*/
			
/*
$sql="select schema_test.employees.id_record,first_name,last_name,schema_test.adresses.address1,schema_test.departaments.descripcion,schema_test.phones.phone,schema_test.adresses.zip_code from schema_test.employees 
inner join schema_test.adresses on schema_test.adresses.id_employee=schema_test.employees.id_record 
inner join schema_test.departaments on schema_test.departaments.id_record=schema_test.employees.id_deptament 
inner join schema_test.phones on schema_test.phones.id_employee=schema_test.employees.id_record;";

		
			$res=ejecuta($conexion,$sql);
			$fila=traer_fila($res);
		
			$n=0;
			echo "<table> <tr>
					<th width=2%> Id  </th>
					<th width> Name </th>
					<th> Last name  </th>
					<th> Ciudad  </th>
					<th> Direccion </th>
					<th> Telefono  </th>
					<th> Departamento  </th>
					<th> Codigo Postal  </th>		";

			if ($row = pg_fetch_array($res))
			{ 
				do 
				{
					$n=$n+1;
					if($n%2==0)
					 echo "
					<tr>
							 <td width=2% >".$row["id_record"]."</td>
							 <td width=10% >".$row["first_name"]."</td>
							 <td width=20% >".$row["last_name"]."</td>
							 <td width=20% >".$row["address1"]."</td>
							 <td width=20% >".$row["descripcion"]."</td>
							 <td width=10% >".$row["phone"]."</td>
							 <td width=10% >".$row["zip_code"]."</td>
							</tr> \n"; 
				else
					  echo "
					<tr>
							 <td width=2% >".$row["id_record"]."</td>
							 <td width=10% >".$row["first_name"]."</td>
							 <td width=20% >".$row["last_name"]."</td>
							 <td width=20% >".$row["address1"]."</td>
							 <td width=20% >".$row["descripcion"]."</td>
							 <td width=10% >".$row["phone"]."</td>
							 <td width=10% >".$row["zip_code"]."</td>
							</tr> \n"; 
											
				} 
				while ($row = pg_fetch_array($res)); 
							//echo "</table> \n"; 
				echo "</table>";
			} 
			else
			{ 
				 echo " No se ha encontrado ninguna"; 
			} 
		//
	/*lse
		{
			echo "ok";
		}*/
		?>
		</form>
		</body>
		</html>