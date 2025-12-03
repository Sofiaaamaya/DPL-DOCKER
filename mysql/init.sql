-- Archivo: mysql/init.sql

-- Crear la tabla users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password CHAR(64) NOT NULL -- SHA256 usa 64 caracteres
);

-- Insertar usuarios con la contraseña hasheada (Contraseña: 12345)
-- Usamos SHA2(?, 256) en PHP, por lo tanto, insertamos hasheando aquí.
INSERT INTO users (username, password) VALUES 
('fran_es', SHA2('12345', 256)),
('fran_fr', SHA2('12345', 256)),
('fran_de', SHA2('12345', 256)),
('fran_en', SHA2('12345', 256));
