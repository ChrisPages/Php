<!DOCTYPE html>
<html>
<head>
	<title>Multiplicar</title>
</head>
<body >

<form method="_POST" id="Enjoy" >
Primer Numero <input type="text" name = "var1" value="">
Segundo Numero<input type="text" name = "var2" value="">
<input type="submit" value="Enviar"/>
</form>

<?php
$a=$_GET['var1'];
$b=$_GET['var2'];
$mult=$a*$b;	
$to="christian_3601@hotmail.com";
$subject="Resultados";
$message=$mult;


mail('christian_3601@hotmail.com', $subject,$message);

?>
	

</body>
</html>

