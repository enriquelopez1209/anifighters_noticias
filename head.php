<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<title>AniFighters</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<link type="image/x-icon" href="img/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<meta name="keywords" content="Guilty Gear, Blazblue, Under Night In-Birth, Melty Blood, Arcana Heart, Dragon Ball Fighterz, ggxrd, rev2, bbcf, ah3 love max, uniel st, mbaacc, dbfz, anime fighting games, FGC, guilty gear en español, blazblue en español, combos, juegos de pelea de anime"> 
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<?php
	include ('conexion.php');
	//conexion
	$conexion=new MySQLi($host, $usuario, $clave, $base);
	if(isset($_GET['index']) && $_GET['index']==1){
	$id=$_GET['id'];
	//consulta a tabla news
	$consulta="SELECT id, titulonews, count, timestamp, tag, fecha, contenido, short, imagen FROM news WHERE id=$id";
	//se selecciona la DB
	mysqli_select_db($conexion,$base);
	$result=$conexion->query($consulta);
	$sql = "
			UPDATE news 
			SET count = count+1, 
			timestamp = NOW()
			WHERE id = " . $id . "
			";
	$conexion->query($sql);
	//imprimir las filas resultantes de la DB
	$fila=$result->fetch_assoc();
?>
<meta content='<?php echo $fila["titulonews"];?>' property='og:title'/>
<meta content='http://www.anifighters.com/img/<?php echo $fila["imagen"];?>' property='og:image'/>
<meta property="og:url" content="http://www.anifighters.com/news.php?index=1&id=<?php echo $id;?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="620" />
<meta property="og:image:height" content="541" />
<?php 
	}
	else{} 
?>
</head>
