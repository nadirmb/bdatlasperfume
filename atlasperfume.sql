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
);

-- Tabla stock
CREATE TABLE stock (
id_perfume INT PRIMARY KEY,
stock_actual INT NOT NULL,
FOREIGN KEY (id_perfume) REFERENCES perfume(id_perfume)
ON DELETE CASCADE ON UPDATE CASCADE
);