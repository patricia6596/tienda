<?php 
    include 'templates/cabecera.php';
    if($mensaje!='') { 
?>

<!--Este archivo es la pantalla principal del proyecto, hace una seleccion de la tabla productos y los muestra -->

<br>
<div class="alert alert-success">
    <?php echo $mensaje; ?>
    <a href="mostrarCarrito.php" class="badge">Ver carrito</a>
</div>
<?php } ?>
<div class="row">
    <?php
        $db = Db::conectar();
        $select  = $db -> prepare( 'select * from productos');
        $select -> execute();
        $lista = $select -> fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php
        foreach($lista as $producto) {
    ?>
    <div class="col-3">
        <div class="card">
            <img title="<?php echo $producto['nombre'] ?>" class="card-img-top" src="<?php echo $producto['imagen']; ?>"
                data-toggle="popover" data-trigger="hover" data-content="<?php echo $producto['descripcion']; ?>">
            <div class="card-body text-center">
                <span><?php echo $producto['nombre']; ?></span>
                <h5 class="card-title"><?php echo $producto['precio']; ?></h5>
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'], COD, KEY); ?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'], COD, KEY); ?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
                    <button class="btn btn-primary" type="submit" name="btnAccion" value="Agregar">Agregar al carrito</button>
                </form>   
            </div>
        </div><br>
    </div>
   
    <?php 
        } 
    ?>
</div>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
</script>
<?php
    include 'templates/pie.php';
?>