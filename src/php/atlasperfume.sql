-- Crear base de datos
CREATE DATABASE atlas_perfume;
USE atlas_perfume;

-- Tabla país
CREATE TABLE pais (
id_pais INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL
);

-- Tabla IVA
CREATE TABLE iva (
id_iva INT AUTO_INCREMENT PRIMARY KEY,
tipo VARCHAR(50) NOT NULL,
descripcion VARCHAR(255)
);

-- Tabla Perfume
CREATE TABLE perfume (
id_perfume INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
precio DECIMAL(10,2) NOT NULL,
id_pais INT,
FOREIGN KEY (id_pais) REFERENCES pais(id_pais)
ON DELETE SET NULL
ON UPDATE CASCADE
);

-- Tabla stock
CREATE TABLE stock (
id_perfume INT PRIMARY KEY,
stock_actual INT NOT NULL,
FOREIGN KEY (id_perfume) REFERENCES perfume(id_perfume)
ON DELETE CASCADE 
ON UPDATE CASCADE
);

-- Tabla Pedidos
CREATE TABLE pedidos (
id_pedido INT AUTO_INCREMENT PRIMARY KEY,
cliente VARCHAR(20) NOT NULL,
fecha_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
ON DELETE CASCADE ON UPDATE CASCADE
);

-- Tabla cliente
CREATE TABLE cliente (
dni VARCHAR(20) PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
correo VARCHAR(100) NOT NULL UNIQUE,
telefono VARCHAR(50),
direccion VARCHAR(255),
edad INT,
password VARCHAR(255),
es_admin BOOLEAN DEFAULT 0
);

-- Tabla Línea de Pedido
CREATE TABLE linea_pedido (
id_linea_pedido INT AUTO_INCREMENT PRIMARY KEY,
id_pedido INT NOT NULL,
cantidad INT NOT NULL,
precio_unidad DECIMAL(10,2) NOT NULL,
iva_incluido TINYINT(1) DEFAULT 0,
iva_aplicado DECIMAL(5,2) DEFAULT 0.00,
FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido)
ON DELETE CASCADE 
ON UPDATE CASCADE,
);
