-- 1
SELECT nombre FROM producto;

-- 2
SELECT nombre, precio FROM producto;

-- 3
SELECT * FROM producto;

-- 4
SELECT nombre, concat(precio, ' €') AS euros, concat(precio * 0.92,' $') AS dolares FROM producto;

-- 5
SELECT nombre AS 'nom de "producto"', concat(precio, ' €') AS euros, concat(precio * 0.92,' $') AS 'dòlars nord-americans' FROM producto;

-- 6
SELECT UPPER(nombre), precio FROM producto;

-- 7
SELECT LOWER(nombre), precio FROM producto;

-- 8
SELECT nombre, SUBSTRING(nombre, 1, 2) AS 'dos primeras letras' FROM fabricante;

-- 9
SELECT nombre, round(precio,0) FROM producto;

-- 10
SELECT nombre, TRUNCATE(precio,0) FROM producto;

-- 11
SELECT codigo_fabricante FROM producto;

-- 12
SELECT DISTINCT codigo_fabricante FROM producto; 

-- 13
SELECT nombre FROM fabricante ORDER BY nombre; 

-- 14
 SELECT nombre FROM fabricante ORDER BY nombre DESC;

-- 15
SELECT nombre FROM producto ORDER BY nombre ASC, precio DESC;

-- 16
SELECT * FROM fabricante LIMIT 5;

-- 17
SELECT * FROM fabricante LIMIT 2 OFFSET 3;

-- 18
SELECT nombre, precio FROM producto ORDER BY precio LIMIT 1;

-- 19 
SELECT nombre, precio FROM producto ORDER BY precio DESC LIMIT 1;

-- 20
SELECT * FROM producto WHERE codigo_fabricante = 2;

-- 21
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo;

-- 22
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo ORDER BY fabricante.nombre ASC;

-- 23
SELECT producto.codigo, producto.nombre, fabricante.codigo AS codigo_fabricante, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo;

-- 24
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo ORDER BY producto.precio LIMIT 1;

-- 25
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo ORDER BY producto.precio DESC LIMIT 1;

-- 26
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre = 'Lenovo';

-- 27
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre = 'Crucial' && producto.precio > 200;

-- 28
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre = 'Asus' || fabricante.nombre = 'hewlett-Packard' ||fabricante.nombre = 'Seagate';

-- 29
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre IN ('Asus', 'hewlett-Packard', 'Seagate');

-- 30
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE RIGHT(fabricante.nombre, 1) = 'e';

-- 31
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre like '%w%';

-- 32
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo  && producto.precio >= 180 ORDER BY producto.precio DESC, producto.nombre ASC;

-- 33
SELECT DISTINCT fabricante.codigo, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo ;

-- 34
SELECT fabricante.nombre, producto.nombre FROM fabricante LEFT JOIN producto ON fabricante.codigo = producto.codigo_fabricante;

-- 35
SELECT fabricante.nombre, producto.nombre FROM fabricante LEFT JOIN producto ON fabricante.codigo = producto.codigo_fabricante WHERE producto.nombre IS NULL;

-- 36
SELECT producto.nombre, fabricante.nombre AS fabricante FROM producto RIGHT JOIN fabricante ON producto.codigo_fabricante = fabricante.cod
igo WHERE fabricante.nombre = 'Lenovo';

-- 37
SELECT producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE producto.precio = ( SELECT MAX(precio) FROM producto WHERE codigo_fabricante = (SELECT codigo FROM fabricante WHERE nombre = 'Lenovo'));

-- 38
SELECT producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre = 'Lenovo' ORDER BY producto.precio DESC LIMIT 1;

-- 39
SELECT producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre = 'Hewlett-Packard' ORDER BY producto.precio ASC LIMIT 1;

-- 40
SELECT producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE producto.precio > ( SELECT MAX(precio) FROM producto WHERE codigo_fabricante = (SELECT codigo FROM fabricante WHERE nombre = 'Lenovo'));

-- 41
SELECT producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE producto.precio > ( SELECT AVG(precio) FROM producto WHERE codigo_fabricante = (SELECT codigo FROM fabricante WHERE nombre = 'Asus'));

-------------------------------------
-- Base de dades "Universidad"
-------------------------------------

-- 1
SELECT apellido1, apellido2, nombre FROM persona WHERE tipo = 'alumno' ORDER BY apellido1 ASC, apellido2 ASC, nombre ASC;

-- 2
SELECT apellido1, apellido2, nombre, telefono FROM persona WHERE telefono IS NULL && tipo = 'alumno';

-- 3
SELECT * from persona  WHERE fecha_nacimiento like '1999%';

-- 4
SELECT * FROM persona WHERE telefono IS NULL && tipo = 'profesor' && nif like '%K';

-- 5
SELECT * from asignatura WHERE cuatrimestre = 1 && curso = 3 && id_grado = 7; 

-- 6
SELECT persona.apellido1, persona.apellido2, persona.nombre, departamento.nombre FROM persona JOIN profesor ON persona.id  = profesor.id_profesor JOIN departamento ON profesor.id_departamento = departamento.id ORDER BY persona.apellido1 ASC, persona.apellido2 ASC, persona.nombre ASC;

-- 7
SELECT asignatura.nombre, curso_escolar.anyo_inicio, curso_escolar.anyo_fin from persona JOIN alumno_se_matricula_asignatura ON persona.id = alumno_se_matricula_asignatura.id_alumno JOIN curso_escolar ON alumno_se_matricula_asignatura.id_asignatura = curso_escolar.id JOIN asignatura ON alumno_se_matricula_asignatura.id_asignatura = asignatura.id  WHERE persona.nif = '26902806M';

