<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administración del sitio</title>
<link type="image/x-icon" href="../img/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="../img/favicon.ico" rel="shortcut icon" /> 
</head>
<body style="background:url(img/bryan_fury_and_lei_wulong_wallpaper_by_aleksparx-d4q162h.jpg) no-repeat fixed;
background-size: cover;">
<form action="enviar.php" method="post">
<fieldset><legend>Panel de administración</legend>
<li><label>Nota</label> <input name="nota" type="text" size="50"></li>
<li><label>Sección</label>
<select name="seccion">
<option>--------</option>
<option>Capcom</option>
<option>SNK</option>
<option>Anime FG's</option>
<option>Doujin Fighters</option>
<option>Otros</option>
</select>
</li>
<li><label>Fecha</label><input name"fecha" type="text"></li>
<li><label>Contenido</label><input name="contenido" type="text"></li>
<li><label>Imágen</label><input name="imagen" type="text"></li><br><br>
<button type="submit">Enviar</button><br><br>
<button type="reset">Limpiar</button>
</fieldset>
</form>
</body>
</html>