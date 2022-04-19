create database inventario;

create user usr_inventario@localhost identified by "USR_1nv3nt4r10";
grant all privileges on inventario.* to usr_inventario@localhost;


/*Tablas*/
create table c_cedes(
    id_c_cede int not null AUTO_INCREMENT,
    nombre_cede varchar(128) not null,
    constraint PK_id_c_cede primary key(id_c_cede)
);


create table c_privilegios(
    id_c_privilegio int not null AUTO_INCREMENT,
    descripcion_del_privilegio varchar(20) not null,
    constraint PK_id_c_privilegio primary key(id_c_privilegio)
);


create table c_movimientos(
    id_c_movimiento int not null AUTO_INCREMENT,
    descripcion_del_movimiento varchar(128),
    constraint PK_id_c_movimiento primary key(id_c_movimiento)
);


create table d_personas(
    id_d_persona int not null AUTO_INCREMENT,
    nombre varchar(50) not null,
    apellidos varchar(50) not null,
    id_c_cede_fk int not null,
    constraint PK_id_d_persona primary key(id_d_persona),
    constraint FK_id_c_cede_fk foreign key(id_c_cede_fk) references c_cedes(id_c_cede)
        on update cascade on delete cascade
);


create table d_usuarios(
    id_d_usuario int not null AUTO_INCREMENT,
    nombre_de_usuario varchar(20) not null,
    correo_electronico varchar(128) not null,
    contrasenia varchar(128) not null,
    id_c_privilegio_fk int not null,
    constraint PK_id_d_usuario primary key(id_d_usuario),
    constraint FK_id_c_privilegio_fk foreign key(id_c_privilegio_fk) references c_privilegios(id_c_privilegio)
        on update cascade on delete cascade
);


create table rel_usuarios_personas(
    id_d_usuario_fk int not null,
    id_d_persona_fk int not null,
    constraint FK_id_d_usuario_fk foreign key(id_d_usuario_fk) references d_usuarios(id_d_usuario)
        on update cascade on delete cascade,
    constraint FK_id_d_persona_fk foreign key(id_d_persona_fk) references d_personas(id_d_persona)
        on update cascade on delete cascade
);


create table d_inventarios(
    id_d_inventario int not null AUTO_INCREMENT,
    nombre_del_producto varchar(100) not null,
    codigo varchar(50) not null,
    stock int not null,
    precio float not null,
    descripcion varchar(500),
    foto blob,
    borrado boolean not null default 0,
    id_c_cede_fk_2 int not null,
    id_d_usuario_fk_2 int not null,
    fecha_hora datetime not null default now(),
    constraint PK_id_d_inventario primary key(id_d_inventario),
    constraint FK_id_c_cede_fk_2 foreign key(id_c_cede_fk_2) references c_cedes(id_c_cede)
        on update cascade on delete cascade,
    constraint FK_id_d_usuario_fk_2 foreign key(id_d_usuario_fk_2) references d_usuarios(id_d_usuario)
        on update cascade on delete cascade
);


create table d_historicos(
    id_d_historico int not null AUTO_INCREMENT,
    fecha_hora datetime not null default now(),
    id_d_inventario_fk int  not null,
    id_d_usuario_fk_3 int not null,
    id_c_movimiento_fk int not null,
    constraint PK_id_d_historico primary key(id_d_historico),
    constraint FK_id_d_inventario_fk foreign key(id_d_inventario_fk) references d_inventarios(id_d_inventario)
        on update cascade on delete cascade,
    constraint FK_id_d_usuario_fk_3 foreign key(id_d_usuario_fk_3) references d_usuarios(id_d_usuario)
        on update cascade on delete cascade,
    constraint FK_id_c_movimiento_fk foreign key(id_c_movimiento_fk) references c_movimientos(id_c_movimiento)
        on update cascade on delete cascade
);