<?php
    require_once('accionproducto.php');
    require_once('../global/producto.php');

    $nombre=$_POST['nombreproducto'];
    $descripcion=$_POST['descripcionproducto'];
    $precio=$_POST['precioproducto'];
    $nombre_imagen=$_FILES['imagenproducto']['name'];
    
    echo $nombre.'<br>'.$descripcion.'<br>'.$precio.'<br>'.$nombre_imagen;

    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/pruebas/Carrito/img/';

    move_uploaded_file($_FILES['imagenproducto']['tmp_name'],$carpeta_destino.$nombre_imagen);

    $crud=new CrudProducto();
    $producto= new Producto();
	$producto->setId($_POST['id']);
	$producto->setNombre($nombre);
	$producto->setDescripcion($descripcion);
    $producto->setPrecio($precio);
    $producto->setImagen('img/'.$nombre_imagen);
	$crud->insertar($producto);
	header('Location: mostrarproductos.php');
?>
