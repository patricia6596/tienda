<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include 'global/config.php';
            include 'carrito.php';
            include 'global/conexion.php';
        ?>
        <div class="container">
			<nav class="navbar navbar-expand-md navbar-dark fixed-top mibg">
                <div class="container-fluid">
					<img src="img/logo.jpg" class="bg-white" style="width:60px;">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav justify-content-between">
                        	<li class="nav-item">
                            	<a class="nav-link text-dark font-weight-bold" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                            	<a class="nav-link text-dark font-weight-bold" href="mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?>)</a>
							</li>
                       	</ul>
                    </div>
                </div>
			</nav>