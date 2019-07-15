<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro SCIII</title>
</head>

<body>
<div class="group">
  <form action="prueba2.php" method="POST">
  <h2><em>Formulario de Registro</em></h2>  
     
      <label for="nota">Nota <span><em>(requerido)</em></span></label>
      <input type="text" name="nota" class="form-input" required/>   
      
      <label for="seccion">Seccion <span><em>(requerido)</em></span></label>
      <input type="text" name="seccion" class="form-input" required/>         

      <label for="fecha">Fecha <span><em>(requerido)</em></span></label>
      <input type="text" name="fecha" class="form-input" required/>         

      <label for="contenido">Contenido <span><em>(requerido)</em></span></label>
      <input type="text" name="contenido" class="form-input" required/>         

      <label for="imagen">Imagen <span><em>(requerido)</em></span></label>
      <input type="text" name="imagen" class="form-input" />
     <center> <input class="form-btn" name="submit" type="submit" value="Suscribirse" /></center>
    </p>
  </form>
</div>
</body>
</html>