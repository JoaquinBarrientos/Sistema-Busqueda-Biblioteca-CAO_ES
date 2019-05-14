create database consultalibros;
use consultalibros;

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT not null,
    nombre_usuario VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    PRIMARY KEY pkId_usuario(id_usuario)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE autor (
    id_autor INT AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    nacionalidad VARCHAR(50) NOT NULL,
    PRIMARY KEY pkId_autor(id_autor)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE asignatura (
    id_asig INT AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    codigo VARCHAR(5) NOT NULL,
    PRIMARY KEY pkId_asig(id_asig)
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE libro(
    id_libro INT AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    autor VARCHAR(50) NOT NULL,
    asignatura VARCHAR(50) NOT NULL,
    codigoCorrelativo VARCHAR(5) NOT NULL,
    PRIMARY KEY pkId_libro(id_libro)
    /*FOREIGN KEY fkAutor(autor) REFERENCES autor(id_autor) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY fkAsignatura(asignatura) references asignatura(id_asig) ON UPDATE CASCADE ON DELETE CASCADE*/
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE libroxAutor(
    id_libroxAutor INT AUTO_INCREMENT,
    id_autor int NOT NULL,
    id_libro int NOT NULL,
    PRIMARY KEY pkId_libroxAutor(id_libroxAutor)
    /*FOREIGN KEY fkId_autor(id_autor) REFERENCES autor(id_autor) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY fkId_libro(id_libro) REFERENCES libro(id_libro)ON UPDATE CASCADE ON DELETE CASCADE*/
)  ENGINE=INNODB;
