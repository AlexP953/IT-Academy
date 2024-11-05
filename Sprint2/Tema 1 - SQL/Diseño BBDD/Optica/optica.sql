CREATE TABLE cliente (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(100) NOT NULL,
  codigo_postal int,
  telefono varchar(15) NOT NULL,
  correo varchar(100) NOT NULL,
  fecha_registro date NOT NULL,
  recomendado_por varchar(100)
);

CREATE TABLE direccion_proveedor (
  calle varchar(100) NOT NULL,
  numero varchar(10) NOT NULL,
  piso varchar(10) NOT NULL,
  ciudad varchar(50) NOT NULL,
  codigo_postal int NOT NULL,
  pais varchar(50) NOT NULL,
  proveedor_id int NOT NULL PRIMARY KEY
);

CREATE TABLE gafa (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  marca varchar(100) NOT NULL,
  graduacion_izq float NOT NULL,
  graduacion_der float NOT NULL,
  montura enum('flotante', 'pasta', 'metálica') NOT NULL,
  color_izq varchar(50) NOT NULL,
  color_der varchar(50) NOT NULL,
  precio float NOT NULL
);

CREATE TABLE marca (
  nombre varchar(100) NOT NULL PRIMARY KEY,
  proveedor_id int NOT NULL
);

CREATE TABLE proveedor (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(100) NOT NULL,
  telefono varchar(15) NOT NULL,
  fax varchar(15),
  nif varchar(50) NOT NULL
);

CREATE TABLE vendedor (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(100) NOT NULL
);

CREATE TABLE venta (
  id bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  fecha date NOT NULL,
  cantidad int NOT NULL,
  cliente_id int NOT NULL,
  vendedor_id int NOT NULL,
  gafa_id int NOT NULL,
  FOREIGN KEY (cliente_id) REFERENCES cliente(id),
  FOREIGN KEY (vendedor_id) REFERENCES vendedor(id),
  FOREIGN KEY (gafa_id) REFERENCES gafa(id)
);

ALTER TABLE gafa ADD CONSTRAINT gafa_marca_fk FOREIGN KEY (marca) REFERENCES marca(nombre);
ALTER TABLE marca ADD CONSTRAINT marca_proveedor_fk FOREIGN KEY (proveedor_id) REFERENCES proveedor(id);
ALTER TABLE direccion_proveedor ADD CONSTRAINT direccion_proveedor_fk FOREIGN KEY (proveedor_id) REFERENCES proveedor(id);


-- DATOS DE PRUEBA CREADOS POR CHATGPT

INSERT INTO cliente (nombre, codigo_postal, telefono, correo, fecha_registro, recomendado_por) VALUES
('Juan Pérez', 28001, '611111111', 'juan.perez@example.com', '2024-01-01', NULL),
('María García', 28002, '622222222', 'maria.garcia@example.com', '2024-02-01', 'Juan Pérez'),
('Carlos López', 28003, '633333333', 'carlos.lopez@example.com', '2024-03-01', 'María García');

INSERT INTO proveedor (nombre, telefono, fax, nif) VALUES
('Proveedor A', '911111111', '912222222', 'A12345678'),
('Proveedor B', '922222222', '923333333', 'B87654321'),
('Proveedor C', '933333333', NULL, 'C56789012');

INSERT INTO direccion_proveedor (calle, numero, piso, ciudad, codigo_postal, pais, proveedor_id) VALUES
('Calle Mayor', '10', '2A', 'Madrid', 28013, 'España', 1),
('Avenida Principal', '15', '3B', 'Barcelona', 08015, 'España', 2),
('Calle Falsa', '123', '1C', 'Valencia', 46001, 'España', 3);

INSERT INTO marca (nombre, proveedor_id) VALUES
('RayBan', 1),
('Oakley', 2),
('Prada', 3);

INSERT INTO gafa (marca, graduacion_izq, graduacion_der, montura, color_izq, color_der, precio) VALUES
('RayBan', 1.25, 1.50, 'flotante', 'negro', 'negro', 150.0),
('Oakley', 2.00, 2.25, 'pasta', 'azul', 'verde', 200.0),
('Prada', 0.75, 0.75, 'metálica', 'rojo', 'rojo', 300.0);

INSERT INTO vendedor (nombre) VALUES
('Vendedor 1'),
('Vendedor 2'),
('Vendedor 3');

INSERT INTO venta (fecha, cantidad, cliente_id, vendedor_id, gafa_id) VALUES
('2024-05-01', 1, 1, 1, 1),
('2024-06-01', 2, 2, 2, 2),
('2024-07-01', 1, 3, 3, 3);
