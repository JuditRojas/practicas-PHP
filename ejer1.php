<!DOCTYPE html>
<html>
<head>
	<title>Ejerecicio_1</title>
</head>
<style type="text/css">
.btn{
	width: 150px;
	background-color: #009000;
	color:white;
	font-weight: 14pt;
	margin-top: 15px;
	padding: 10px 20px;
}
table{
	font-weight: bold;
	border-spacing: 0px;
	border:solid 2px;
	padding: 5px;
}
</style>
<body>
<form method="post">
	<table width="50%" align="center">
		<tr><td colspan="2">Ejercicio I: Nombre compuesto</td></tr>
		<tr><td><label for="name">Nombre: </label><input type="text" name="name" size="20" placeholder="Nombre" autofocus></td></tr>
		<tr><td><label for="surname">Apellido: </label><input type="text" name="surname" size="12" placeholder="Primer apellido"></td><td><label for="2apellido">Segundo Apellido: </label><input type="text" name="surname2" placeholder="Segundo Apellido"></td></tr>
		<tr><td><input type="submit" name="enviar" class="btn"></td></tr>
	</table>
</form>
<?php
			$name="";
			$surname="";
			$surname2="";
			$error="";
			$nombre="";
			if ($_SERVER["REQUEST_METHOD"]=="POST"){
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$surname2 = $_POST['surname2'];
			if($name==''&&$surname==''&&$surname2==''){
				$error="Oye está vacío todo!";}
			else {
				$nombre=$name." ".$surname." ".$surname2;
			}
			}
		?>
		<p><?php echo $error;?></p>
		<p><?php echo $nombre;?></p>
</body>
</html>