<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="row">

        <div class="col-md-6">
            <h1 class="display-2 text-center">Inicio</h1>
            <form class="row g-3 p-5" name="Cargar" action="Cargar.php" method="post">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="Email">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="Password">
                </div>
                <div class="col-12">
                    <button type="submit" name="Enviar" value="Enviar" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h1 class="display-2 text-center">Crear seccion</h1>
            <form class="row g-3 p-5" name="Cargar" action="Cargar.php" method="post">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="Apellido">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="Email">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="Password">
                </div>
                <div class="col-12">
                    <button type="submit" name="Enviar" value="Enviar" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>