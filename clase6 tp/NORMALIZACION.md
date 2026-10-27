# Trabajo Práctico N° 6 - Parte 1: Normalización
**Proyecto:** GAMEZONE  
**Alumno:** Donato Prieto  

## 1. Tabla Sin Normalizar (Ejemplo)
En el portal se publican contenidos (noticias, guías y análisis) que asocian juegos, plataformas y autores. Un registro no normalizado se vería así:

| id_contenido | titulo | tipo | juego | plataformas | categorias | autor_nombre | autor_email |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| 1 | Cyberpunk 2077: La Redención Final | Análisis | Cyberpunk 2077 | PC, PS5, Xbox Series X | RPG, Sci-Fi | Donato Prieto | donato@gamezone.com |

## 2. Proceso de Normalización
- **1FN (Atomicidad):** Se eliminan las listas de valores en `plataformas` y `categorias`, obligando a que cada atributo contenga valores atómicos.
- **2FN (Dependencia Funcional):** Se separa la información del autor a la entidad `usuarios` y la del juego a la entidad `juegos`, eliminando redundancias.
- **3FN (Dependencia Transitiva):** Se independizan las plataformas, categorías y roles a sus respectivas tablas maestras (`plataformas`, `categorias`, `roles`).

## 3. Tablas Resultantes (Esquema)
1. `roles` (id_rol, nombre_rol)
2. `usuarios` (id_usuario, nombre, email, password, id_rol, created_at, updated_at)
3. `categorias` (id_categoria, nombre_categoria)
4. `plataformas` (id_plataforma, nombre_plataforma)
5. `juegos` (id_juego, titulo, calificacion, id_categoria, created_at, updated_at)
6. `juego_plataforma` (id_juego, id_plataforma)
7. `publicaciones` (id_publicacion, titulo, contenido, tipo, id_juego, id_usuario, created_at, updated_at)