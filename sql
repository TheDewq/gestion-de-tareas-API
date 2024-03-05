create table lista_tareas(
	id int not null AUTO_INCREMENT,
    titulo varchar(128) NOT null,
    descripcion text(1000),
    fecha_vencimiento date,
    estado SET("pendiente","en progreso","completada"),
    PRIMARY KEY(id)
);
