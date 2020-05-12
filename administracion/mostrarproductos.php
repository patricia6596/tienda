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
            <h3 class="pt-3 text-center text-uppercase">Edicion de productos</h3>
            <br>
            <table class="table table-light table-bordered">
                <head>
                    <td width="30%" class="text-center font-weight-bold">Nombre</td>
                    <td width="60%" class="text-center font-weight-bold">Descripcion</td>
                    <td width="30%" class="text-center font-weight-bold">Precio</td>
                    <td width="40%" class="text-center font-weight-bold"></td>
                    <td width="40%" class="text-center font-weight-bold"></td>
                </head>
                <body>
                    <?php foreach ($listaProductos as $producto) {?>
                    <tr>
                        <td width="30%" class="text-center"><?php echo $producto->getNombre() ?></td>
                        <td width="60%" class="text-center"><?php echo $producto->getDescripcion() ?></td>
                        <td width="30%" class="text-center"><?php echo $producto->getPrecio()?> </td>
                        <td width="40%" class="text-center"><a href="actualizar.php?id=<?php echo $producto->getId()?>&accion=a">Actualizar</a> </td>
                        <td width="40%" class="text-center"><a href="administrar.php?id=<?php echo $producto->getId()?>&accion=e">Eliminar</a>   </td>
                    </tr>
                    <?php }?>
                </body>
            </table>
            <a class="btn btn-primary" href="introducir.php">Agregar producto</a>
            <a class="btn btn-primary" href="../index.php">Salir</a>
        </div>
        
    </body>
</html>