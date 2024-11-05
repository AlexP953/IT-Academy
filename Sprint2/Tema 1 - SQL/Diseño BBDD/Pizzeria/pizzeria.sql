CREATE TABLE cliente (
  id INT NOT NULL PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  direccion VARCHAR(100) NOT NULL,
  codigo_postal INT NOT NULL,
  localidad VARCHAR(50) NOT NULL,
  provincia VARCHAR(50) NOT NULL,
  telefono VARCHAR(15) NOT NULL
);

CREATE TABLE tienda (
  id INT NOT NULL PRIMARY KEY,
  direccion VARCHAR(100) NOT NULL,
  codigo_postal INT NOT NULL,
  localidad VARCHAR(50) NOT NULL,
  provincia VARCHAR(50) NOT NULL
);

CREATE TABLE empleado (
  nif VARCHAR(15) NOT NULL PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  telefono VARCHAR(15) NOT NULL,
  puesto ENUM('cocinero', 'repartidor') NOT NULL,
  tienda_id INT NOT NULL,
  CONSTRAINT empleado_tienda_id_fk FOREIGN KEY (tienda_id) REFERENCES tienda (id)
);

CREATE TABLE categoria (
  id INT NOT NULL PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);

CREATE TABLE producto (
  id INT NOT NULL PRIMARY KEY,
  tipo_producto ENUM('pizza', 'hamburguesa', 'bebida') NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  descripcion TEXT,
  img VARCHAR(255),
  precio DOUBLE NOT NULL
);

CREATE TABLE pizza (
  id INT NOT NULL PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  categoria_id INT NOT NULL,
  CONSTRAINT pizza_categoria_id_fk FOREIGN KEY (categoria_id) REFERENCES categoria (id)
);

CREATE TABLE pedido (
  id INT NOT NULL PRIMARY KEY,
  cliente_id INT NOT NULL,
  fecha DATETIME NOT NULL,
  tipo ENUM('domicilio', 'recogida') NOT NULL,
  precio DOUBLE NOT NULL,
  repartidor_nif VARCHAR(15),
  fecha_entrega DATETIME,
  tienda_id INT NOT NULL,
  CONSTRAINT pedido_cliente_id_fk FOREIGN KEY (cliente_id) REFERENCES cliente (id),
  CONSTRAINT pedido_tienda_id_fk FOREIGN KEY (tienda_id) REFERENCES tienda (id),
  CONSTRAINT pedido_repartidor_fk FOREIGN KEY (repartidor_nif) REFERENCES empleado (nif)
);

CREATE TABLE pedido_producto (
  pedido_id INT NOT NULL,
  producto_id INT NOT NULL,
  cantidad INT NOT NULL,
  PRIMARY KEY (pedido_id, producto_id),
  CONSTRAINT pedido_producto_pedido_fk FOREIGN KEY (pedido_id) REFERENCES pedido (id),
  CONSTRAINT pedido_producto_producto_fk FOREIGN KEY (producto_id) REFERENCES producto (id)
);


-- DATOS DE TEST HECHOS CON CHATGPT
INSERT INTO cliente (id, nombre, apellido, direccion, codigo_postal, localidad, provincia, telefono) VALUES
(1, 'Carlos', 'García', 'Calle Falsa 123', 28001, 'Madrid', 'Madrid', '600000001'),
(2, 'María', 'Martínez', 'Avenida Siempreviva 742', 28002, 'Madrid', 'Madrid', '600000002'),
(3, 'Ana', 'López', 'Calle Gran Vía 100', 29001, 'Málaga', 'Málaga', '600000003'),
(4, 'Juan', 'Pérez', 'Avenida Libertad 45', 41001, 'Sevilla', 'Sevilla', '600000004'),
(5, 'Luis', 'Rodríguez', 'Paseo del Prado 20', 46001, 'Valencia', 'Valencia', '600000005');

