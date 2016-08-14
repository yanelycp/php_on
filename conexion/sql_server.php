<?php

function conecta()
{
@$link= mssql_connect("DESKTOP-HQHCFJP\ycp19","Yanely","Yanely") or die ('No hubo conexión con la base de datos').mssql_error();
@mssql_select_db("test"); 
return $link;
} 

function ejecuta($Conexion,$sql)
{
	$resultados=mssql_query($Conexion,$sql);
	return $resultados;
}
function traer($resultados)
{
    $fila=pg_fetch_array($resultados);
    return $fila;
}

function traer_fila($resultados)
{
@$filas=mssql_fetch_row($resultados);
return $filas;
}

?>
