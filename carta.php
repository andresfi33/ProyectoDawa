<!DOCTYPE html>
<html lang="es">

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
	<link rel="icon" type="image/png" href="img/iconoRestaurante.png">
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="img/iconoRestaurante.png" class="logo img-fluid"></a>
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
			</div>
		</div>
	</nav>

	<div id="tituloCarta" class="colorPrincipal">
		¿Que le apetece hoy?
	</div>

	<div class="container">
		<div class="row container principal">
			<div class="col-xs-12 col-sm-6 col-md-3 indice">
				<span class="colorPrincipal">Categorías</span>
				<ul class="listaCarta">
					<li><a href="#nuestrasEspecialidades" onclick="abrirIndice('#nuestrasEspecialidades')">Nuestras Especialidades</a></li>
					<li><a href="#tortillas" onclick="abrirIndice('#tortillas')">Tortillas</a></li>
					<li><a href="#pescados" onclick="abrirIndice('#pescados')">Pescados</a></li>
					<li><a href="#carnes" onclick="abrirIndice('#carnes')">Carnes</a></li>
					<li><a href="#vegano" onclick="abrirIndice('#vegano')">100% Vegano</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-5">
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button type="submit">
						<img src="./img/iconos/buscar.svg" />
					</button>
				</form>
				<div>
					<div class="indiceProductos" id="nuestrasEspecialidades">
						<span><b>Nuestras especialidades</b></span>
						<img class="icono" src="./img/iconos/flecha_derecha.svg" />
					</div>
					<ul class="listaProductos listaCarta">
						<li>
							<div>
								<b>Churrasco de cerdo</b>
							</div>
							<div class="precio"><span>10,50€</span></div>
						</li>
						<li>
							<div>
								<b>Chorizo criollo</b>
							</div>
							<div class="precio"><span>8,50€</span></div>
						</li>
						<li>
							<div>
								<b>Ración de guacamole casero con nachos</b>
							</div>
							<div class="precio"><span>8,50€</span></div>
						</li>
						<li>
							<div>
								<b>Ración de patatas con ali oli</b>
							</div>
							<div class="precio"><span>5,50€</span></div>
						</li>
						<li>
							<div>
								<b>Ración de patatas bravas</b>
							</div>
							<div class="precio"><span>5,50€</span></div>
						</li>
						<li>
							<div>
								<b>Pollo a la pepitoria</b>
							</div>
							<div class="precio"><span>11,50€</span></div>
						</li>
						<li>
							<div>
								<b>Pato a la pekinesa</b>
							</div>
							<div class="precio"><span>12,50€</span></div>
						</li>
					</ul>
				</div>
				<div>
					<div class="indiceProductos" id="tortillas">
						<span><b>Tortillas</b></span>
						<img class="icono" src="./img/iconos/flecha_derecha.svg" />
					</div>
					<ul class="listaProductos listaCarta">
						<li>
							<div>
								<b>Tortilla de patata</b>
								<span></span>
							</div>
							<div class="precio"><span>7€</span></div>
						</li>
						<li>
							<div>
								<b>Tortilla de patata con cebolla</b>
								<span></span>
							</div>
							<div class="precio"><span>8€</span></div>
						</li>
						<li>
							<div>
								<b>Tortilla de patata con chorizo</b>
								<span></span>
							</div>
							<div class="precio"><span>8,50€</span></div>
						</li>
						<li>
							<div>
								<b>Tortilla de patata con espárragos</b>
								<span></span>
							</div>
							<div class="precio"><span>8,75€</span></div>
						</li>
						<li>
							<div>
								<b>Tortilla de patata con huevos ecológicos</b>
								<span></span>
							</div>
							<div class="precio"><span>12,50€</span></div>
						</li>
					</ul>
				</div>
				<div>
					<div class="indiceProductos" id="pescados">
						<span><b>Pescados</b></span>
						<img class="icono" src="./img/iconos/flecha_derecha.svg" />
					</div>
					<ul class="listaProductos listaCarta">
						<li>
							<div>
								<b>Salmón ahumado</b>
							</div>
							<div class="precio"><span>9'95€</span></div>
						</li>
						<li>
							<div>
								<b>Merluza</b>
							</div>
							<div class="precio"><span>7€</span></div>
						</li>
						<li>
							<div>
								<b>Pez espada</b>
							</div>
							<div class="precio"><span>18,50€</span></div>
						</li>
						<li>
							<div>
								<b>Atún</b>
							</div>
							<div class="precio"><span>6'95€</span></div>
						</li>
						<li>
							<div>
								<b>Cocochas de bacalao al pil pil</b>
							</div>
							<div class="precio"><span>11,50€</span></div>
						</li>
					</ul>
				</div>
				<div>
					<div class="indiceProductos" id="carnes">
						<span><b>Carnes</b></span>
						<img class="icono" src="./img/iconos/flecha_derecha.svg" />
					</div>
					<ul class="listaProductos listaCarta">
						<li>
							<div>
								<b>Solomillo de ternera (250g)</b>
							</div>
							<div class="precio"><span>23'50€</span></div>
						</li>
						<li>
							<div>
								<b>Entrecot</b>
							</div>
							<div class="precio"><span>24'50€</span></div>
						</li>
						<li>
							<div>
								<b>Hamburguesa de carne de buey</b>
							</div>
							<div class="precio"><span>17,50€</span></div>
						</li>
						<li>
							<div>
								<b>Chicharrones</b>
							</div>
							<div class="precio"><span>6'95€</span></div>
						</li>
						<li>
							<div>
								<b>Bistec de pollo</b>
							</div>
							<div class="precio"><span>11,5€</span></div>
						</li>
					</ul>
				</div>
				<div>
					<div class="indiceProductos" id="vegano">
						<span><b>100% Vegano</b></span>
						<img class="icono" src="./img/iconos/flecha_derecha.svg" />
					</div>
					<ul class="listaProductos listaCarta">
						<li>
							<div>
								<b>Ensalada (Lechuga, tomate y cebolla)</b>
							</div>
							<div class="precio"><span>4'50€</span></div>
						</li>
						<li>
							<div>
								<b>Ensalada completa (Lechuga, tomate, cebolla, aceitunas, espárragos y maíz</b>
							</div>
							<div class="precio"><span>7'50€</span></div>
						</li>
						<li>
							<div>
								<b>Hamburguesa de tofu</b>
							</div>
							<div class="precio"><span>11,50€</span></div>
						</li>
						<li>
							<div>
								<b>Curry de garbanzos con mango</b>
							</div>
							<div class="precio"><span>15'95€</span></div>
						</li>
						<li>
							<div>
								<b>Burritos veganos</b>
							</div>
							<div class="precio"><span>11,50€</span></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 colCarrito">
				<div class="carrito">
					<div style="display: none;"></div>
					<ul>
						<li>
							<div>
								<b>Tortilla de patata vegana con cebolla</b>
								<input type="number" value="1" min="1">
								<i class="icon-plus btInput"></i>
								<i class="icon-minus btInput"></i>
								<i class="icon-trash-empty"></i>
							</div>
							<span>9,00€</span>
						</li>
					</ul>
					<b>Total pedido</b>
					<b id="precioTotal">9,00€</b>
				</div>
				<div id="pagar">
					<input type="submit" value="Realizar pedido">
				</div>
			</div>
		</div>
	</div>
	<script src="./javascript/carta.js"></script>
</body>

</html>
