<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>CINEFLIX</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="img/foto5.png">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="/css/style2.css">
		

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">CINEFLIX</h1>
							<small class="site-description">Os melhores filmes no precinho.</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="{{'/'}}">Home</a></li>
							<li class="menu-item"><a href="{{		'/solicitar-filme'}}">Filmes</a></li>
							<li class="menu-item"><a href="{{'/cadastro-filme'}}">Cadastrar filme</a></li>
							<li class="menu-item"><a href="{{'/gerenciar-filme'}}">Gerenciar filme</a></li>
							<li class="menu-item"><a href="{{'/cadastro-funcionario'}}">Cadastrar funcionário</a></li>
							<li class="menu-item"><a href="{{'/gerenciar-funcionario'}}">Gerenciar funcionário</a></li>
							
						</ul> 

						
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
										<li><a href="./filmes_pag/filme1.html"><img src="img/img2/filme1.jpg" alt="Slide 1"></a></li>
										<li><a href="./filmes_pag/filme2.html"><img src="img/img2/filme2.jpg" alt="Slide 2"></a></li>
										<li><a href="./filmes_pag/filme3.html"><img src="/img/img2/filme3.jpg" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="filmes_pag/filme4.html"><img src="img/img2/filme5.jpg" alt="Movie 1" width="250"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="filmes_pag/filme5.html"><img src="img/img2/filme6.jpg" alt="Movie 2"></a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="filmes_pag/filme6.html"><img src="img/img2/filme7.jpg" alt="Movie 3"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="filmes_pag/filme7.html"><img src="img/img2/filme8.jpeg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="filmes_pag/filme8.html"><img src="img/img2/filme9.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="filmes_pag/filme9.html"><img src="img/img2/filme10.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div> <!-- .row -->
						
						
			</main>
			

					<div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>