<?php

require_once ("global.php");
$conexion=mysqli_connect(_DB_HOST_,_DB_USERNAME_,_DB_PASSWORD_,_DB_NAME_);

if ($conexion){
	echo "conexion correcta";
}else{

}



 