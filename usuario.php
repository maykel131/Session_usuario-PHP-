<?php 
 session_start();

 if($_SESSION['user']!=""){
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scalet=1">

	<link rel="stylesheet" type="" href="estilos.css">
</head>

  <body>
    <header>
    	<h1>USTE HA ACCEDIDO A LA PAGINA DE USUARIO</h1>
    	<a href="cerrar_session.php">cerrar session</a>
    </header>

	
  </body>
</html>
<?php
  }
?>




