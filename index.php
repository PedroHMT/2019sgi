<?php
	header("Content-type: text/html; charset=utf-8");
	include("config/conexao.php");
	include("config/sql.php");
	$query = mysqli_query($conexao, $sql_03); 
	$query2 = mysqli_query($conexao, $sql_04);
?>	

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Segurança da Informação</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">

			<!--
			JAVASCRIPT
			-->

			<script type="text/javascript" src="js/slider.js"></script>
		</head>
		<body>	
			<header id="header" id="home">
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">Sobre o Curso</a></li>
								<li><a href="perfil.php">Perfil</a></li>
								<li><a href="grade.php">Grade Curricular</a></li>
								<li><a href="universidades.php">Universidades</a></li>
								<li class="menu=has-children"><a href="mercado.php">Mercado de Trabalho</a>
									<ul>
										<li><a href="piso.php">Piso Salarial</a></li>
									</ul>
								</li>
								<li>
					  	<script async src="https://cse.google.com/cse.js?cx=015169626672713698837:1efxoaqxtdi"></script>
						<div class="gcse-search"></div>
					</li>
							</ul>
						<!--
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
							<li><a href="blog-home.php">Blog Home</a></li>
							<li><a href="blog-single.php">Blog Single</a></li>
							</ul>
						</li>	-->
						
					</nav><!-- #nav-menu-container -->	    		
					</div>
				</div>
			</header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="carrosel">


					</div>
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-centralizacao banner-content col-lg-12 pb-40">
						<center>
							<h1 class="banner-h1">
		
								SEGURANÇA DA INFORMAÇÃO
								
							</h1>
							<p class="pt-10 pb-10">
								Saiba tudo sobre o curso e sua importância no mundo virtual.
							</p>
							</center>	
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Proteção na Web</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Saiba tudo sobre a profissão que guarda seus dados essenciais virtualmente.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Segurança da Informação</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Saiba tudo sobre esse curso.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Aprenda todos os conceitos</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Conheça novas linguagens e metodos para garantir a defesa de seus clientes.
									</p>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			<!-- Start popular-course Area -->
			<section class="remove-padding popular-course-area section-gap">
				<div class="container">			
					<div class="section-top-border">
						<h1 class="mb-30">Sobre o Curso</h1>
						<div class="row">
							<div class="col-md-4">
								<img src="img/blog/post1.jpg" alt="" class="img-fluid">
							</div>
							<div class="col-md-8 mt-sm-10 left-align-p paragrafo_estilizado">
										<?php
											while($exibir = mysqli_fetch_array($query))
											{
												echo substr($exibir[2], 0, 419); 
											
										?>
									[...]<br><br><center>
									<a href='blog-single.php?notice="<?php echo $exibir[0]; }?>"' class='genric-btn info'>CONTINUE LENDO</a></center>
							</div>
						</div>
					</div>		
					<div class="row">						
						<div class="border-top menu-content pb-35 col-lg-12">
							<div class="title text-center">
								<h1 class="mb-10">Dicas para segurança</h1>
								<p>Matenha o seu sistema protegido !</p>
							</div>
						</div>						
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/imgs/p1.png" alt="">
									</div>								
								</div>
								<div class="details">
										<h4>
											Analise
										</h4>
									<p>
										Analise o sistema, procure por falhas e brechas na segurança
										para uma possível tentativa de invasão.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/imgs/p2.png" alt="">
									</div>
								</div>
								<div class="details">
										<h4>
											Desenvolva
										</h4>
									<p>
										Desenvolva novos sistemas de segurança para manter seus dados seguros.									
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/imgs/p3.png" alt="">
									</div>						
								</div>
								<div class="details">
										<h4>
											Crie Backup's
										</h4>
									<p>
										Realize backup's semanalmente ou mensalmente para garantir ter uma cópia em caso de invasões									
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/imgs/p4.png" alt="">
									</div>							
								</div>
								<div class="details">
										<h4>
											Atualize Senhas
										</h4>
									<p>
										Atualize semanalmente as senhas do seu sistema.	
									</p>
								</div>
							</div>							
						</div>
					</div>
				<div class="section-top-border text-right">
						<h1 class="mb-30">Facebook descobre falha de segurança que afeta 50 milhões de contas</h1>
						<div class="row">
							<div class="col-md-8 mt-sm-10 left-align-p paragrafo_estilizado">
										<?php
											while($exibe = mysqli_fetch_array($query2))
											{
												echo substr($exibe[2], 0, 419); 
											
										?>
									[...]<br><br><center>
									<a href='blog-single.php?notice="<?php echo $exibe[0]; }?>"' class='genric-btn info'>CONTINUE LENDO</a></center>
							</div>
							<div class="col-md-4">
								<img src="img/blog/post2.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">Deseja saber mais sobre o assunto ? Entre em contato !</h1>
							<div class="padding-top">
								<a class="primary-btn wh" href="#">Enviar E-mail</a>
							</div>
						</div>					
					</div>
				</div>	
			</section>
			<!-- End cta-one Area -->
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Links Uteis</h4>
								<ul>
									<li><a href="about.php">Sobre o Curso</a></li>
									<li><a href="mercado.php">Mercado de Trabalho</a></li>
									<li><a href="grade.php">Grade Curricular</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Universidades</h4>
								<ul>
									<li><a href="https://www.uninove.br/graduacao/tecnologia-em-seguranca-da-informacao/o-que-e/">UNINOVE</a></li>
									<li><a href="https://www.unip.br/presencial/ensino/graduacao/tecnologicos/info_seguranca_info.aspx">UNIP</a></li>
									<li><a href="https://www.vestibularfatec.com.br/unidades-cursos/escola.asp?c=140">FATEC Americana</a></li>
									<li><a href="https://www.go.senac.br/faculdade/site/cursos/seguranca_da_informacao">SENAC Goiás</a></li>
								</ul>								
							</div>
						</div>																
						<div class="d-flex justify-content-center col-sm-3 col-md-4 pb-4 pt-xl-5">
							<div class="single-footer-widget">
								<img src="img/logo.png">
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 pt-xl-5">
							<div class="single-footer-widget">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>							
							</div>
						</div>													
					</div>
					<div class="footer-bottom row align-items-center justify-content-center">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>