-- 8
select DISTINCT departamento.nombre from departamento join grado join asignatura join profesor on profesor.id_profesor = asignatura.id_profesor ON grado.id = asignatura.id_grado where grado.nombre like '%Grado en Ingeniería Informática (Plan 2015)%' && asignatura.id_profesor IS NOT NULL;


-- 9
SELECT DISTINCT persona.* FROM persona JOIN curso_escolar JOIN alumno_se_matricula_asignatura on curso_escolar.id = alumno_se_matricula_asignatura.id_curso_escolar ON alumno_se_matricula_asignatura.id_alumno = persona.id WHERE curso_escolar.anyo_inicio = '2018';



-- Resol les 6 següents consultes utilitzant les clàusules LEFT JOIN i RIGHT JOIN.

-- 10
SELECT departamento.nombre, persona.apellido1, persona.apellido2, persona.nombre FROM persona LEFT JOIN profesor ON profesor.id_profesor = persona.id AND persona.tipo = 'profesor' LEFT JOIN departamento ON departamento.id = profesor.id_departamento ORDER BY departamento.nombre ASC, persona.apellido1 ASC, persona.apellido2 ASC, persona.nombre ASC;

-- 11
SELECT departamento.nombre, persona.apellido1, persona.apellido2, persona.nombre FROM persona LEFT JOIN profesor ON profesor.id_profesor = persona.id AND persona.tipo = 'profesor' LEFT JOIN departamento ON departamento.id = profesor.id_departamento WHERE departamento.nombre IS NULL;

-- 12
SELECT departamento.nombre FROM departamento LEFT JOIN profesor ON departamento.id = profesor.id_departamento WHERE profesor.id_profesor IS NULL;


-- 13
SELECT persona.* FROM persona LEFT JOIN asignatura ON persona.id = asignatura.id_profesor WHERE persona.tipo = 'profesor' && asignatura.nombre IS NULL;

-- 14
SELECT asignatura.nombre, asignatura.id_profesor FROM asignatura LEFT JOIN profesor ON asignatura.id_profesor = profesor.id_profesor WHERE profesor.id_profesor IS NULL;


-- 15
-- Retorna un llistat amb tots els departaments que no han impartit assignatures en cap curs escolar.

SELECT asignatura.nombre, asignatura.curso from asignatura LEFT JOIN curso_escolar ON curso_escolar.id = asignatura.curso;

SELECT asignatura.nombre, curso_escolar.id AS 'curso' FROM curso_escolar LEFT JOIN asignatura ON asignatura.curso = curso_escolar.id;

-- Consultes resum:


-- 16
SELECT COUNT(*) AS 'Total alumnos' FROM persona WHERE persona.tipo = 'alumno';

-- 17
SELECT COUNT(*) AS 'Total alumnos' FROM persona WHERE persona.tipo = 'alumno' && fecha_nacimiento like '1999%';

-- 18
select departamento.nombre AS 'nombre departamento', COUNT(*) AS 'cantidad' from departamento JOIN profesor on profesor.id_departamento = departamento.id GROUP BY departamento.nombre HAVING cantidad >= 1 ORDER BY cantidad DESC;


-- 19
SELECT departamento.nombre, COUNT(profesor.id_departamento) as 'Cantidad' FROM departamento LEFT JOIN profesor ON departamento.id = profesor.id_departamento GROUP BY departamento.nombre;

-- 20
select grado.nombre, COUNT(asignatura.nombre) AS 'cantidad' from grado LEFT JOIN asignatura ON grado.id = asignatura.id_grado GROUP BY grado.nombre ORDER BY cantidad DESC;

-- 21
select grado.nombre, COUNT(asignatura.nombre) AS 'cantidad' from grado LEFT JOIN asignatura ON grado.id = asignatura.id_grado GROUP BY grado.nombre HAVING cantidad > 40 ORDER BY cantidad DESC;

-- 22
select grado.nombre AS 'Grado', asignatura.tipo AS 'Tipo asignatura', SUM(asignatura.creditos) as 'Creditos' from grado LEFT JOIN asignatura on grado.id = asignatura.id_grado GROUP BY grado.nombre;

-- 23
SELECT curso_escolar.anyo_inicio AS 'Curso Escolar', COUNT(DISTINCT alumno_se_matricula_asignatura.id_alumno) AS 'Número de Alumnos Matriculados' FROM alumno_se_matricula_asignatura JOIN curso_escolar ON alumno_se_matricula_asignatura.id_curso_escolar = curso_escolar.id GROUP BY alumno_se_matricula_asignatura.id_curso_escolar;


-- 24
SELECT persona.id, persona.nombre, persona.apellido1, persona.apellido2, COUNT(asignatura.id) AS 'Asignaturas' FROM persona LEFT JOIN asignatura ON persona.id = asignatura.id_profesor WHERE persona.tipo = 'profesor' GROUP BY persona.id, persona.nombre, persona.apellido1, persona.apellido2 ORDER BY Asignaturas DESC;

-- 25
SELECT * FROM persona WHERE tipo = 'alumno' ORDER BY fecha_nacimiento DESC LIMIT 1;

-- 26
SELECT persona.* FROM persona JOIN profesor ON persona.id = profesor.id_profesor LEFT JOIN asignatura ON profesor.id_profesor = asignatura.id_profesor WHERE asignatura.nombre IS NULL;