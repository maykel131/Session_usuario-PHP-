<?php
require("isLogin.php");
 
 if($estado){
    header("Location:usuario.php");

 }else{
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scalet=1">

    <link rel="stylesheet" type="" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="css/estilos.css">
</head>

<body>
    <div class="container">
    	<div class="start_template" align="center">
    	 <h1>Bienvenido a mi web</h1>
    	 <p class="lead">Start Session</p>
    	 <form class="form" role="form" method="post" action="acceder.php" >
    	 	<div class="form-group">
    	 		<label>Ingresa Usuario</label>
    	 		<input class="form-control" text-align="center" type="text" name="user">
    	 	</div>
    	 	<div class="form-group">
    	 		<label>Ingresa Pasword</label>
    	 		<input class="form-control" type="password" name="password">	
    	 	</div>
    	 	<div>
    	 		<button type="submit"  class="btn btn-primary" >Ingresar</button>
    	 	</div>
    	 </form>
    	</div>
    </div>


	<script src="js/jquery.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>
<?php 
}
?>



