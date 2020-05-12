<!DOCTYPE html>
<!--Este es el fichero cabecera, donde se declara el menu -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MiTienda</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include_once 'global/config.php';
            include_once 'carrito.php';
            include_once 'global/conexion.php';
        ?>
        <div class="container">
			<nav class="navbar navbar-expand-md navbar-dark fixed-top mibg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav justify-content-between">
                        	<li class="nav-item">
                            	<a class="nav-link text-dark font-weight-bold" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold" href="mostrarCarrito.php">Carrito(<?php echo
                                 (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?>)</a>
							</li>
                       	</ul>
                    </div>
                    <?php
                        if(isset($_SESSION['user'])){
                    ?>
                        <li><?php echo "Bienvenido ".$_SESSION['user']." " ?></li>
                        <form method="post" action="global/accion.php">
                            <li>
                                <button type="submit" class="btn btn-dark" name='cerrarsesion' value='cerrarsesion'>Cerrar sesión</button>
                            </li>
                        </form>
                        
                    <?php
                       }else{
                    ?>
                    <ul class="nav justify-content-end">
                        <li>
                            <button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#admin">Administracion</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#login">Login</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#registro">Registro</button>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
			</nav>
                       
            <br>
            <br>
            <div class="modal" id="admin"> 
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header mibg">
							<h4 class="modal-title">Iniciar sesion</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<form method="post" action="global/accion.php">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Introduzca su nombre" name="nombre">
								</div>
								<div class="form-group">
									<label>Contraseña:</label>
									<input type="password" class="form-control" placeholder="Introduzca su contraseña" name="contr">
								</div>
						</div>
						<div class="modal-footer"> 
							<button type="submit" class="btn mibg" name='iniciaradmin' value='iniciaradmin'>Iniciar sesión</button>
							</form>
						</div>
					</div>
				</div>
            </div>
            <div class="modal" id="login"> 
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header mibg">
							<h4 class="modal-title">Iniciar sesion</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<form method="post" action="global/accion.php">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Introduzca su nombre" name="nombre">
								</div>
								<div class="form-group">
									<label>Contraseña:</label>
									<input type="password" class="form-control" placeholder="Introduzca su contraseña" name="contr">
								</div>
						</div>
						<div class="modal-footer"> 
							<button type="submit" class="btn mibg" name='iniciar' value='iniciar'>Iniciar sesión</button>
							</form>
						</div>
					</div>
				</div>
            </div>
            <div class="modal" id="registro">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header mibg">
							<h4 class="modal-title">Registro de usuario</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<form method="post" action="global/accion.php" class="form">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" placeholder="Debe empezar por mayuscula y ser solo letras"
                                     name="nombre">
                                </div>
                                <div class="form-group">
                                    <label>Apellidos:</label>
                                    <input type="text" class="form-control" placeholder="Debe empezar por mayuscula y ser solo letras"
                                     name="apellidos">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña:</label>
                                    <input type="password" class="form-control" placeholder="Cuatro minusculas, una mayuscula y tres numeros"
                                     name="contr">
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="fechanacimiento" min="1930-01-01" max="2002-01-01" required>
                                </div>
                                <div class="form-group">
                                    <label>DNI (sin letra):</label>
                                    <input type="text" class="form-control" placeholder="8 digitos" name="dni">
                                </div>
                                <div class="form-group">
                                    <label>Estado civil:</label>
                                    <select name="estadocivil" class="custom-select">
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Viudo">Viudo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control" name="telefono" placeholder="9 digitos">
                                </div>
                                <div class="form-group">
                                    <label>Direccion:</label>
                                    <input type="text" class="form-control" name="direccion" placeholder="C// Ejemplo">
                                </div>
                                <div class="form-group">
                                    <label>Numero:</label>
                                    <input type="text" class="form-control" name="numero">
                                </div>
                                <div class="form-group">
                                    <label>Localidad:</label>
                                    <input type="text" class="form-control" placeholder="Debe empezar por mayuscula y ser solo letras"
                                     name="localidad">
                                </div>
                                <div class="form-group">
                                    <label>Codigo Postal</label>
                                    <input type="text" class="form-control" name="codigopostal" placeholder="5 digitos">
                                </div>
                                <div class="form-group">
                                    <label>Provincia</label>
                                    <input type="text" class="form-control" placeholder="Debe empezar por mayuscula y ser solo letras"
                                     name="provincia">
                                </div>
                                <div class="form-group">
                                    <label>Pais:</label>
                                    <input type="text" class="form-control" placeholder="Debe empezar por mayuscula y ser solo letras"
                                    
                                    name="pais">
                                </div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn mibg" name='registrar' value='registrar'>Registrar</button>
							</form>
						</div>
					</div>
                </div>
            </div>