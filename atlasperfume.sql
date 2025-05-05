-- Crear base de datos
CREATE DATABASE atlas_perfume;
USE atlas_perfume;

-- Tabla país
CREATE TABLE pais (
id_pais INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL
);