-- Llista quants productes de tipus “Begudes” s'han venut en una determinada localitat.
SELECT SUM(pedido_producto.cantidad) AS total_bebidas_vendidas FROM pedido_producto JOIN producto ON pedido_producto.producto_id = producto.id JOIN pedido ON pedido_producto.pedido_id = pedido.id JOIN tienda ON pedido.tienda_id = tienda.id WHERE producto.tipo_producto = 'bebida' AND tienda.localidad = 'Madrid';

-- Llista quantes comandes ha efectuat un determinat empleat/da.
SELECT COUNT(*) AS total_pedidos_efectuados FROM pedido WHERE repartidor_nif = '87654321D';