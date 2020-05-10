<?php
    require_once('accionproducto.php');
    require_once('../global/producto.php');
    $crud=new CrudProducto();
    $producto= new Producto();
    $listaProductos=$crud->mostrar();
?>
 <!--Este fichero realiza un select para mostrar todos los elementos que tiene la tabla productos -->
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
        <div class="container">
            <h3>Edicion de productos</h3>
            <table>
                <head>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Actualizar</td>
                    <td>Eliminar</td>
                </head>
                <body>
                    <?php foreach ($listaProductos as $producto) {?>
                    <tr>
                        <td><?php echo $producto->getNombre() ?></td>
                        <td><?php echo $producto->getDescripcion() ?></td>
                        <td><?php echo $producto->getPrecio()?> </td>
                        <td><a href="actualizar.php?id=<?php echo $producto->getId()?>&accion=a">Actualizar</a> </td>
                        <td><a href="administrar.php?id=<?php echo $producto->getId()?>&accion=e">Eliminar</a>   </td>
                    </tr>
                    <?php }?>
                </body>
            </table>
            <a class="btn btn-primary" href="introducir.php">Agregar producto</a>
            <a class="btn btn-primary" href="../index.php">Salir</a>
        </div>
        
    </body>
</html>