<!DOCTYPE html>
<html>
<head>
	<title>RECIBE DATOS</title>
</head>
<body>	

	<?php 
		if ($_REQUEST['edad'] >= 18) {
			echo $_REQUEST['nombre'];
			echo " Es mayor de edad"; 		
		 } 
		
	?>

</body>
</html>