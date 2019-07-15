<?php
if($_POST['user']=="enrique" && $_POST['pass']=="123"){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administración del sitio</title>
<link type="image/x-icon" href="../img/favicon.ico" rel="icon" />
<link type="image/x-icon" href="../img/favicon.ico" rel="shortcut icon" />
<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background:url(img/bryan_fury_and_lei_wulong_wallpaper_by_aleksparx-d4q162h.jpg) no-repeat fixed;
background-size: cover;">
<body>
<div class="group">
  <form action="enviar.php" method="POST" enctype="multipart/form-data">
  <h2>Panel de administración</h2>

      <label for="Titulo de la noticia">Titulo de la noticia <span><em></em></span></label>
      <input type="text" name="titulonews" class="input" size="70"><br><br>

      <label for="tag">Tag <span><em></em></span></label>
      <input type="text" name="tag" class="input" ><br><br>

      <label for="fecha">Fecha <span><em></em></span></label>
      <input type="date" name="fecha" class="input" ><br><br>

	  <input class="subir-archivo1" name="uploadedfile1" type="file"/><br><br>
	  <input class="subir-archivo2" name="uploadedfile2" type="file"/><br><br>
	  <input class="subir-archivo3" name="uploadedfile3" type="file"/><br><br>
	  <input class="subir-archivo4" name="uploadedfile4" type="file"/><br><br>
	  <input class="subir-archivo5" name="uploadedfile5" type="file"/><br><br>

	  <button type="button" class="insertar-imagen1" style="width: 100px; height: 50px; float: left;">Insertar Imagen 1</button>
	  <button type="button" class="insertar-imagen2" style="width: 100px; height: 50px; float: left;">Insertar Imagen 2</button>
	  <button type="button" class="insertar-imagen3" style="width: 100px; height: 50px; float: left;">Insertar Imagen 3</button>
	  <button type="button" class="insertar-imagen4" style="width: 100px; height: 50px; float: left;">Insertar Imagen 4</button>
	  <button type="button" class="insertar-imagen5" style="width: 100px; height: 50px; float: left;">Insertar Imagen 5</button><br><br><br><br>

      <label for="contenido">Contenido<span><em></em></span></label><br><br>
      <textarea class="textarea-contenido" rows="10" cols="100" name="contenido" ></textarea>
	  <br><br>

      <label for="short">Descripción breve<span><em></em></span></label><br><br>
      <textarea class="textarea-short" rows="5" cols="50" name="short" ></textarea>
	  <br><br>

      <label for="imagen">Imagen <span><em></em></span></label>
      <input class="thumbnail" type="text" name="imagen" class="input" /><br><br>

      <label for="destacado">Destacado <span><em></em></span></label>
      <input class="marcar-destacado" type="checkbox" name="destacado" /><br><br>

     <input class="boton" name="enviar" type="submit" value="Enviar" style="width: 100px; height: 50px;"/><br><br><br>
     <input class="boton" name="borrar" type="reset" value="Limpiar" />
    </p>
	<script>

//AJAX POST
/*
$('#enviar').click(function(){
  var datos = {
    titulonews: $("input[name='titulonews']").val(),
    tag: $("input[name='tag']").val(),
    fecha: $("input[name='fecha']").val(),
    contenido: $('.textarea-contenido').val(),
    short: $('.textarea-short').val(),
    imagen: $('.thumbnail').val()
  }

  $.ajax({
    type: 'POST',
    url: 'enviar.php',
    data: datos,
    success: function(respuesta){
      console.log(respuesta);
    }
  });
});
*/  
		$(document).ready(function(){
			$(".insertar-imagen1").click(function(){
				var file = $('.subir-archivo1')[0].files[0];
				$('.textarea-contenido').val($('.textarea-contenido').val() + '\n\n<center><img src="img/'+ file.name +'" width="65%"></center><br><br>');
			});

			$(".insertar-imagen2").click(function(){
				var file = $('.subir-archivo2')[0].files[0];
				$('.textarea-contenido').val($('.textarea-contenido').val() + '\n\n<center><img src="img/'+ file.name +'" width="65%"></center><br><br>');
			});

			$(".insertar-imagen3").click(function(){
				var file = $('.subir-archivo3')[0].files[0];
				$('.textarea-contenido').val($('.textarea-contenido').val() + '\n\n<center><img src="img/'+ file.name +'" width="65%"></center><br><br>');
			});

			$(".insertar-imagen4").click(function(){
				var file = $('.subir-archivo4')[0].files[0];
				$('.textarea-contenido').val($('.textarea-contenido').val() + '\n\n<center><img src="img/'+ file.name +'" width="65%"></center><br><br>');
			});

			$(".insertar-imagen5").click(function(){
				var file = $('.subir-archivo5')[0].files[0];
				$('.textarea-contenido').val($('.textarea-contenido').val() + '\n\n<center><img src="img/'+ file.name +'" width="65%"></center><br><br>');
			});

			$(".thumbnail").on('focus', function(){
				var file = $('.subir-archivo1')[0].files[0];
				$(".thumbnail").val(file.name);
			});

		});

	</script>
  </form>
</div>
</body></html>
<?php
}else{
	header('Location: index.php');
}
?>