INSERT INTO tienda (id, direccion, codigo_postal, localidad, provincia) VALUES
(1, 'Calle Mayor 1', 28001, 'Madrid', 'Madrid'),
(2, 'Calle Real 2', 29001, 'Málaga', 'Málaga'),
(3, 'Calle Central 3', 41001, 'Sevilla', 'Sevilla');

INSERT INTO empleado (nif, nombre, apellido, telefono, puesto, tienda_id) VALUES
('12345678A', 'Alberto', 'Fernández', '600000006', 'cocinero', 1),
('87654321B', 'Lucía', 'Hernández', '600000007', 'repartidor', 1),
('12345678C', 'Miguel', 'Sánchez', '600000008', 'cocinero', 2),
('87654321D', 'Sonia', 'Gómez', '600000009', 'repartidor', 2),
('12345678E', 'Pablo', 'Ramírez', '600000010', 'cocinero', 3),
('87654321F', 'Clara', 'Díaz', '600000011', 'repartidor', 3);

INSERT INTO categoria (id, nombre) VALUES
(1, 'Clásicas'),
(2, 'Especiales'),
(3, 'Premium');

INSERT INTO producto (id, tipo_producto, nombre, descripcion, img, precio) VALUES
(1, 'pizza', 'Pizza Margarita', 'Pizza clásica con tomate y queso', 'img_margarita.jpg', 8.5),
(2, 'pizza', 'Pizza Pepperoni', 'Pizza con pepperoni y extra de queso', 'img_pepperoni.jpg', 9.5),
(3, 'pizza', 'Pizza BBQ', 'Pizza con salsa barbacoa y pollo', 'img_bbq.jpg', 10.0),
(4, 'hamburguesa', 'Hamburguesa Clásica', 'Hamburguesa con carne de res, lechuga y tomate', 'img_hamburguesa.jpg', 7.0),
(5, 'bebida', 'Coca-Cola', 'Refresco de cola', 'img_cocacola.jpg', 2.0);

INSERT INTO pizza (id, nombre, categoria_id) VALUES
(1, 'Pizza Margarita', 1),
(2, 'Pizza Pepperoni', 2),
(3, 'Pizza BBQ', 3);

INSERT INTO pedido (id, cliente_id, fecha, tipo, precio, repartidor_nif, fecha_entrega, tienda_id) VALUES
(1, 1, '2024-11-01 12:30:00', 'domicilio', 27.0, '87654321B', '2024-11-01 13:00:00', 1),
(2, 1, '2024-11-02 14:00:00', 'recogida', 25.0, NULL, NULL, 1),
(3, 2, '2024-11-01 19:00:00', 'domicilio', 27.5, '87654321D', '2024-11-01 19:30:00', 2),
(4, 2, '2024-11-03 20:30:00', 'recogida', 10.0, NULL, NULL, 2),
(5, 3, '2024-11-02 18:00:00', 'domicilio', 17.0, '87654321F', '2024-11-02 18:30:00', 3),
(6, 4, '2024-11-03 11:30:00', 'domicilio', 12.0, '87654321B', '2024-11-03 12:00:00', 1),
(7, 4, '2024-11-03 13:00:00', 'recogida', 9.0, NULL, NULL, 1),
(8, 5, '2024-11-04 16:00:00', 'domicilio', 8.0, '87654321D', '2024-11-04 16:30:00', 2),
(9, 5, '2024-11-04 17:30:00', 'recogida', 14.5, NULL, NULL, 3),
(10, 3, '2024-11-05 20:00:00', 'domicilio', 15.0, '87654321F', '2024-11-05 20:30:00', 3);

INSERT INTO pedido_producto (pedido_id, producto_id, cantidad) VALUES
(1, 1, 2), 
(1, 5, 1), 
(2, 2, 1), 
(2, 4, 1), 
(3, 3, 1), 
(3, 5, 2), 
(4, 4, 1), 
(5, 1, 1), 
(6, 2, 1), 
(7, 5, 1), 
(8, 4, 1), 
(9, 3, 1), 
(10, 2, 1);
