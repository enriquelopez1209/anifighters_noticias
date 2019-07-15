<?php
include ('../conexion.php');
$conexion = new MySQLi($host, $usuario, $clave, $base);
$tabla="news";
//datos de la titulonews que vienen por post.
$titulonews = $_POST['titulonews'];
$tag = $_POST['tag'];
$fecha = $_POST['fecha'];
$contenido = $_POST['contenido'];
$short = $_POST['short'];
$imagen = $_POST['imagen'];
if(isset($_POST['destacado'])){
	$destacado = 1;
}
else{
	$destacado = 0;
}

$insertar = "INSERT INTO news(id, titulonews, tag, fecha, contenido, short, imagen, destacado) values('0','$titulonews', '$tag', '$fecha', '$contenido', '$short', '$imagen', '$destacado')";

mysqli_select_db($conexion, $base);

$retry_value = $conexion->query($insertar);
if($retry_value){
	echo "Registro exitoso<br>";
}
else{
	echo "Error al enviar registro<br>";
	echo mysqli_error($conexion);
}
mysqli_close($conexion);

//Subir archivos.

$target_folder = "../img/";
$target_path1 = $target_folder . basename( $_FILES['uploadedfile1']['name']);
$target_path2 = $target_folder . basename( $_FILES['uploadedfile2']['name']);
$target_path3 = $target_folder . basename( $_FILES['uploadedfile3']['name']);
$target_path4 = $target_folder . basename( $_FILES['uploadedfile4']['name']);
$target_path5 = $target_folder . basename( $_FILES['uploadedfile5']['name']);

if(move_uploaded_file($_FILES['uploadedfile1']['tmp_name'], $target_path1)) { echo "El archivo ". basename( $_FILES['uploadedfile1']['name']). " ha sido subido<br>";
}
else{
echo "Ha ocurrido un error, trate de nuevo!<br>";
die("Upload failed with error code " . $_FILES['uploadedfile1']['error']);
}

if(move_uploaded_file($_FILES['uploadedfile2']['tmp_name'], $target_path2)) { echo "El archivo ". basename( $_FILES['uploadedfile2']['name']). " ha sido subido<br>";
}
else{
echo "Ha ocurrido un error, trate de nuevo!<br>";
die("Upload failed with error code " . $_FILES['uploadedfile2']['error']);
}

if(move_uploaded_file($_FILES['uploadedfile3']['tmp_name'], $target_path3)) { echo "El archivo ". basename( $_FILES['uploadedfile3']['name']). " ha sido subido<br>";
}
else{
echo "Ha ocurrido un error, trate de nuevo!<br>";
die("Upload failed with error code " . $_FILES['uploadedfile3']['error']);
}

if(move_uploaded_file($_FILES['uploadedfile4']['tmp_name'], $target_path4)) { echo "El archivo ". basename( $_FILES['uploadedfile4']['name']). " ha sido subido<br>";
}
else{
echo "Ha ocurrido un error, trate de nuevo!<br>";
die("Upload failed with error code " . $_FILES['uploadedfile4']['error']);
}

if(move_uploaded_file($_FILES['uploadedfile5']['tmp_name'], $target_path5)) { echo "El archivo ". basename( $_FILES['uploadedfile5']['name']). " ha sido subido<br>";
}
else{
echo "Ha ocurrido un error, trate de nuevo!<br>";
die("Upload failed with error code " . $_FILES['uploadedfile5']['error']);
}


?>
