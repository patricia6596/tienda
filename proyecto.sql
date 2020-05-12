drop database if exists tienda;
create database if not exists tienda;
use tienda ;

create table if not exists cliente (
	dni varchar(10) not null primary key,
	nombre varchar(45),
	apellidos varchar(45),
    contr varchar(10),
	email varchar(45),
	f_nacimiento date,
	estado_civil varchar(45),
	telefono int,
	direccion varchar(45),
	numero int,
	localidad varchar(45),
	codigo_postal int,
	provincia varchar(45),
	pais varchar(45)
);
select * from cliente;
create table if not exists productos (
	id int not null auto_increment primary key,
	nombre varchar(45),
	descripcion mediumtext,
	precio decimal(10,2),
	imagen varchar(255)
);
select * from productos;
create table if not exists proveedores (
	codigo int not null primary key,
	nombre varchar(45),
	apellidos varchar(45),
	telefono int
);
create table if not exists empresa_repartos (
	codigo int not null primary key,
    nombre varchar(45),
	telefono int
);
create table if not exists proporciona (
	productos_codigo int not null,
	proveedores_codigo int not null,
    primary key (productos_codigo, proveedores_codigo)
);
create table if not exists linea_pedido (
	codigo_productos int not null,
	pedidos_total decimal(4,2) not null,
	cantidad int,
	fecha_pedido datetime,
	primary key (codigo_productos, pedidos_total)
);
select * from linea_pedido;
select * from linea_pedido join productos where codigo_productos=id;
update linea_pedido set cantidad = cantidad+1;
create table if not exists pedidos (
	numero int auto_increment,
	total decimal(4,2) not null,
	empresa_repartos_codigo int not null,
	cliente_dni varchar(10) not null,
	primary key (numero)
);
alter table proporciona add foreign key (productos_codigo) references productos (id);
alter table proporciona add foreign key (proveedores_codigo) references proveedores (codigo);

insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera con niños', 'Pulsera de plata personalizable con niño-niña, niño-niño o niña-niña con nombres.', 18.90, 'img/uno.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera con rayo', 'Pulsera de plata con un rayo, con cierre reasa.', 15.50, 'img/dos.jpg');
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera corazon', 'Pulsera de plata con corazon, con cierre langosta.', 16.90, 'img/tres.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera mundo', 'Pulsera de plata con mapa mundi.', 19.99, 'img/cuatro.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Esclava de plata', 'Pulsera de plata personalizable, se puede grabar tanto por dentro como por fuera.', 18.75, 'img/cinco.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera inicial', 'Pulsera de oro con inicial personalizable.', 24.90, 'img/seis.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera diamante', 'Pulsera de oro, con imagen de diamante.', 26.80, 'img/siete.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera estrellas', 'Pulsera de oro, con pequeñas estrellas y cierre langosta.', 23.45, 'img/ocho.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera', 'Pulsera de oro, trenzado gordo', 31.54, 'img/nueve.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera cadena', 'Pulsera de oro, forma de cadena ancha', 29.89, 'img/diez.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera cristales', 'Bisuteria, pulsera de cristales y bolas', 7.65, 'img/once.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera bolas', 'Bisuteria, cinco pulseras, dos de ellas color dorado y el resto color plata, unidas por bolas', 5.50, 'img/doce.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('pulsera pies', 'Bisuteria, pulsera personalizable "mama eres la mejor" con pies y nombres', 7.30, 'img/trece.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera floral', 'Bisuteria, pulsera de flores de colores', 8.90, 'img/catorce.png' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera yin-yang', 'Bisuteria, pulsera con union de yin y yang ', 4.30, 'img/quince.jpg' );
insert into productos (nombre, descripcion, precio, imagen) values ('Pulsera corazones', 'Bisuteria, pulsera con union de corazones', 5.20, 'img/dieciseis.png' );