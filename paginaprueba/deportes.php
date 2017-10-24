<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$cantidad = 0;
		echo $_REQUEST['nombre'];

		if (isset($_REQUEST['futbol'])) {
			# code...
			$cantidad = $cantidad + 1;
			
		}
		if (isset($_REQUEST['beisbol'])) {
			# code...
			$cantidad = $cantidad + 1;
			
		}
		if (isset($_REQUEST['basket'])) {
			# code...
			$cantidad = $cantidad + 1;
		}
			
			echo $cantidad;
	 ?>

</body>
</html>