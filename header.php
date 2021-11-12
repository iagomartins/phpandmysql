<!DOCTYPE html>
<html>
<head>
	<title>Corvo Cursos</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/estilo.css">

</head>

<body>
	<header>
		<div class="container">
			<a href="?pagina=home" class="logo-home"><img src="img/logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
				<a href="?pagina=cursos">Cursos</a>
				<a href="?pagina=alunos">Alunos</a>
				<a href="?pagina=matriculas">Matrículas</a>
				<?php if(isset($_SESSION['login'])) { ?>
					<span class="text-white">Olá, <?= $_SESSION['usuario']?></span>
					<a href="logout.php">Logout</a>
				<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">