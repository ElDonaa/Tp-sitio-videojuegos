-- TP6: Consultas DML de prueba para GAMEZONE
USE gamezone_db;

-- 1. CREATE (Insertar datos reales de tu web)
INSERT INTO roles (nombre_rol) VALUES ('Administrador'), ('Redactor'), ('Gamer');

INSERT INTO categorias (nombre_categoria) VALUES ('RPG'), ('Acción'), ('Shooter'), ('Carreras');

INSERT INTO plataformas (nombre_plataforma) VALUES ('PC Master Race'), ('PlayStation 5'), ('Xbox Series X|S'), ('Nintendo Switch');

INSERT INTO usuarios (nombre, email, password, id_rol) 
VALUES ('GamerPro', 'gamerpro@gamezone.com', 'hash_seguro_123', 1);

INSERT INTO juegos (titulo, calificacion, id_categoria) 
VALUES 
('Elden Ring', 9.8, 1),
('Cyberpunk 2077', 9.2, 1),
('Forza Horizon 5', 9.4, 4);

INSERT INTO juego_plataforma (id_juego, id_plataforma) VALUES 
(1, 1), (1, 2), (1, 3), -- Elden Ring en PC, PS5, Xbox
(2, 1), (2, 2), (2, 3); -- Cyberpunk en PC, PS5, Xbox

INSERT INTO publicaciones (titulo, contenido, tipo, id_juego, id_usuario) 
VALUES 
('Cyberpunk 2077: La Redención Final', 'Análisis profundo tras las actualizaciones y Phantom Liberty.', 'analisis', 2, 1),
('Nuevo tráiler de GTA VI', 'Todo lo que sabemos hasta la fecha sobre el nuevo título de Rockstar.', 'noticia', NULL, 1);

-- 2. READ (Consultas con WHERE, ORDER BY e INNER JOIN)
SELECT * FROM juegos WHERE calificacion >= 9.0 ORDER BY calificacion DESC;

SELECT 
    p.id_publicacion,
    p.titulo AS publicacion_titulo,
    p.tipo,
    j.titulo AS juego_relacionado,
    u.nombre AS autor,
    p.created_at
FROM publicaciones p
INNER JOIN usuarios u ON p.id_usuario = u.id_usuario
LEFT JOIN juegos j ON p.id_juego = j.id_juego
ORDER BY p.created_at DESC;

-- 3. UPDATE (Modificar registro con WHERE)
UPDATE juegos 
SET calificacion = 9.5 
WHERE id_juego = 2;

-- 4. DELETE (Eliminar registro con WHERE)
DELETE FROM publicaciones 
WHERE id_publicacion = 2;