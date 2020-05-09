<?php
        require_once('../global/conexion.php');
 
        class CrudProducto{
            public function __construct(){}
     
            public function insertar($producto){
                $db=Db::conectar();
                $insert=$db->prepare( 'insert into productos (nombre, descripcion, precio, imagen) values (:nom, :desc, :precio, :img)' );
                $insert->bindValue('nom', $producto->getNombre());
                $insert->bindValue('desc', $producto->getDescripcion());
                $insert->bindValue('precio',$producto->getPrecio());
                $insert->bindValue('img',$producto->getImagen());
                $insert->execute();
               
            }
     
            public function mostrar(){
                $db=Db::conectar();
                $listaProductos=[];
                $select=$db->query('select * from productos');
     
                foreach($select->fetchAll() as $producto){
                    $myProducto= new Producto();
                    $myProducto->setId($producto['id']);
                    $myProducto->setNombre($producto['nombre']);
                    $myProducto->setDescripcion($producto['descripcion']);
                    $myProducto->setPrecio($producto['precio']);
                    $myProducto->setImagen($producto['imagen']);
                    $listaProductos[]=$myProducto;
                }
                return $listaProductos;
            }
 
            public function eliminar($id){
                $db=Db::conectar();
                $eliminar=$db->prepare('delete from productos where id=:id');
                $eliminar->bindValue('id',$id);
                $eliminar->execute();
            }
     
            // método para buscar un libro, recibe como parámetro el id del libro
            public function obtenerProducto($id){
                $db=Db::conectar();
                $select=$db->prepare('select * from productos where id=:id');
                $select->bindValue('id',$id);
                $select->execute();
                $producto=$select->fetch();
                $myProducto= new Producto();
                $myProducto->setId($producto['id']);
                $myProducto->setNombre($producto['nombre']);
                $myProducto->setDescripcion($producto['descripcion']);
                $myProducto->setPrecio($producto['precio']);
                $myProducto->setImagen($producto['imagen']);
                return $myProducto;
            }
     
            // método para actualizar un libro, recibe como parámetro el libro
            public function actualizar($producto){
                $db=Db::conectar();
                $actualizar=$db->prepare('update productos set nombre=:nom, descripcion=:desc, precio=:precio, imagen=:img  where id=:id');
                $actualizar->bindValue('id',$producto->getId());
                $actualizar->bindValue('nom', $producto->getNombre());
                $actualizar->bindValue('desc', $producto->getDescripcion());
                $actualizar->bindValue('precio',$producto->getPrecio());
                $actualizar->bindValue('img',$producto->getImagen());
                $actualizar->execute();
            }
        }
?>