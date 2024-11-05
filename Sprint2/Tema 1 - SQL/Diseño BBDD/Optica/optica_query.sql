-- Llista el total de compres d’un client/a.
SELECT * FROM venta JOIN cliente ON venta.cliente_id = cliente.id WHERE cliente.nombre = 'Maria Garcia';

-- Llista les diferents ulleres que ha venut un empleat durant un any.

SELECT * FROM gafa JOIN venta ON venta.gafa_id = gafa.id JOIN vendedor ON venta.vendedor_id = vendedor.id WHERE vendedor.nombre = 'Vendedor 1' && venta.fecha like '2024%'; 

-- Llista els diferents proveïdors que han subministrat ulleres venudes amb èxit per l'òptica.

SELECT DISTINCT * FROM proveedor JOIN marca ON proveedor.id = marca.proveedor_id JOIN gafa ON marca.nombre = gafa.marca JOIN venta ON gafa.id = venta.gafa_id;
