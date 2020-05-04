<?php
    session_start();
    $mensaje="";
    if(isset($_POST['btnAccion'])){
        switch ($_POST['btnAccion']) {
            case 'Agregar':
                if( is_numeric( openssl_decrypt ( $_POST['id'], COD, KEY ) ) ) {
                    $ID = ( openssl_decrypt( $_POST['id'], COD, KEY ) ) ;
                    $mensaje="ID correcto";
                }else {
                    $mensaje="Upss.. ID incorrecto";
                }
                if( is_string( openssl_decrypt( $_POST['nombre'], COD, KEY ) ) ) {
                    $NOMBRE=openssl_decrypt( $_POST['nombre'], COD, KEY );
                    $mensaje="NOMBRE correcto";
                }else {
                    $mensaje="Upss.. NOMBRE incorrecto";
                    break;
                }
                if( is_numeric( openssl_decrypt( $_POST['cantidad'], COD, KEY ) ) ) {
                    $CANTIDAD=openssl_decrypt( $_POST['cantidad'], COD, KEY );
                    $mensaje="CANTIDAD correcto";
                }else {
                    $mensaje="Upss.. CANTIDAD incorrecta";
                    break;
                }
                if( is_numeric( openssl_decrypt( $_POST['precio'], COD, KEY ) ) ) {
                    $PRECIO=openssl_decrypt( $_POST['precio'], COD, KEY );
                    $mensaje="PRECIO correcto";
                }else {
                    $mensaje="Upss.. PRECIO incorrecto";
                    break;
                }
                if(!isset($_SESSION['CARRITO'])) {
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'CANTIDAD'=>$CANTIDAD,
                        'PRECIO'=>$PRECIO
                    );
                    $_SESSION['CARRITO'][0]=$producto;
                    $mensaje = "Producto agregado al carrito";
                }else{
                    $idProductos = array_column($_SESSION['CARRITO'],"ID");
                    if(in_array($ID, $idProductos)){
                        $mensaje = "Producto agregado al carrito";
                    }else{
                        $NumeroProductos=count($_SESSION['CARRITO']);
                        $producto=array(
                            'ID'=>$ID,
                            'NOMBRE'=>$NOMBRE,
                            'CANTIDAD'=>$CANTIDAD,
                            'PRECIO'=>$PRECIO
                        );
                        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                        $mensaje = "Producto agregado al carrito";
                    }
                }
                
            break;
            case "Eliminar":
                if(is_numeric( openssl_decrypt( $_POST['id'], COD, KEY ) ) ) {
                    $ID = ( openssl_decrypt( $_POST['id'], COD, KEY ) ) ;
                    foreach ( $_SESSION['CARRITO'] as $indice => $producto ) {
                        if( $producto['ID'] == $ID) {
                            unset($_SESSION['CARRITO'][$indice]);
                        }else
                            echo "hubo un error";
                    }
                }else{
                    $mensaje="Upss.. ID incorrecto"."<br>";
                }
            break;
           
        }
    }
?>