DROP TABLE IF EXISTS biblioteca CASCADE;

CREATE TABLE bilbioteca (
    id              bigserial       PRIMARY KEY,
    codigo          numeric(2)      NOT NULL UNIQUE,
    denominacion    varchar(255)    NOT NULL,
    posicion        varchar(255)    NOT NULL
);


-- FIXTURES (DATOS DE PRUEBA)
INSERT INTO bilbioteca (codigo, denominacion, posicion)
    VALUES (10, 'IZQUIERDA CRISTAL ESTUDIO'   , 'IZQUIERDA'),
           (20, 'CENTRO CRISTAL ESTUDIO'      , 'CENTRO'),
           (30, 'DERECHA CRISTAL ESTUDIO'     , 'DERECHA')
