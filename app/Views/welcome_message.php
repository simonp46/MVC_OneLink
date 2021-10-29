<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Full Aspect</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- STYLES -->
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		main {
			margin-top: 20px;
			background-color: #D4F1FF;
			min-width: 100vh;
			min-height: 100vh;
		}

		body {
			background-color: #14B4FF;
		}

		nav {
			margin-bottom: 20px;
		}

		main {

			margin-bottom: 20px;

		}

		footer {
			margin-top: 20px;
			text-align: center;
		}
		.card-group {
			margin-left: 30px;
			margin-right: 30px;
		}

	</style>

</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Inicio</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="registro">Registro empleados</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="Areas">Areas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Empleados">Empleados</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main>
		<!-- Carrousel -->
		<div id="carousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://profile.es/wp-content/media/desarrollador-frontend-backend-o-fullstack.jpg" with="800px" height="600px" class="d-block w-100" alt="Imagen no disponible">
				</div>
				<div class="carousel-item">
					<img src="https://www.icr-evolution.com/wp-content/uploads/2016/06/equipo.jpg" with="800px" height="600px" class="d-block w-100" alt="Imagen no disponible">
				</div>
				<div class="carousel-item">
					<img src="https://www.portafolio.co/files/article_multimedia/uploads/2017/07/14/59695e9ca5ac8.jpeg" with="800px" height="600px" class="d-block w-100" alt="Imagen no disponible">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Siguiente</span>
			</button>
		</div>
		<!-- Cards -->
		<div class="card-group" >
			<div class="card">
				<img src="https://info.corponet.com.mx/hubfs/Imported_Blog_Media/Estrategias-para-tener-a-tus-empleados-contentos_imgdest-scaled-2.jpg" class="card-img-top" alt="Imagen no disponible">
				<div class="card-body">
					<h5 class="card-title">Colaboradores</h5>
					<p class="card-text">En nuestra empresa valoramos el talento humano Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium doloribus nihil ipsa architecto adipisci autem, eaque commodi voluptates repellat vel.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img src="https://tec.mx/sites/default/files/styles/header_full/public/2021-09/innovacion-industrias-congreso-sociedad-alumnos-innovacion-desarrollo-campus-monterrey-2021.jpg?itok=I2QtwArr" class="card-img-top" alt="Imagen no disponible">
				<div class="card-body">
					<h5 class="card-title">Inovación</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione fuga facilis dolor magnam exercitationem quas non amet nostrum ab fugit est molestias repellat maxime voluptatum dolore nemo, quidem optio aperiam.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img src="..." class="card-img-top" alt="Imagen no disponible">
				<div class="card-body">
					<h5 class="card-title">Industria</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>
	</main>

	<!-- Pie de pagina -->

	<footer>
		<div class="environment">

			<p>Desarrollador: Simón Andres Padrón Gaviria.</p>

			<p>Telefono: +57 3045374560</p>

			<p>Page rendered in {elapsed_time} seconds</p>

			<p>Environment: <?= ENVIRONMENT ?></p>

		</div>

		<div class="copyrights">

			<p>&copy; <?= date('Y') ?> Onelink. Esta es una pagina con fines educativos.</p>

		</div>

	</footer>

	<!-- SCRIPTS -->

	<script>
		function toggleMenu() {
			var menuItems = document.getElementsByClassName('menu-item');
			for (var i = 0; i < menuItems.length; i++) {
				var menuItem = menuItems[i];
				menuItem.classList.toggle("hidden");
			}
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>

</html>