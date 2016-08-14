<?php  
function conecta()
{
    $user="postgres";
    $pass="200193";
    $db="test";
    $port=5432;
    $host="localhost";
   // $cone_str="host="localhost" port=5432 dbname="cliente" user="postgres" password="200193"";
    @$cone_str="host=$host port=$port dbname=$db user=$user password=$pass";
   @$cone = pg_connect($cone_str) or die ("Error de conexion.". pg_last_error());
    //echo "Conexion exitosa <hr>"; 
    //$cone=hola;
    return @$cone;
}
function ejecuta($Conexion,$sql)
{
    @$resul=pg_query($Conexion,$sql);
    return @$resul;
}
function traer($resultados)
{
    @$fila=pg_fetch_array($resultados);
    return @$fila;
}

function traer_fila($resultados)
{
@$filas=pg_fetch_row($resultados);
return $filas;
}

function generar_clave($nombre,$fecha,$login)
{
    $caracteres = $nombre.$fecha.$login;
    $password = substr(md5($caracteres),1, 8);
    return $password;
}

?>