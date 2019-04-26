<?php  
include"header.php";
session_start();
//require_once "../controllers/keys.controller.php";

$new_str = $_SESSION['new_str'];
$string = $_SESSION['string'];
//var_dump($_GET); //para validación de qe los datos estan llegando por GET.
?>
<body>
	<div class="container">
		<div class="card"> 
			<h5 class="card-header">Mensaje Recibido</h5>
			<div class="card-body">
				
				<p class="card-text"><?php echo $string;  ?></p>
			</div>
		</div>
		<div class="card">
			<h5 class="card-header">Respuesta</h5>
			<div class="card-body">
<p class="card-text"><?php echo $new_str;  ?></p>
			</div> 
		</div>
	</div>

</body>
</html>
