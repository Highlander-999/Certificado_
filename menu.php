<?php
session_start();
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<!-- 
		Awesome Template
		http://www.templatemo.com/preview/templatemo_450_awesome
		-->
	<title>Certificado</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">


	<style>
		@-webkit-keyframes fadeInLeft {
			from {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0);
			}

			to {
				opacity: 1;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
		}

		@keyframes fadeInLeft {
			from {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0);
			}

			to {
				opacity: 1;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
		}

		.fadeInLeft {
			-webkit-animation-name: fadeInLeft;
			animation-name: fadeInLeft;
		}

		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}


		/* ------------ */

		@-webkit-keyframes fadeInUp {
			from {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0);
			}

			to {
				opacity: 1;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
		}

		@keyframes fadeInUp {
			from {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0);
			}

			to {
				opacity: 1;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
		}

		.fadeInUp {
			-webkit-animation-name: fadeInUp;
			animation-name: fadeInUp;
		}

		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		/* ------------ */

		@-webkit-keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		/* ------------ */

		@-webkit-keyframes fadeInDown {
			from {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}

			to {
				opacity: 1;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
		}

		@keyframes fadeInDown {
			from {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}

			to {
				opacity: 1;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
		}

		.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown;
		}

		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.dvbox {
			height: 300px;
			width: 300px;
			background-color: red;
			float: left;
		}

		#rowbox {
			padding: 10px;
			gap: 15px 15px;
		}

		.pcardtext {
			color: white;
			font-family: 'SUSE';
			font-size: 15px;

		}

		.navbar-header {
			padding-top: 15px;
			float: left;
		}

		.rowimgs {

			padding: 5px;
			width: fit-content;
			flex-wrap: nowrap;
			display: flex;
			gap: 15px;
			margin: 0 auto;

		}

		.colimg {
			width: 280px;
			background-color: #8b8b8b28;
			text-align: center;
			border-radius: 15px;
			transition: 0.3s ease-in-out;
		}

		.colimg:hover {
			transform: scale(1.1);
			margin-left: 50px;
			margin-right: 50px;
			background-color: #7d88a03a;
		}

		.cardtext {
			color: #fff;
			padding: 10px;

		}

		.divcard {
			background-color: rgba(255, 0, 0, 0);
			padding: 5px;
			margin-top: 50px;



		}

		h3 {
			margin-top: 5px;
			color: #c5d7ff;

		}

		img {
			height: 280px;
			width: 280px;
			border: thin solid #f6f6f65d;
			border-radius: 15px;
		}
	</style>


</head>

<body id="top">

	<nav class="navbar-default" style="border-top: #28a7e9 3px solid;">
		<div class="container-fluid" style="width: 100%;height: 70px;">

			<div class="navbar-header">
				<span class="navbar-brand animated fadeIn">Usuário: <?php echo $_SESSION['nome'] ?></span>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right animated fadeInDown">
					<li><a href="menu.php" style="color:#28a7e9">MENU</a></li>
					<li><a href="./menu/conselect.php">CONSULTA GERAL</a></li>
					<li><a href="./menu/turselect.php">TURMA</a></li>
					<li><a href="./menu/aluselect.php">ALUNO</a></li>
					<li><a href="./menu/ususelect.php">USUÁRIO</a></li>
					<li><a href="./menu/curselect.php">CURSO</a></li>
					<li><a href="./menu/insselect.php">INSTRUTOR</a></li>
					<li><a href="./menu/pesq2020.php">CERTIFICADO 2020</a></li>
					<li><a href="./menu/pesq2023.php">CERTIFICADO 2023</a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-- start home -->
	<section id="home" style="margin-right: 0px;">
		<div class="container" style="width: 100%;">
			<div class="row">
				<div class="col" style="padding-left: 250px;">
					<h1 class="animated fadeInLeft">Certificado
						<span>SENAC</span>
					</h1>

					<a data-scroll href="index.php" class="btn btn-default animated fadeInUp">VOLTAR AO LOGIN</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->


	<!-- start contact -->
	<section id="contact" class="animated fadeIn" >
		<div class="container" style="width: 100%;">
			<div class="row">
				<div class="col-md-12" >
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s" style="padding-bottom: 5px;">BEM-<span>VINDO!</span>
					</h2>
					<h4 style="text-align: center;font-weight: 200;">Conheça as páginas:</h4>
				</div>
			</div>
		</div>



		


		<div class="divcard">

			<div class="rowimgs">

				<div class="colimg">
					<img class="animated" src="./img/conselect.png" alt="">
					<div class="cardtext">
						<h3>Consulta Geral</h3>
						<p class="pcardtext">
							Na página Consulta Geral de alunos na escola, que consiste em uma busca abrangente
							por informações sobre os estudantes matriculados. Essa consulta pode ser realizada no
							banco de dados escolar, que armazena dados como nome completo, turma, curso,
							instrutor, período, entre outros.
						</p>
					</div>
				</div>

				<div class="colimg">
					<img src="./img/turma.png" alt="">
					<div class="cardtext">
						<h3>Turma</h3>
						<p class="pcardtext">Na página Turma você poderá ver e consultar turmas presente na instituição, além de alterar e excluir.
							Você poderá visualizar o nome do curso, datas, curso, horário, instrutor e carga horaria.
							E também, terá a opção de inclusão de turma.
						</p>
					</div>
				</div>

				<div class="colimg">
					<img src="./img/aluno.png" alt="">
					<div class="cardtext">
						<h3>Aluno</h3>
						<p class="pcardtext">Na página Aluno é possível visualizar nome, E-mail e contato.
							Também será possível fazer a exclusão ou alteração do aluno, além de ter a opção de incluir um aluno.
							E também poderá ser possível ver em que turma este aluno está
							cadastrado, na opção Turma
						</p>
					</div>
				</div>

				<div class="colimg">
					<img src="./img/usuario.png" alt="">
					<div class="cardtext">
						<h3>Usuário</h3>
						<p class="pcardtext">Na página Usuário será possível ver nome de todos os usuários, E-mail e se é um administrador ou não.
							Também é possível alterar ou excluir for preciso.
							Também terá a opção de incluir um usuário. </p>
					</div>
				</div>

				<div class="colimg">
					<img src="./img/curso.png" alt="">
					<div class="cardtext">
						<h3>Curso</h3>
						<p class="pcardtext">Na página Curso também terá a opção de alterar e excluir em todos os cursos que estão registrados. E também terá opção
							incluir um curso no sistema.
						</p>
					</div>
				</div>

				<div class="colimg">
					<img src="./img/instrutor.png" alt="">
					<div class="cardtext">
						<h3>Instrutor</h3>
						<p class="pcardtext">Na página Instrutor será mostrado todos instrutores
							registrados no sistema, com opções de excluir e alterar, além da opção de incluir um instrutor</p>
					</div>
				</div>

			</div>

		</div>
	


	</section>
	
	<footer id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
						Copyright &copy; 2084 Senac</p>
				</div>
			</div>
		</div>
	</footer>


</body>

</html>