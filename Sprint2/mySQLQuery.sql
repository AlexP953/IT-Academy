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
SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo
 ORDER BY producto.precio LIMIT 1;

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

-- Retorna totes les dades dels productes que tenen el mateix preu que el producte més car del fabricant Lenovo. (Sense fer servir INNER JOIN).

-- 38
SELECT producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo WHERE fabricante.nombre = 'Lenovo' ORDER BY producto.precio DESC LIMIT 1;

-- Llista el nom del producte més barat del fabricant Hewlett-Packard.

-- Retorna tots els productes de la base de dades que tenen un preu major o igual al producte més car del fabricant Lenovo.

-- Llesta tots els productes del fabricant Asus que tenen un preu superior al preu mitjà de tots els seus productes.


-------------------------------------
-- Base de dades "Universidad"
-------------------------------------


-- Si us plau, descàrrega la base de dades del fitxer schema_universidad.sql, visualitza el diagrama E-R en un editor i efectua les següents consultes:


-- Retorna un llistat amb el primer cognom, segon cognom i el nom de tots els/les alumnes. El llistat haurà d'estar ordenat alfabèticament de menor a 
-- major pel primer cognom, segon cognom i nom.

-- Esbrina el nom i els dos cognoms dels/les alumnes que no han donat d'alta el seu número de telèfon en la base de dades.

-- Retorna el llistat dels/les alumnes que van néixer en 1999.

-- Retorna el llistat de professors/es que no han donat d'alta el seu número de telèfon en la base de dades i a més el seu NIF acaba en K.

-- Retorna el llistat de les assignatures que s'imparteixen en el primer quadrimestre, en el tercer curs del grau que té l'identificador 7.

-- Retorna un llistat dels professors/es juntament amb el nom del departament al qual estan vinculats/des. El llistat ha de retornar quatre columnes, 
-- primer cognom, segon cognom, nom i nom del departament. El resultat estarà ordenat alfabèticament de menor a major pels cognoms i el nom.

-- Retorna un llistat amb el nom de les assignatures, any d'inici i any de fi del curs escolar de l'alumne/a amb NIF 26902806M.

-- Retorna un llistat amb el nom de tots els departaments que tenen professors/es que imparteixen alguna assignatura en el Grau en Enginyeria Informàtica 
-- (Pla 2015).

-- Retorna un llistat amb tots els/les alumnes que s'han matriculat en alguna assignatura durant el curs escolar 2018/2019.

-- Resol les 6 següents consultes utilitzant les clàusules LEFT JOIN i RIGHT JOIN.



--  Retorna un llistat amb els noms de tots els professors/es i els departaments que tenen vinculats/des. El llistat també ha de mostrar aquells 
-- professors/es que no tenen cap departament associat. El llistat ha de retornar quatre columnes, nom del departament, primer cognom, segon cognom i nom del 
-- professor/a. El resultat estarà ordenat alfabèticament de menor a major pel nom del departament, cognoms i el nom.

-- Retorna un llistat amb els professors/es que no estan associats a un departament.

-- Retorna un llistat amb els departaments que no tenen professors/es associats.

-- Retorna un llistat amb els professors/es que no imparteixen cap assignatura.

-- Retorna un llistat amb les assignatures que no tenen un professor/a assignat.

-- Retorna un llistat amb tots els departaments que no han impartit assignatures en cap curs escolar.



-- Consultes resum:



-- Retorna el nombre total d'alumnes que hi ha.

-- Calcula quants/es alumnes van néixer en 1999.

-- -- Calcula quants/es professors/es hi ha en cada departament. El resultat només ha de mostrar dues columnes, una amb el nom del departament i una altra 
-- amb el nombre de professors/es que hi ha en aquest departament. El resultat només ha d'incloure els departaments que tenen professors/es associats i haurà 
-- d'estar ordenat de major a menor pel nombre de professors/es.

-- -- Retorna un llistat amb tots els departaments i el nombre de professors/es que hi ha en cadascun d'ells. Té en compte que poden existir departaments que 
-- no tenen professors/es associats/des. Aquests departaments també han d'aparèixer en el llistat.

-- -- Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun. Té en compte que poden 
-- existir graus que no tenen assignatures associades. Aquests graus també han d'aparèixer en el llistat. El resultat haurà d'estar ordenat de major a menor 
-- pel nombre d'assignatures.

-- -- Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun, dels graus que tinguin més de 
-- 40 assignatures associades.

-- -- Retorna un llistat que mostri el nom dels graus i la suma del nombre total de crèdits que hi ha per a cada tipus d'assignatura. El resultat ha de tenir 
-- tres columnes: nom del grau, tipus d'assignatura i la suma dels crèdits de totes les assignatures que hi ha d'aquest tipus.

-- -- Retorna un llistat que mostri quants/es alumnes s'han matriculat d'alguna assignatura en cadascun dels cursos escolars. El resultat haurà de mostrar 
-- dues columnes, una columna amb l'any d'inici del curs escolar i una altra amb el nombre d'alumnes matriculats/des.

-- -- Retorna un llistat amb el nombre d'assignatures que imparteix cada professor/a. El llistat ha de tenir en compte aquells professors/es que no 
-- imparteixen cap assignatura. El resultat mostrarà cinc columnes: id, nom, primer cognom, segon cognom i nombre d'assignatures. El resultat estarà ordenat 
-- de major a menor pel nombre d'assignatures.

-- -- Retorna totes les dades de l'alumne més jove.

-- -- Retorna un llistat amb els professors/es que tenen un departament associat i que no imparteixen cap assignatura.