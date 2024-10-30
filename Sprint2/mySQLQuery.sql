-- Utiliza la DB seleccionada:
USE tienda;

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


-- Si us plau, descàrrega la base de dades del fitxer schema_universidad.sql, visualitza el diagrama E-R en un editor i efectua les següents consultes:


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
--  Retorna un llistat amb els noms de tots els professors/es i els departaments que tenen vinculats/des. El llistat també ha de mostrar aquells 
-- professors/es que no tenen cap departament associat. El llistat ha de retornar quatre columnes, nom del departament, primer cognom, segon cognom i nom del 
-- professor/a. El resultat estarà ordenat alfabèticament de menor a major pel nom del departament, cognoms i el nom.

-- 11
-- Retorna un llistat amb els professors/es que no estan associats a un departament.

-- 12
-- Retorna un llistat amb els departaments que no tenen professors/es associats.

-- 13
-- Retorna un llistat amb els professors/es que no imparteixen cap assignatura.

-- 14
-- Retorna un llistat amb les assignatures que no tenen un professor/a assignat.

-- 15
-- Retorna un llistat amb tots els departaments que no han impartit assignatures en cap curs escolar.



-- Consultes resum:


-- 16
SELECT COUNT(*) AS 'Total alumnos' FROM persona WHERE persona.tipo = 'alumno';

-- 17
SELECT COUNT(*) AS 'Total alumnos' FROM persona WHERE persona.tipo = 'alumno' && fecha_nacimiento like '1999%';

-- 18
select departamento.nombre AS 'nombre departamento', COUNT(*) AS 'cantidad' from departamento JOIN profesor on profesor.id_departamento = departamento.id GROUP BY departamento.nombre HAVING cantidad >= 1 ORDER BY cantidad DESC;


-- 19
-- -- Retorna un llistat amb tots els departaments i el nombre de professors/es que hi ha en cadascun d'ells. Té en compte que poden existir departaments que no tenen professors/es associats/des. Aquests departaments també han d'aparèixer en el llistat.

-- 20
-- -- Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun. Té en compte que poden existir graus que no tenen assignatures associades. Aquests graus també han d'aparèixer en el llistat. El resultat haurà d'estar ordenat de major a menor pel nombre d'assignatures.

-- 21
-- -- Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun, dels graus que tinguin més de 40 assignatures associades.

-- 22
-- -- Retorna un llistat que mostri el nom dels graus i la suma del nombre total de crèdits que hi ha per a cada tipus d'assignatura. El resultat ha de tenir tres columnes: nom del grau, tipus d'assignatura i la suma dels crèdits de totes les assignatures que hi ha d'aquest tipus.

-- 23
-- -- Retorna un llistat que mostri quants/es alumnes s'han matriculat d'alguna assignatura en cadascun dels cursos escolars. El resultat haurà de mostrar dues columnes, una columna amb l'any d'inici del curs escolar i una altra amb el nombre d'alumnes matriculats/des.

-- 24
-- -- Retorna un llistat amb el nombre d'assignatures que imparteix cada professor/a. El llistat ha de tenir en compte aquells professors/es que no imparteixen cap assignatura. El resultat mostrarà cinc columnes: id, nom, primer cognom, segon cognom i nombre d'assignatures. El resultat estarà ordenat de major a menor pel nombre d'assignatures.

-- 25
SELECT * FROM persona WHERE tipo = 'alumno' ORDER BY fecha_nacimiento DESC LIMIT 1;

-- 26
-- -- Retorna un llistat amb els professors/es que tenen un departament associat i que no imparteixen cap assignatura.