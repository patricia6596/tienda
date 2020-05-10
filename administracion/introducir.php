<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
         integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--Este fichero es un formulario para que el administrador agregue un producto -->
        <div class="container">
            <div class="">
                <h2>Introduzca los datos del nuevo producto</h2>
                <form action="imagen.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombreproducto">
                    </div>
                    <div class="form-group">
                        <label>Descripcion:</label>
                        <input type="text" class="form-control" name="descripcionproducto">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="decimal" class="form-control" name="precioproducto">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen:</label><br>
                        <input type="file" name="imagenproducto">
                    </div>
                    <button class="btn btn-primary" type="submit" name="insertar" value="insertar">Agregar producto</button>
                </form><br>
                <a class="btn btn-primary" href="mostrarproductos.php">Editar productos</a>
            </div>
           <div class="fixed-bottom"> 
                <div class="row mibg justify-content-center p-1">
                    <div class="col-6 w-100">
                        <p class="text-center text-dark">
                            Desarrollado por @PatriciaCanteroGarcia
                        </p>
                    </div>
                </div>
                <div class="row mibg justify-content-center p-1">
                    <div class="col-2 col-md-1">
                        <img src="../img/facebook.png" class="img-fluid rounded w-50">
                    </div>
                    <div class="col-2 col-md-1">
                        <img src="../img/twitter.png" class="img-fluid rounded w-50">
                    </div>
                    <div class="col-2 col-md-1">
                        <img src="../img/instagram.jpg" class="img-fluid rounded w-50">
                    </div>
                </div>
           </div>
        </div>
    </body>
</html>