<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
	<!-- FIN BOOTSTRAP -->
	<link rel="stylesheet" href="index.css">
	<title>Carta</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="img/LogoPequeno.png" class="logo img-fluid"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" target="_blank" href="https://www.google.es/maps/place/Fernando+Wirtz+Su%C3%A1rez/@43.3554532,-8.4055386,18.65z/data=!4m5!3m4!1s0xd2e7c9aecfac647:0x603ea84bac75a96d!8m2!3d43.3557146!4d-8.4058278">Localización</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
			</div>
		</div>
	</nav>

	<div id="tituloCarta">
		¿Que le apetece hoy?
	</div>

	<div class="container">
		<div class="row container">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<span>Categorías</span>
				<ul>
					<li>Nuestras especialidades</li>
					<li>Tortillas</li>
					<li>Carnes</li>
					<li>Pescados</li>
					<li>100% Vegano</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button type="submit">
						<img src="./img/iconos/buscar.svg" />
					</button>
				</form>
				<div>
					<div class="indiceProductos">
						<span><b>Nuestras especialidades</b></span>
						<img class="icono" src="./img/iconos/flecha_derecha.svg" />
					</div>
					<ul class="listaProductos">
						<li>
							<div>
								<b>Churrasco de cerdo</b>
								<span></span>
							</div>
							<div class="precio"><span>8,50 €</span></div>
						</li>
						<li>
							<div>
								<b>Ración de guacamole casero con nachos</b>
								<span></span>
							</div>
							<div class="precio"><span>8,50 €</span></div>
						</li>
						<li>
							<div>
								<b>Ración de patatas con ali oli</b>
								<span></span>
							</div>
							<div class="precio"><span>5,50 €</span></div>
						</li>
						<li>
							<div>
								<b>Ración de patatas bravas</b>
								<span></span>
							</div>
							<div class="precio"><span>5,50 €</span></div>
						</li>
					</ul>
				</div>
				<div>
					<div class="indiceProductos">
						<span><b>Tortillas</b></span>
						<img class="icono" src="./img/iconos/flecha_derecha.svg" />
					</div>
					<ul class="listaProductos">
						<li>
							<div>
								<b>Tortilla de patata</b>
								<span></span>
							</div>
							<div class="precio"><span>7 €</span></div>
						</li>
						<li>
							<div>
								<b>Tortilla de patata con cebolla</b>
								<span></span>
							</div>
							<div class="precio"><span>8 €</span></div>
						</li>
						<li>
							<div>
								<b>Tortilla de patata con chorizo</b>
								<span></span>
							</div>
							<div class="precio"><span>8,5 €</span></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">.col-sm-6</div>
		</div>
	</div>
	<script src="./javascript/carta.js"></script>
</body>
</html>