<?php 
extract($_REQUEST);//recoger todas las variables  que pasan metodo GET o POST

/*hacemos el llamado al archivo que contiene  las valores parametros conexion a la base dedatos */
requiere"conexionbasesdedatos.php"

//creamos el objeto conexion utilizando la extension mysqli
$objconexion= new mysqli($host,$user,$password,$basedatos);

//verificamos la conexion
if ($objconexion->connect_errno)
{
	echo "error de conexion a la base de datos ".$objconexion->conect_error;
	exit();
}
//vamos a realizar el proceso para insertar el paciente 

//guardamos  en una variable la sentencia sql
$sql="insert into pacientes(pacidentificacion,pacnombres,pacapellidos,pacfechadenacimiento,pacsexo")
values("$_request[identificaion]`.`$_REQUEST[nombres]`.`$_request[apellidos]",`$_REQUEST[fechadenacimiento]`.`$_REQUEST[sexo]`)""

//ejecutamos la conzulta llamando al metodo query del objeto conexion y pasando la sentencia sql

if($objcoenxion->query(Ssql))
	header ("location.index2.php?pag=insertarpaciente&msj=1");
else
	header ("location.index2.php?pag=insertarpaciente&msj=2");
?

//debemos modificar el codigo del formulario en el encabezado agregadole el nombre del archivo en el action:
<form id="form1" name="form1" method="post"
action=""

