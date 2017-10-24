<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php 
			
			if ($_REQUEST['radio1'] == 'noEstudio') {
				# code...
				echo $_REQUEST['nombre']." No estudio";
			}
			elseif ($_REQUEST['radio1'] == 'primaria') {
				# code...
				echo $_REQUEST['nombre']." Estudio hasta nivel primario";
			}else
				echo $_REQUEST['nombre']." Estudio hasta nivel secundaria";

		 ?>

</body>
</html>