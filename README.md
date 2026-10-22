# Tp-sitio-videojuegos
Trabajo práctico - Sitio web sobre videojuegos
## Clase 5: Procesamiento de Formularios y Seguridad Web

En esta entrega se incorporó la lógica del lado del servidor (PHP) para el procesamiento seguro de formularios, aplicando mitigación contra ataques de Cross-Site Scripting (XSS) mediante sanitización y validación estricta.

### 1. Descripción de los Formularios Creados
* **Formulario de Contacto (`contacto.php` - Método POST):**
  * Diseñado para el envío de consultas de los usuarios.
  * Implementa validación en el servidor para verificar que los campos no estén vacíos (`empty`, `isset`) y comprueba el formato válido del correo electrónico (`filter_var`).
  * Utiliza sanitización con `trim()` y codificación de salida con `htmlspecialchars()` para prevenir inyecciones XSS.
  * Cuenta con retroalimentación visual de mensajes de éxito/error y **persistencia de datos** en los campos en caso de errores.

* **Formulario de Búsqueda (`buscar.php` - Método GET):**
  * Diseñado para filtrar y consultar el catálogo de videojuegos.
  * Procesa los parámetros de consulta de manera segura mediante el método GET, sanitizando la entrada del usuario y manteniendo la persistencia del término buscado en la interfaz.

---

### 2. Capturas de Pantalla (Evidencia de Funcionamiento)

* **Formulario de Contacto (Funcionamiento y Validación por POST):**  
  *(Inserta aquí tu captura de pantalla de `contacto.php` mostrando la validación o el mensaje de éxito)*  
  `![Captura Contacto POST](img/captura-contacto.png)`

* **Módulo de Búsqueda (Funcionamiento por GET y Persistencia):**  
  *(Inserta aquí tu captura de pantalla de `buscar.php` mostrando el resultado)*  
  `![Captura Buscador GET](img/captura-buscar.png)`