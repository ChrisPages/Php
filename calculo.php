<!DOCTYPE html>
<html>
<head>
	<title>Multiplicar</title>
</head>
<body >

<form method="_POST" >
Primer Numero <input type="text" name = "var1" value="">
Segundo Numero<input type="text" name = "var2" value="">
<input type="submit" value="Enviar"/>
</form>

<?php
$a=$_GET['var1'];
$b=$_GET['var2'];
$mult=$a*$b;	
$to="software.realize.101@gmail.com";
$subject="CHRISTIAN OSWALDO MARTINEZ PAGES";
$message="
			El primer numero es,$a;
			El segundo numero es,$b;
			El resultado es, $mult;
			El link del repositorio es: https://github.com/ChrisPages/Php
			El link de la pagina: http://alphadesign.esy.es/christianpages/calculo.php
			";

mail('christian_3601@hotmail.com',$subject,$message)

?>
	

</body>
</html>


