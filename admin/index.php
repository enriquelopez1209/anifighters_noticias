<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AniFighters</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<link type="image/x-icon" href="img/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon" /> 
<?php include ('conexion.php');?>
</head>
<body>
<header>
<a href="index.php"><img id="logo" src="../img/logoAF_transp.png"></a>
</header>
<?php include ('../nav.php');?>
<div class="admin">
<form action="panel.php" method="post">
<fieldset><legend>Acceso a usuarios</legend>
<p>

</p>
<label>Usuario</label><input type="text" name="user"><br><br>
<label>Contraseña</label><input type="password" name="pass"><br><br>
<input type="submit" value="Entrar">
</fieldset>
</form>
</div>
<footer>
<span id="cr">&copy; Anifighters <?=date('Y')?> Derechos reservados</span>
</footer>
</body>
</html>