<?php
    require_once('accionproducto.php');
    require_once('../global/producto.php');
    $crud=new CrudProducto();
    $producto= new Producto();
	$producto=$crud->obtenerProducto($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>
        <div class="container">
            <form action='administrar.php' method='post'>
                <table>
                    <tr>
                        <input type='hidden' name='id' value='<?php echo $producto->getId()?>'>
                        <td>Nombre producto:</td>
                        <td> <input type='text' name='nombre' value='<?php echo $producto->getNombre()?>'></td>
                    </tr>
                    <tr>
                        <td>Descripcion:</td>
                        <td><textarea name='descripcion'><?php echo $producto->getDescripcion()?></textarea></td>
                    </tr>
                    <tr>
                        <td>Precio:</td>
                        <td><input type='text' name='precio' value='<?php echo $producto->getPrecio() ?>'></td>
                    </tr>
                    <input type='hidden' name='imagen' value='<?php echo $producto->getImagen()?>'>
                    <input type='hidden' name='actualizar' value='actualizar'>
                </table>
                <input type='submit' value='Guardar'>
            </form>
        </div>
    </body>
</html>