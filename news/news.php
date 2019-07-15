<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AniFighters</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<link type="image/x-icon" href="img/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon" /> 
<?php include ('conexion.php');?>
</head>
<body>
<header>
<div id="fondoheader">
<a href="index.php"><img id="logo" src="img/logoAF_transp.png"></a>
</div>
</header>
<nav><span class="links span"> <a href="index.php">Inicio</a> <a href="javascript:;">Estrategia general</a> <a href="javascript:;">Video</a> <a href="javascript:;">Streams</a> <a href="javascript:;">Chat</a> <a href="javascript:;">Calendario de Torneos</a></span> <span class="navfecha"> <?php echo date('d/m/Y');?> </span></nav>
<div id="wrapper">
<div id="sidebar">
<div id="categorias">
<a style="cursor:pointer;"><li>Wikis</li></a><br><br><br>
<a style="cursor:pointer;"><li>Bases de datos</li></a><br><br><br>
<a style="cursor:pointer;"><li>Fecha de lanzamientos</li></a><br><br><br>
<a style="cursor:pointer;"><li>Diccionario FG's</li></a><br><br><br>
<a style="cursor:pointer;"><li>Storylines</li></a><br><br><br>
<a style="cursor:pointer;"><li>Team AF</li></a><br><br><br><br>
</div>
</div><section>
<?php
//conexion
$conexion=new MySQLi($host, $usuario, $clave, $base);
	//consulta a tabla news
	$consulta="SELECT id, nota, seccion, fecha, contenido, imagen FROM news ORDER BY id DESC LIMIT 7";
	//se selecciona la DB
	mysqli_select_db($conexion,$base);
	$result=$conexion->query($consulta);
	//imprimir las filas resultantes de la DB
	while($fila=$result->fetch_assoc()){
?>
<article class="news">
<div class="titulo"><a href="news.php?id=<?php echo $fila["id"];?>"><?php echo $fila["nota"];?></a></div>
<div class="contenido">
<div class="relleno">
<span class="fecha"><?php echo $fila["fecha"];?></span><br><br>
<span class="imagen">
<a href="news.php?id=<?php echo $fila["id"];?>"><img src="<?php echo $fila["imagen"];?>" width="520px"></a>
</span>
<p class="texto"><?php echo $fila["contenido"];?></p>
</div>
</div>
</article>
<?php } ?>
</section>
</div>
<footer>
<span id="cr">&copy; Anifighters 2015 Derechos reservados</span>
</footer>
</body>
</html>