<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>STEM para Minas</title>
	    <base href="http://localhost/stem_para_minas_mvc/"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

	    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	    <script src="https://kit.fontawesome.com/c5484a4ef6.js" crossorigin="anonymous"></script>
	    
	    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	    <script src="assets/javascript/script.js"></script>
	    <link rel="stylesheet" href="style.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	    <script src="https://kit.fontawesome.com/c5484a4ef6.js" crossorigin="anonymous"></script>
	    <script src="javascript.js"></script>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>

		<?php 
		if (isset($_SESSION["usuario"])){
			include "view/website/header.php"; 
		 ?>
		 <div class="row">
		 	<div class="col-sm-2">
		 		<div class="sidenav">

		 			<img src="assets/images/vitoria.jpg" style="width: 100%">
		 			<h3>Vitoria Ventura</h3>
				  <a href="usuario/perfil">Meu Perfil</a>
				  <a href="bootcamp/listar">Bootcamps</a>
				  <a href="networking/listar">Networking</a>
				  <a href="mentoria/form">Mentoria</a>
				  <a href="usuario/oportunidades">Minhas Oportunidades</a>
				  <a href="#">Cronograma</a>
				</div>
		 	</div>
		 	<div class="col-sm-10">
		 		<?php include "view/website/content.php"; ?>
		 	</div>
		 </div>
		 <?php 
		 include "view/website/footer.php"; 
		}
		else{
			include "view/website/header.php"; 
			include "view/website/content.php";
            include "view/website/footer.php"; 
		}
		?>
	</body>
</html>