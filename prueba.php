<?php 
require_once "conexion/postgres.php";
$conexion=conecta();
$sql="select id_record,first_name from schema_test.employees";

			$res=ejecuta($conexion,$sql);
			$fila=traer_fila($res);
			
			$n=0;
			echo "<table> <tr>
					<th> Id  </th>
					<th> Name </th>
					</th>";

			if ($row = pg_fetch_array($res))
			{ 
				do 
				{
					$n=$n+1;
				if($n%2==0)
					echo "
					<tr>
							 <td width=55% >".$row["id_record"]."</td>
							 <td width=45% >".$row["first_name"]."</td>
							 </tr> \n"; 
				else
					echo "
					tr>
							 <td width=55% >".$row["id_record"]."</td>
							 <td width=45% >".$row["first_name"]."</td>
							 </tr> \n"; 
				} 
				while ($row = pg_fetch_array($res)); 
						
				echo "</table>";
			} 
			else
			{ 
				 echo " No se ha encontrado ninguna"; 
			} 
		
		?>
