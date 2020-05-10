<?php
    require_once('accionproducto.php');
    require_once('../global/producto.php');
    
    /*Este fichero se encarga de cargar la imagen que el administrador sube en el servidor */
    $nombre=$_POST['nombreproducto'];
    $descripcion=$_POST['descripcionproducto'];
    $precio=$_POST['precioproducto'];
    $nombre_imagen=$_FILES['imagenproducto']['name'];
    
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/TIENDA/img/';

    move_uploaded_file($_FILES['imagenproducto']['tmp_name'],$carpeta_destino.$nombre_imagen);

    $crud=new CrudProducto();
    $producto= new Producto();
	$producto->setNombre($nombre);
	$producto->setDescripcion($descripcion);
    $producto->setPrecio($precio);
    $producto->setImagen('img/'.$nombre_imagen);
	$crud->insertar($producto);
	header('Location: mostrarproductos.php');
?>