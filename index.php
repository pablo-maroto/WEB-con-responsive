<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Proyecto Somos Games</title>
		<!--css de boostrap-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<!--css propio-->
		<link href="estilos.css" rel="stylesheet">
		<!--tipodgrafia google-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--iconos css-->
		<link rel= "stylesheet" type="text/css" href="iconos.css">
		<link rel= "stylesheet" type="text/svg" href="aseprite.svg">
		
	</head>
<body>
	<header>

		<nav id= "btn_principal">
			<ul>
				<li><a href="#Home">HOME</a></li>
				<li><a href="#Important">IMPORTANT</a></li>
				<li><a href="#News">NEWS</a></li>
			</ul>
		</nav>
		<div id="marca">
			<img src="imagenes/logo mi web1.png" alt="logo" class="img_ajuste">
		</div>
		
		<nav id= "btn_secundaria">
			<ul>
				<li><a href="#Retro_games">RETRO</a></li>
				<li><a href="#Top_Ten">TOP-TEN</a></li>
			</ul>
		</nav>
		<nav id="btn_menuResponsive"> 
			<a href="#" onclick="menuHamburguesa()"><span class="box1">
				<span aria-hidden="true" class="icon-menu"></span>
				
			</span></a>
		</nav>
	</header>
	<section id="Home">
		<div id="TituloHome1">
			<h1>HOME</h1>
		</div>
		<div id="Home1"></div>
		<div id="Home2">
			<p>¿Quieres saber cuáles son los próximos lanzamientos de juegos para PC en 2021? Aquí encontrarás el calendario con todas las fechas de lanzamiento, actualizadas día a día para que puedas conocer que juegos de Ordenador ya han salido o saldrán a la venta en 2021.
			</p>
		</div>
		<div id="Home3">
			<p>Star Citizen es un videojuego de simulación espacial para PC, aunque se desconoce si saldrá en PS4 o Xbox. El juego está siendo desarrollado por el estudio Cloud Imperium Games con su diseñador: Chris Roberts a la cabeza, conocido por ser el creador de los exitosos Wing Commander y Freelancer.</p>
		</div>
	</section>
	<section id="Important">
		<nav id="btn_perfil">
			<a href="#" onclick="botonperfil()"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Aseprite</title><path d="M4.006 0v1.6h15.988V0zm15.988 1.6v1.6h1.6V1.6zm1.6 1.6v14.4h-1.6v1.6H4.006v-1.6h-1.6V3.2H.809v17.6h1.599v1.6h1.599V24h15.988v-1.6h1.6v-1.6h1.598V3.2zm-19.187 0h1.599V1.6h-1.6zm4.796 3.2v6.4h1.6V6.4zm7.995 0v6.4h1.599V6.4z"/></svg>
			</a>
		</nav>
		<div id="TituloImportant">
			<h2>IMPORTANT</h2>
		</div>
		<div id="Important1">
			<?php echo 
				 "MI"<br>;
				 "SEGUNDO"<br>;
				 "PHP"<br>;
			?>
		</div>
		<div id="Important2">
		</div>
	</section>
	<section id="News">
		<div id="TituloNews">
			<h3>NEWS</h3>
		<dv class="container-fluid">
			<div class="row" id="mod_news">
			<nav class="col-lg-4 col-sm-6" id="new1">
				<ul class="nav flex-column nav-tabs">
					<li class="nav-item"><a href="#News" class="nav-link text-white">News to E3</a><li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Every news</a>
						<ul class="dropdown-menu">
						  <li><a class="dropdown-item" href="#">Yesterday's news</a></li>
						  <li><a class="dropdown-item" href="#">Today news</a></li>
						  <li><a class="dropdown-item" href="#">Tomorrow's news</a></li>
						  <li><hr class="dropdown-divider"></li>
						  <li><a class="dropdown-item" href="#">Retro news</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="#News" class="nav-link text-white">Featured games</a></li>
					<li class="nav-item"><a href="#News" class="nav-link txt-white">Live news</a></li>
				</ul>
			</nav>
			<div class="col-lg-4 col-sm-6" id="new2">
				<!-- Inicio Card Boostrap -->
				<div class="card" style="width: 18rem;">
					<img src="imagenes/gene.jpg" class="card-img-top" alt="Player-1">
					<div class="card-body color-naranja">
					  <h5 class="card-title txt-white">Hardware News</h5>
					  <p class="card-text">Nvidia admite enfrentarse a problemas en su adquisición de ARM: podría demorarse más de 18 meses.</p>
					  <p><a href="News" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Click here</a></p>
					</div>
				  </div>
				<!-- Fin Card Boostrap -->
				<!--Inicio del modal-->
				  	<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">News NVIDIA</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<img src="imagenes/nvidia.jpg" class="img_ajuste">
									<p>Hace un año, la compañía Nvidia consiguió cerrar un acuerdo de adquisición histórico con SoftBank para hacerse con ARM. La compañía diseñadora de chips británica pasaría a formar parte de Nvidia como una de sus divisiones, en un astronómico acuerdo de 40 mil millones de dólares. Aunque SoftBank seguiría manteniendo su sede y podría seguir operando con las distintas compañías del mercado con la libertad con la que lo hace en la actualidad, el acuerdo hizo saltar muchas alarmas.</p>
							
								</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							</div>
						</div>
						</div>
					</div>
				<!--Fin del modal--> 
			</div>
			<div class="col-lg-4 col-sm-12" id="new3">
				<form>
					<div class="row g-3">
						<input type="text" placeholder="Nombre" required maxlength="20" class="form-control">
						<input type="text" placeholder="Apellido"class="form-control">
						<input type="email" placeholder="Correo Electrónico"class="form-control">
						<input type="date" placeholder="Fecha"class="form-control">
						<textarea placeholder="Mensaje" rows="5"class="form-control"></textarea>
						<input type="submit" class="btn-secondary">
					</div>
				</form>
			</div>
		</div>
		</dv>
		<div id="N1"></div>
		<div id="N2"></div>
		<div id="N3"></div>
		<div id="N4"></div>
	</section>
	<section id="Retro_games">
		<div id = "TituloRetro">
			<h4>RETRO GAMES</h4>
		<div id="R1">
			<div id="R1_img">
				<div id="R1_img">
					<a href="#R1" onmouseover ="retroOver('R1_txt')" onmouseout="retroOut('R1_txt')"><img src="imagenes/goal.jpg" class="img_ajuste"></a>
				</div>
			</div>
			<div id="R1_txt">
				<h6>GOAL</h6>
			</div>
		</div>
		<div id="R2">
			<div id="R2_img">
				<a href="#R2"  onmouseover ="retroOver('R2_txt')" onmouseout="retroOut('R2_txt')"><img src="imagenes/doom.jpg" class="img_ajuste"></a>
			</div>
			<div id="R2_txt">
				<h6>DOOM</h6>
			</div>
		</div>
	</section>
	<section id="Top_Ten">
		<div id="TituloTopTen">
			<h1>Top Game</h1>
			<!-- Inicio Carrusel Boostrap -->
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="imagenes/page1.jpg" class="d-block w-100" alt="Page1">
				  </div>
				  <div class="carousel-item">
					<img src="imagenes/page2.jpg" class="d-block w-100" alt="Page2">
				  </div>
				  <div class="carousel-item" >
					<video src="imagenes/SomosGames.mp4" class="img_ajustes" controls autoplay></video>
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Next</span>
				</button>
			  </div>
			  <!-- Fin Carrusel Boostrap -->
		</section>
	<footer>
		
		<div id="Contact">
			  	<div>
					<p>Contact</p>
				</div>

				<nav class="nav justify-content-center">
					<button type="button" class="btn btn-primary ">Facebook</button>
					<button type="button" class="btn txt-green">Whatsapp</button>
				</nav>
			</div>
		</div>
	</footer>
	<!--js de boostrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<!--js propio-->
	<script type="text/javascript" src="js/clase8js.js"></script>
</body>
</html>