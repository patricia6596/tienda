<?php

	require 'funciones.php';
	require 'usuario.php';
	include 'functionformulario.php';

	/*Este fichero se encarga de realizar el registro de nuevos usuarios comprobando los datos recibido, iniciar sesion para usuarios,
	iniciar sesion para administrador y cerrar sesion */

	$accion = new Funciones(); 
	$usuario = new Usuario();

	if( isset( $_POST['registrar'] ) ) {

		if( validatename( $_POST['nombre'] ) && validatename( $_POST['apellidos'] ) && validatepwd( $_POST['contr'] ) && 
		validateemail( $_POST['email'] ) && validatedni( $_POST['dni'] ) && validatetlf( $_POST['telefono'] ) && 
		validatedirec( $_POST['direccion'] ) && validatename( $_POST['localidad'] ) && validatecp( $_POST['codigopostal'] ) 
		&& validatename( $_POST['provincia'] ) && validatename( $_POST['pais'] ) ) {

			$DNI=$_POST['dni'];
			$letra = letradni( $DNI );
			$DNI = "$DNI$letra";

			$usuario -> setNombre( $_POST['nombre'] );
			$usuario -> setApellidos( $_POST['apellidos'] );
			$usuario -> setContr( $_POST['contr'] );
			$usuario -> setEmail( $_POST['email'] );
			$usuario -> setFecha( $_POST['fechanacimiento'] );
			$usuario -> setDni( $DNI );
			$usuario -> setEstado( $_POST['estadocivil'] );
			$usuario -> setTelefono( $_POST['telefono'] );
			$usuario -> setDireccion( $_POST['direccion'] );
			$usuario -> setNumero( $_POST['numero'] );
			$usuario -> setLocalidad( $_POST['localidad'] );
			$usuario -> setCodigo( $_POST['codigopostal'] );
			$usuario -> setProvincia( $_POST['provincia'] );
			$usuario -> setPais( $_POST['pais'] );
			$accion -> registrar( $usuario );

		}else{

			echo 'Algun dato no esta introducido correctamente';

		}

	} elseif( isset( $_POST['iniciar'] ) ) {

		$accion -> iniciar( $_POST['nombre'], $_POST['contr']);

	} elseif( isset( $_POST['iniciaradmin'] ) ) {

		if($_POST['nombre']=="PATRICIA" && $_POST['contr']=='CANTERO'){
			header('Location: ../administracion/mostrarproductos.php');
		}else{
			echo "ERROR DE AUTENTIFICACION";
		}

	} elseif( isset( $_POST['cerrarsesion'] ) ) {

		session_start();
		session_unset();
		session_destroy();
		header('Location: ../index.php');

	}

?>