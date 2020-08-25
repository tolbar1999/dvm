CREATE DATABASE dvm;
USE dvm;

CREATE TABLE usuario (
	id int primary key auto_increment,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    direccion varchar(100) not null,
    telefono varchar(20) not null,
    correo varchar(50) not null unique,
    clave varchar(50) not null,
    es_administrador boolean not null
);


CREATE TABLE evento(
	id int primary key auto_increment,
    descripcion varchar(255) not null,
    motivo varchar(255) not null,
    direccion varchar(100) not null,
    aprobacion boolean not null,
    url_foto varchar(255),
    
    fecha date not null,
    hora varchar(50) not null,
    dia varchar(50) not null,
    
    id_usuario int not null,
		foreign key(id_usuario) references usuario(id)
);

INSERT INTO usuario VALUES 
(null,'Admin-nombre','Admin-apellido','calle 55','3152451111','admin@gmail.com','admin12345',true);