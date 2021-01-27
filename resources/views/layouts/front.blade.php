<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/owl.transitions.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/lightbox.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/preloader.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/image.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/icon.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/estilo.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">

	</head>
	<body id="top">
	

        <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body"><img src="img/logo.png" height="40" width="164" alt=""></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="#top">Inicio</a></li>
                        <li><a href="#features">Faculdade</a></li>
                        <li><a href="#portfolio">Cursos</a></li>
                        <li><a href="#team">Departamentos</a></li>
                        <li><a href="#pricing-table">Serviços</a></li>
                        <li><a href="#blog">Galeria</a></li>
                        <li><a href="#">Eventos</a></li>
						@auth 
						<li><a href="/dashboard">Meus eventos</a></li>
						<li>
							<form action="/logout" method="POST">
								@csrf 
								<a href="/logout" class="nav-link" 
									onclick="event.preventDefault();
									this.closest('form').submit();">
									Sair
								</a>
							</form>
						</li>
						@endauth
						@guest 
						<li><a href="/login">Iniciar Sessao</a></li>
						<li><a href="/eventos/create">Criar evento</a></li>
						@endguest
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>


	<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1 style="text-align:center;">Sistema de Informação de Eventos</h1>
							<h2 style="text-align:center;">Atualmente o uso de um sistema de informação vem crescendo muito nas empresas <br> ou qualquer outro tipo de entidade, 
							isso se deve pelo facto de haver inúmeras informações<br> a serem guardadas e manipuladas e a dificuldade de isto ser realizado manualmente. </h2>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		
		<div class="container">
			@if(session('msg'))
				<p class="msg">{{ session('msg') }}</p>
			@endif 
			@yield('content')
		</div>

       
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<a href="#"><img src="img/logo.png" alt=""></a>
							<p>All rights reserved © 2021</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>


		<!-- load Js -->
		<script src="{{ asset ('js/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>
		<script src="{{ asset ('js/waypoints.min.js') }}"></script>
		<script src="{{ asset ('js/lightbox.js') }}"></script>
		<script src="{{ asset ('js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset ('js/html5lightbox.js') }}"></script>
		<script src="{{ asset ('js/jquery.mixitup.js') }}"></script>
		<script src="{{ asset ('js/wow.min.js') }}"></script>
		<script src="{{ asset ('js/jquery.scrollUp.js') }}"></script>
		<script src="{{ asset ('js/jquery.sticky.js') }}"></script>
		<script src="{{ asset ('js/jquery.nav.js') }}"></script>
		<script src="{{ asset ('js/main.js') }}"></script>
	</body>
</html>