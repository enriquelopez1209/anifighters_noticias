<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AniFighters</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<link type="image/x-icon" href="img/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon" /> 
</head>
<body>
<div class="container">
<div id="header">
<div id="fondoheader">
<a href="index.php"><img id="logo" src="img/logoAF_transp.png"></a>
</div>
</div>
<div id="nav"><span class="links span"> <a href="index.php">Inicio</a> <a href="javascript:;">Estrategia general</a> <a href="javascript:;">Video</a> <a href="javascript:;">Streams</a> <a href="javascript:;">Chat</a> <a href="javascript:;">Calendario de Torneos</a></span> <span class="fecha span"> <?php echo date('d/m/Y');?> </span></div>
<div id="sidebar">
<div id="categorias">
<a href="javascript:;"><li>Wikis</li></a><br><br><br>
<a href="javascript:;"><li>Bases de datos</li></a><br><br><br>
<a href="javascript:;"><li>Fecha de lanzamientos</li></a><br><br><br>
<a href="javascript:;"><li>Diccionario FG's</li></a><br><br><br>
<a href="javascript:;"><li>Storylines</li></a><br><br><br>
<a href="javascript:;"><li>Team AF</li></a><br><br><br><br>
</div>
</div>
<div id="der"></div>
<div class="contenido">
<?php
include ('conexion.php');
//conexion
if($conexion=mysql_connect($host, $usuario, $clave)){
	//$id=(int)$_GET['id'];
	//consulta a tabla news
	$consulta="SELECT id, nota, seccion, fecha, contenido, imagen FROM news ORDER BY id DESC LIMIT 7";
	//se selecciona la DB
	mysql_select_db($base);
	$result=mysql_query($consulta);
	//imprimir las filas resultantes de la DB
	while($fila=mysql_fetch_array($result)){
?>
<div class="news">
<span class="titulo"><?php echo $fila["nota"];?></span>
</div>
</div>
<?php	
	}
}else{
	echo "MYSQL no tiene conexion";
	}
?>
</div>
<div id="footer">
<div id="cr">&copy; Anifighters 2015 Derechos reservados</div>
</div>
</body>
</html>