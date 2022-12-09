DROP TYPE IF EXISTS gen CASCADE;
DROP TABLE IF EXISTS persona CASCADE;
DROP TABLE IF EXISTS usuario CASCADE;
DROP TABLE IF EXISTS dni CASCADE;

CREATE TYPE gen AS ENUM(
    'Hombre',
    'Mujer',
    'Otros'
    );

CREATE TABLE persona (
    id          bigserial       PRIMARY KEY,
    dni         varchar(9)      NOT NULL UNIQUE,
    nombre      varchar(255)    NOT NULL,
    apellido1   varchar(255)    NOT NULL,
    apellido2   varchar(255)    ,
    genero      gen                   
);

CREATE TABLE usuario (
    id          bigserial       PRIMARY KEY,
    usuario     varchar(255)    NOT NULL UNIQUE,
    password    varchar(255)    NOT NULL
);

CREATE TABLE dni (
    id_persona  bigint          NOT NULL REFERENCES persona(id),
    id_usuario      bigint      NOT NULL REFERENCES usuario(id),
    PRIMARY KEY (id_persona, id_usuario)
);




INSERT INTO persona (
    dni,
    nombre,
    apellido1,
    apellido2,
    genero
)   VALUES 
        ('12345678R' , 'Pepe','Juan', 'Rosa', 'Hombre'),
        ('98765432Q', 'Fran', 'Cisco', 'Bollicao', 'Otros');
   
INSERT INTO persona (
    dni,
    nombre,
    apellido1,
    genero
)VALUES ('12365412W', 'Mohamed', 'LaGalleta', 'Otros');

INSERT INTO usuario( usuario, password ) 
    VALUES ('pepe', crypt('pepe',gen_salt('bf',10)));

INSERT INTO dni (id_persona, id_usuario)
    VALUES (1,1);