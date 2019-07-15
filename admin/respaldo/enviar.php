<?php 
include ('conexion.php');
?>
<?php
include ('funcion.php');
?>
<?php
if(conectarBase($host,$usuario,$clave,$base)){
	@mysql_query("SET NAMES 'utf8'");
	if(isset($_POST["nota"], $_POST["seccion"], $_POST["fecha"], $_POST["contenido"], $_POST["imagen"]) and $_POST["nota"]!="" and $_POST["seccion"]!="" and $_POST["fecha"]!="" and $_POST["contenido"]!="" and $_POST["imagen"]!=""){
		
	$nota=$_POST["nota"];
	$seccion=$_POST["seccion"];
	$fecha=$_POST["fecha"];
	$contenido=$_POST["contenido"];
	$imagen=$_POST["imagen"];
	
	$consulta="INSERT INTO news123(id, nota, seccion, fecha, contenido, imagen) values('0','$nota', '$seccion', '$fecha', '$contenido', '$imagen')"; //para llenar los registros como sql
	
	if(mysql_query($consulta)){
		echo '<script type="text/javascript">alert("Registro agregado");</script>';
		echo '<script type="text/javascript">window.location="panel.php"</script>';
		}else{
			echo '<script type="text/javascript">alert("No se logró agregar el registro");</script>';
			echo '<script type="text/javascript">window.location="panel.php"</script>';
			}
		}
	}
?>