<?php

function insertar_datos($fecha,$Dia,$TMax,$HTMax,$TMin,$HTMin,$TMed,$HuMax,$HuMin,$HuMed,$VelV,$DirV,$Rad,$Prec,$ETo){
	global $conexion;
	//echo $TMax.'</br>';
	$sentencia="INSERT INTO datos (Fecha,Dia,TMax,HTMax,TMin,HTMin,TMed,HuMax,HuMin,HuMed,VelV,DirV,Rad,Prec,ETo)VALUES('$fecha',$Dia,$TMax,'$HTMax',$TMin,'$HTMin',$TMed,$HuMax,$HuMin,$HuMed,$VelV,$DirV,$Rad,$Prec,$ETo)";
	$ejecutar=mysqli_query($conexion,$sentencia);
	return ($ejecutar);

}
//
//

?>