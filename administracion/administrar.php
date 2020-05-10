<?php
    require_once('accionproducto.php');
    require_once('../global/producto.php');
    /*Este fichero recibe de formularios y procede a ejecutar la correspondiente funcion */
    $crud=new CrudProducto();
    $producto= new Producto();
    $listaProductos=$crud->mostrar();
    if(isset($_POST['actualizar'])){
		$producto->setId($_POST['id']);
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['descripcion']);
        $producto->setPrecio($_POST['precio']);
        $producto->setImagen($_POST['imagen']);
		$crud->actualizar($producto);
        header('Location: mostrarproductos.php');
	}elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);	
        header('Location: mostrarproductos.php');
	}elseif($_GET['accion']=='a'){
        header('Location: mostrarproductos.php');
    }
?>