<!DOCTYPE html>
<html>
<head>
	<title>PEDIDOS.</title>
</head>
<body>

	<?php  

		$archivo = fopen("C:\Users\VMSG29\Desktop\pedidos.txt", "a") or die("Problemas al crear o abrir el archivo");

		fputs($archivo, "NOMBRE DEL CLIENTE: ");
		fputs($archivo, $_REQUEST['txtNombre']);
		fputs($archivo, "\r\n");

		fputs($archivo, "DIRECCION: ");
		fputs($archivo, $_REQUEST['txtDireccion']);
		fputs($archivo, "\r\n");

		if (isset($_REQUEST['pp'])) {
			# code...
			fputs($archivo, "PIZZA: PEPERONNI ");
			fputs($archivo, $_REQUEST['txtCpp']);
			fputs($archivo, "\r\n");

		}

		if (isset($_REQUEST['hw'])) {
			# code...
			fputs($archivo, "PIZZA: HAWAIANA ");
			fputs($archivo, $_REQUEST['txtChw']);
			fputs($archivo, "\r\n");

		}

		if (isset($_REQUEST['mx'])) {
			# code...
			fputs($archivo, "PIZZA: MEXICANA ");
			fputs($archivo, $_REQUEST['txtCmx']);
			fputs($archivo, "\r\n");

		}

		fputs($archivo, "--------------------------------------------------------------------");
		fputs($archivo, "\r\n");
		echo "Pedido Guardado Con Exito.";
		fclose($archivo);



	?>

</body>
</html>