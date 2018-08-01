<?php
if (isset($_POST["enviar"])) {
	require_once("conexion.php");
	require_once("functions.php");
	$archivo=$_FILES["archivo"]["name"];
	$archivo_copiado=$_FILES["archivo"]["tmp_name"];
	$archivo_guardado="copia_".$archivo;
	if (copy($archivo_copiado,$archivo_guardado)){
	}
	if (file_exists($archivo_guardado)){
		$fp=fopen($archivo_guardado, "r");
		$indice=0;
		$perdidos=0;
		while ($datos=fgetcsv($fp,0,";")){
			
			$fechaimportada=DateTime::createFromFormat('d/m/Y',$datos[0]);
			
			$fechados=$fechaimportada->format('Y-m-d');
				
			$resultado=insertar_datos($fechados,$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],$datos[8],$datos[9],$datos[10],$datos[11],$datos[12],$datos[13],$datos[14]);
			if ($resultado){
				$indice=$indice+1;

			}else{
				$perdidos=$perdidos+1;
			} 	
		}
		echo "Se insertaron ".$indice." registros y se perdieron ".$perdidos;
	}
}
?>


<!DOCTYPE html>
<hmtl lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Subir a la base datos</title>
	</head>
	<body>
		<div class="formulario">
			<form action="index.php" class="formulariocompleto" method="post" enctype="multipart/form-data">
				<input type="file" name="archivo" class="form-control"/>
				<input type="submit" value="SUBIR ARCHIVO" class "form-control" name="enviar" />
			</form>
		</div>
	</body>
</hmtl>