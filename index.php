<!doctype html>
<html lang="en">
<?php include ('head.php');?>
<body>
<?php include ('header.php');?>
<div class="content-wrapper">
<?php include ('nav.php');?>
<div class="top-wrapper">
<div class="banner-top"></div>
</div>
<section>
<article class="destacado">
<h2 class="titulo-seccion"><span>DESTACADOS</span></h2>
<hr class="hr-titulo">
<div class="lista-destacados">
<?php
//conexion en HEAD
//consulta a tabla news
$consultaDestacados="SELECT id, titulonews, tag, fecha, contenido, imagen FROM news WHERE destacado=1 ORDER BY fecha DESC LIMIT 4";
//se selecciona la DB
$resultDestacados=$conexion->query($consultaDestacados);
//imprimir las filas resultantes de la DB
while($filaDestacados=$resultDestacados->fetch_assoc()){
?>
<div class="noticia-destacada">
<a href="news.php?index=1&id=<?php echo $filaDestacados["id"]?>">
<div class="img-container">
<img src="img/<?php echo $filaDestacados["imagen"];?>">
</div>
</a>
<a href="news.php?index=1&id=<?php echo $filaDestacados["id"];?>" title="<?php echo $filaDestacados["titulonews"] ?>"><h3 class="titulo-destacado"><?php echo $filaDestacados["titulonews"] ?></h3></a>
</div>
<?php } ?>
</div>
</article>
<div class="recientes">
<h2 class="titulo-seccion"><span>NOTICIAS RECIENTES</span></h2>
<hr class="hr-titulo">
<br>
<br>
<br>
<?php
	//consulta a tabla news
	$consulta="SELECT id, titulonews, tag, fecha, contenido, short, imagen FROM news ORDER BY id DESC LIMIT 7";
	//se selecciona la DB
	$result=$conexion->query($consulta);
	//imprimir las filas resultantes de la DB
	while($fila=$result->fetch_assoc()){
?>
<article class="news">
<div class="contenido">
<div class="relleno">
<div class="imagen">
<a href="news.php?index=1&id=<?php echo $fila["id"];?>"><img src="img/<?php echo $fila["imagen"];?>"></a>
</div>
<div class="details-wrapper">
<div class="titulo"><a href="news.php?index=1&id=<?php echo $fila["id"];?>"><?php echo $fila["titulonews"];?></a></div>
<span class="fecha"><?php echo $fila["fecha"];?></span><br><br>
<p class="texto"><?php echo $fila["short"];?></p>
<a href="news.php?index=1&id=<?php echo $fila["id"];?>" title="<?php echo $fila["titulonews"] ?>" class="ver-mas">Leer más</a>
</div>
</div>
</div>
<hr>
</article>
<?php } ?>
</div>
</section>
<article class="right-wrapper">
<h2 class="titulo-seccion"><span>LO MAS VISTO</span></h2>
<hr class="hr-titulo">
<div class="lista-mas-vistos">
<?php
//consulta a tabla news
$consultaMasVistos="SELECT * 
					FROM news 
					WHERE timestamp > DATE_SUB(curdate(), INTERVAL 3 WEEK) 
					ORDER BY count DESC 
					LIMIT 4";
//se selecciona la DB
$resultMasVistos=$conexion->query($consultaMasVistos);
//imprimir las filas resultantes de la DB
while($filaMasVistos=$resultMasVistos->fetch_assoc()){
?>
<div class="noticia-mas-vistos">
<a href="news.php?index=1&id=<?php echo $filaMasVistos["id"]?>"><img src="img/<?php echo $filaMasVistos["imagen"];?>"></a>
<a href="news.php?index=1&id=<?php echo $filaMasVistos["id"];?>" title="<?php echo $filaMasVistos["titulonews"] ?>"><h3 class="titulo-destacado"><?php echo $filaMasVistos["titulonews"] ?></h3></a>
</div>
<hr width="95%">
<?php } ?>
</div>
</article>
</div>
<?php include ('footer.php');?>
</body>
</html>