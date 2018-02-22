<?php
$user=$_POST['user'];
$password=$_POST['password'];

session_start();
$_SESSION['user']="";
	
$con = mysqli_connect("localhost", "root","","seccion");



if(mysqli_connect_errno($con)){
	echo "Erro na conetion: " . mysqli_connect_error();
}else{
                         /*tabla*/ 
	 $sql= "SELECT *  FROM user  WHERE user = '$user' AND password= '$password'";

	 $resultado = mysqli_query($con,$sql);

	 $usuario= mysqli_fetch_array($resultado);

         
	 if($usuario['password']== $password && $usuario['user']== $user){
	 	$_SESSION['user']=$user;
	 	header('Location: usuario.php');
	 }else{sleep(3);
?>	 	   
	 	   <script type="text/javascript">
	 	   	alert("usuario invalido");
	 	   </script>
<?php	 	 
        
	 	   header('Location: index.php');
	      }
}

?>