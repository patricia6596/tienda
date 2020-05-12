<?php
	require 'conexion.php';

	/*Este fichero realiza las acciones de registro e iniciar usando las tablas de la base de datos */

	class Funciones {

		public function __construct(){}

		public function registrar( $usuario ) {
 
			$db = Db::conectar();
			$insert = $db -> prepare( 'insert into cliente (nombre, apellidos, contr, email, f_nacimiento, dni, estado_civil, telefono, 
			direccion, numero, localidad, codigo_postal, provincia, pais) values (:nombre, :apellidos, :contr, :email, :f_nacimiento, :dni, 
			:estado_civil, :telefono, :direccion, :numero, :localidad, :codigo_postal, :provincia, :pais)' );
			$insert -> bindValue( 'nombre', $usuario -> getNombre() );
			$insert -> bindValue( 'apellidos', $usuario -> getApellidos() );
			$insert -> bindValue( 'contr', $usuario -> getContr() );
			$insert -> bindValue( 'email', $usuario -> getEmail() );
			$insert -> bindValue( 'f_nacimiento', $usuario -> getFecha() );
			$insert -> bindValue( 'dni', $usuario -> getDni() );
			$insert -> bindValue( 'estado_civil', $usuario -> getEstado() );
			$insert -> bindValue( 'telefono', $usuario -> getTelefono() );
			$insert -> bindValue( 'direccion', $usuario -> getDireccion() );
			$insert -> bindValue( 'numero', $usuario -> getNumero() );
			$insert -> bindValue( 'localidad', $usuario -> getLocalidad() );
			$insert -> bindValue( 'codigo_postal', $usuario -> getCodigo() );
			$insert -> bindValue( 'provincia', $usuario -> getProvincia() );
			$insert -> bindValue( 'pais', $usuario -> getPais() );
			$insert -> execute();
			echo 'Registrado con exito';
			echo '<br><a href="../index.php" class="btn btn-primary">Volver</a>';
 
		}

		public function iniciar( $nom, $pwd ) {

			$db = Db::conectar();

			$select = $db -> prepare( 'select * from cliente where nombre= :nom and contr= :con' );
			$nom = htmlentities( addslashes( $nom ) );
			$con = htmlentities( addslashes( $pwd ) );
			$select -> bindvalue( ':nom', $nom );
			$select -> bindvalue( ':con', $con );
			$select -> execute();

 			$numero_registro = $select -> rowcount();

			if($numero_registro==0) {

				echo 'Este usuario no esta registrado';
			
			}else {
				session_start();
				$_SESSION['user']=$nom;
				header('Location: ../index.php');
					
			}	
		}
	}
?>