USE supra;

CREATE TABLE departamento(
    id_departamento int (20) PRIMARY KEY, nombre_departamento varchar (20), ciudad_departamento varchar (20));
    
CREATE TABLE nivel_educativo(
    id_nivel_educativo int (20) PRIMARY KEY, descripcion varchar(20));
    
CREATE TABLE empleado(
    id_empleado int (20) PRIMARY KEY, primer_nombre varchar (20), segundo_nombre varchar (20),salario int (15),
    id_nivel int (20), CONSTRAINT FK FOREIGN KEY id_nivel REFERENCES nivel_educativo(id_nivel_educativo),
    id_departamento int (20), CONSTRAINT fk FOREIGN KEY id_departamento REFERENCES departamento(id_departamento));

    
     
INSERT INTO `departamento` (`id_departamento`, `nombre_departamento`, `ciudad_departamento`) VALUES ('101', 'cordoba', 'monteria'), ('102', 'sucre', 'monteria');
INSERT INTO `nivel_educativo` (`id_nivel_educativo`, `descripcion`) VALUES ('1', 'bajo'), ('2', 'medio') ('3', 'alto');; 

INSERT INTO `empleado` (`id_empleado`, `primer_nombre`, `segundo_nombre`, `salario`, `id_nivel`, `id_departamento`) VALUES ('003', 'jose', 'pereira', '100000', '3', '101'), ('004', 'javier', 'soto', '80000', '2', '102')

#Consultas#

SELECT primer_nombre, segundo_nombre, id_empleado FROM empleado WHERE id_empleado=3;

SELECT primer_nombre, segundo_nombre, salario FROM empleado WHERE salario>=50000 AND salario<=100000 ORDER BY salario ASC;

SELECT primer_nombre, id_departamento, id_nivel, salario FROM empleado e WHERE (SELECT SUM(salario) FROM empleado WHERE e.id_departamento = 102);