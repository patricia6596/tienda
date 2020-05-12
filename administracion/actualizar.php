<?php
    require_once('accionproducto.php');
    require_once('../global/producto.php');
    $crud=new CrudProducto();
    $producto= new Producto();
	$producto=$crud->obtenerProducto($_GET['id']);
?>
<!--Este fichero se encarga del formulario para modificar un elemento -->
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
        <br>
        <div class="container">
            <form action='administrar.php' method='post'>
                <table class="table table-bordered">
                    <tr>
                        <input type='hidden' name='id' class="form-control" value='<?php echo $producto->getId()?>'>
                        <td width="50%" >Nombre producto:</td>
                        <td width="50%" > <input type='text' name='nombre' class="form-control" value='<?php echo $producto->getNombre()?>'></td>
                    </tr>
                    <tr>
                        <td width="50%">Descripcion:</td>
                        <td width="50%"><textarea name='descripcion' class="form-control"><?php echo $producto->getDescripcion()?></textarea></td>
                    </tr>
                    <tr>
                        <td width="50%">Precio:</td>
                        <td width="50%"><input type='text' name='precio' class="form-control" value='<?php echo $producto->getPrecio() ?>'></td>
                    </tr>
                    <input type='hidden' name='imagen' value='<?php echo $producto->getImagen()?>'>
                    <input type='hidden' name='actualizar' value='actualizar'>
                </table>
                <button type="submit" class="btn btn-primary" value='Guardar'>Guardar</button>
            </form>
        </div>
    </body>
</html>