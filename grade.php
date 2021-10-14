<?php include("config/conexao.php"); include("config/sql.php"); $query = mysqli_query($conexao, $sql_03); 
$query2 = mysqli_query($conexao, $sql_05);
$query3 = mysqli_query($conexao, $sql_01);?>	
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
		<title>Segurança da Informação - Grade Curricular</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
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
			<section class="banner-areas banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Sobre o Curso				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.php"> Sobre o Curso</a>
								<span class="lnr lnr-arrow-right"></span>
								<a href="grade.php"> Grade Curricular</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
						<?php 
							while($exibir_blog = mysqli_fetch_array($query)){
								?>
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="img/grade.jpeg" alt="">
									</div>									
								</div>
								<div class="col-lg-12 col-md-9">
									<h3 class="center-text mt-20 mb-20">Grade Curricular: Segurança da Informação</h3>
									<table class="grade_table">
										<tr>
											<td class="grade_tr">Disciplinas</td>
											<td class="grade_tr">Carga Horária</td>
										</tr>
										<?php while($exibe_grade = mysqli_fetch_array($query2)){?>
										<tr>
											<td class="grade_tr1"><?php echo $exibe_grade[1]?></td>
											<td class="grade_tr1"><?php echo $exibe_grade[2]; }?></td>
										</tr>
									</table>
								</div>
							</div><?php } ?>
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">	
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Notícias Populares</h4>
									<div class="popular-post-list">
									<?php while($exibirnot = mysqli_fetch_array($query3)){?>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/<?php echo $exibirnot[7]?>" alt="">
											</div>
											<div class="details">
												<a href="blog-single.php?notice=<?php echo $exibirnot[0]?>"><h6><?php echo substr($exibirnot[1], 0, 18); echo ".."?></h6></a>
												<p><?php echo date('d/m/Y', strtotime($exibirnot[3]))?>, <?php echo	date('H:i', strtotime($exibirnot[3]))?></p>
											</div>
										</div>
									<?php } ?>
																								
									</div>
								</div>															
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
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