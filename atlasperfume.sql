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