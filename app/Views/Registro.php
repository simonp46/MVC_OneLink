<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registros de empleados</title>
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
            background-color:#D4F1FF;
            min-width: 100vh;
            min-height: 100vh;
        }

        body {
            background-color: #14B4FF;
        }

        .contenido {
            place-items: center;
            display: flex;
            flex-direction: column;
        }

        form {
            background-color: #8DD1F0;
        }

        .section {
            background-color: #17E9AD;
        }

        nav {
            /*  min-width: 100vh;*/
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
    <!-- HEADER: MENU + HEROE SECTION -->
    <main>
        <div class="contenido">
            <div class="section">
                <h2 class="section-title">Datos del empleado <span class="line"></span></h2>

                <form action="<?php echo base_url().'/CEmpleado'?>" method="post">
                    <div class="mb-3">
                        <label for="tipodocumento" class="form-label">Tipo de documento</label>
                        <select name="tipodocument"class="form-select" aria-label="Default select example">
                            <option value="CC">Cedula de ciudadania</option>
                            <option value="CEX">Cedula extranjeria</option>
                            <option value="PST">Pasaporte</option>
                            <option value="TI">tarjeta de identidad</option>
                            <option value="RGC">Registro Civil</option>
                            <option value="NIT">Nit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Numero de documento</label>
                        <input type="number" class="form-control" name="numdocumento">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="tipodocumento" class="form-label">Área</label>
                        <select name="area" class="form-select" aria-label="Default select example">
                            <option value="CTR">Cartera</option>
                            <option value="GH">Gestion Humana</option>
                            <option value="SG">Seguridad</option>
                            <option value="DEV">Desarrollo</option>
                            <option value="SAC">Servicio al cliente</option>
                            <option value="MTN">Mantenimiento</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Registrar</button>
                </form>

            </div>
        </div>
    </main>
    <footer>
        <div class="environment">

            <p>Desarrollador: Simón Andres Padrón Gaviria.</p>

            <p>Telefono: +57 3045374560</p>

            <p>Page rendered in {elapsed_time} seconds</p>

            <p>Environment: <?= ENVIRONMENT ?></p>

        </div>

        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> Onelink. Está es una pagina con fines educativos.</p>

        </div>

    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>



</body>

</html>